<?php
/**
 * $Id: album.mdl.php 43 2010-07-07 01:42:43Z lingter $
 * 
 * @author : Lingter
 * @support : http://www.meiu.cn
 * @copyright : (c)2010 - 2011 meiu.cn lingter@gmail.com
 */

class album_mdl extends modelfactory{
    var $table_name = '#@albums';
    
    function _filters($filters){
        $str = 'deleted=0';
        if(isset($filters['name']) && $filters['name']!=''){
            $str .= " and name like '%".$this->db->q_str($filters['name'],false)."%'";
        }
        if(isset($filters['tag']) && $filters['tag'] != ''){
            $tag_info = loader::model('tag')->get_by_type_name($filters['tag'],1);
            if($tag_info){
                $str .= " and id in (select rel_id from ".$this->db->stripTpre('#@tag_rel')." where tag_id=".intval($tag_info['id']).")";
            }else{
                $str .= " and 1=0";
            }
        }
        if(! loader::model('user')->loggedin()){
            $str .= " and priv_type<>3";
        }
        return $str;
    }
    
    function _sort($sort){
        switch($sort){
            case 'ct_asc':
                $str = 'create_time asc';
                break;
            case 'ct_desc':
                $str = 'create_time desc';
                break;
            case 'ut_asc':
                $str = 'up_time asc';
                break;
            case 'ut_desc':
                $str = 'up_time desc';
                break;
            case 'p_asc':
                $str = 'photos_num asc';
                break;
            case 'p_desc':
                $str = 'photos_num desc';
                break;
            default:
                $str = $this->default_order;
        }
        return $str;
    }
    
    function get_kv($album_id = 0){
        $where = 'deleted=0';
        if($album_id>0){
            $where = ' and id <> '.intval($album_id);
        }
        $this->db->select('#@albums','id,name',$where,'id desc');
        return $this->db->getAssoc();
    }
    
    function real_delete($id,$album_info=null){
        if(is_null($album_info)){
            $album_info = $this->get_info($id);
        }
        if($album_info > 0){
            $cover = get_album_cover($id,$album_info['cover_ext']);
            @unlink(ROOTDIR.$cover);
        }
        //remove comments
        $mdl_comment =& loader::model('comment');
        $mdl_comment->delete_by_ref(1,$id);
        
        $mdl_photo = & loader::model('photo');
        $photos = $mdl_photo->get_all_items($id);
        if($photos){
            foreach($photos as $v){
                $mdl_photo->real_delete($v['id'],$v);
            }
        }
        return $this->delete($id);
    }
    
    function restore($id){
        return $this->update($id,array('deleted'=>'0'));
    }
    
    function get_trash_count(){
        $this->db->select('#@albums','count(*)','deleted=1');
        return $this->db->getOne();
    }
    
    function get_trash($page=null){
        $this->db->select('#@albums','*','deleted=1');
        if($page){
            $data = $this->db->toPage($page,20);
        }else{
            $data = $this->db->getAll();
        }
        return $data;
    }
    
    function trash($id){
        trash_status(1);
        return $this->update($id,array('deleted'=>1));
    }
    
    function trash_batch($ids){
        if(!is_array($ids)){
            return false;
        }
        $this->db->update('#@albums','id in ('.implode(',',$ids).')',array('deleted'=>1));
        if(!$this->db->query()){
            return false;
        }
        trash_status(1);
        return true;
    }
    
    function update_photos_num($id,$up=true){
        $this->db->select('#@photos','count(id)','album_id='.intval($id).' and deleted=0');
        $arr['photos_num'] = $this->db->getOne();
        if($up){
            $arr['up_time'] = time();
        }
        return $this->update($id,$arr);
    }
    
    function update_comments_num($id){
        $this->db->select('#@comments','count(id)','ref_id='.intval($id).' and type=1');
        $arr['comments_num'] = $this->db->getOne();
        return $this->update($id,$arr);
    }
    
    function check_repare_cover($id){
        $info = $this->get_info($id);
        $photo = loader::model('photo')->get_info($info['cover_id']);
        if($photo && $photo['deleted']==0 && $photo['album_id']==$id){
            return true;
        }
        $this->db->select('#@photos','id,path','album_id='.intval($id).' and deleted=0');
        $this->db->selectLimit(null,1);
        $photo_info = $this->db->getRow();
        if($photo_info){
            $cover_info['cover_id'] = $photo_info['id'];
        
            $this->db->update('#@photos','album_id='.intval($id),array('is_cover'=>0));
            $this->db->query();
            $this->db->update('#@photos','id='.intval($cover_info['cover_id']),array('is_cover'=>1));
            $this->db->query();
            $this->make_cover_img($id,$photo_info['path'],$ext);
        
            $cover_info['cover_ext'] = $ext;
        }else{
            $cover_info['cover_id'] = 0;
        }
        
        return $this->update($id,$cover_info);
    }
    
    function make_cover_img($album_id,$path,& $ext){
        $imglib =& loader::lib('image');
        $imglib->load(ROOTDIR.$path);
        $imglib->square(150);
        $ext = $imglib->getExtension();
        $cover_dir = ROOTDIR.'data/cover';
        $cover_path = $cover_dir.'/'.$album_id.'.'.$ext;
        if(!is_dir($cover_dir)){
            mkdir($cover_dir);
        }
        $imglib->save($cover_path);
    }
    
    function set_cover($pic_id){
        $pic_info = loader::model('photo')->get_info($pic_id);
        $arr['cover_id'] = $pic_id;
        
        $this->db->update('#@photos','album_id='.intval($pic_info['album_id']),array('is_cover'=>0));
        $this->db->query();
        $this->db->update('#@photos','id='.intval($pic_id),array('is_cover'=>1));
        $this->db->query();
        $this->make_cover_img($pic_info['album_id'],$pic_info['path'],$ext);
        $arr['cover_ext'] = $ext;
        return $this->update($pic_info['album_id'],$arr);
    }
    
    function check_album_priv($id,$album_info = null){
        $logined = loader::model('user')->loggedin();
        if($logined){
            return true;
        }
        
        if(is_null($album_info)){
            $album_info = $this->get_info($id);
        }
        
        if($album_info['priv_type']==0){
            return true;
        }
        if($album_info['priv_type']==3){
            return false;
        }
        $key = 'Mpic_album_priv_'.$id;
        if($album_info['priv_type']==1){
            if(isset($_COOKIE[$key])){
               if($_COOKIE[$key] == md5($album_info['priv_pass'])){
                   return true;
               }
            }
        }
        if($album_info['priv_type']==2){
            if(isset($_COOKIE[$key])){
               if($_COOKIE[$key] == md5($album_info['priv_question'].$album_info['priv_answer'])){
                   return true;
               }
            }
        }
        return false;
    }
}