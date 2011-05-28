<?php

class setting_ctl extends pagecore{
    
    function _init(){
        $setting_menu = $this->plugin->filter('setting_menu','');
        $this->output->set('setting_menu',$setting_menu);
    }
    
    function index(){
        need_login('page');
        
        $site = $this->setting->get_conf('site');
        $site['description'] = safe_invert($site['description']);
        $site['footer'] = safe_invert($site['footer'],true);
        $this->output->set('site',$site);
        $this->output->set('enable_comment',$this->setting->get_conf('system.enable_comment'));
        $this->output->set('show_process_info',$this->setting->get_conf('system.show_process_info'));
        $this->output->set('gravatar_url',$this->setting->get_conf('system.gravatar_url'));
        
        
        
        $page_title = lang('basic_setting').' - '.lang('system_setting').' - '.$this->setting->get_conf('site.title');
        $page_keywords = $this->setting->get_conf('site.keywords');
        $page_description = $this->setting->get_conf('site.description');
        
        $this->page_init($page_title,$page_keywords,$page_description);
        $this->render();
    }
    
    function save_basic(){
        need_login('ajax_box');
        
        $site = $this->getPost('site');
        $site['title'] = safe_convert($site['title']);
        $site['url'] = safe_convert($site['url']);
        $site['keywords'] = safe_convert($site['keywords']);
        $site['description'] = safe_convert($site['description']);
        
        $gravatar_url = safe_convert($this->getPost('gravatar_url'));
        
        if($site['title'] == ''){
            form_ajax_failed('box',lang('empty_site_name'));
        }
        if($site['url'] == ''){
            form_ajax_failed('box',lang('empty_site_url'));
        }
        $this->setting->set_conf('site.title',$site['title']);
        $this->setting->set_conf('site.url',$site['url']);
        $this->setting->set_conf('site.keywords',$site['keywords']);
        $this->setting->set_conf('site.description',$site['description']);
        $this->setting->set_conf('site.footer',safe_convert($site['footer'],true));
        $this->setting->set_conf('system.gravatar_url',$gravatar_url);
        
        if($this->getPost('enable_comment')){
            $this->setting->set_conf('system.enable_comment',true);
        }else{
            $this->setting->set_conf('system.enable_comment',false);
        }
        if($this->getPost('show_process_info')){
            $this->setting->set_conf('system.show_process_info',true);
        }else{
            $this->setting->set_conf('system.show_process_info',false);
        }
        form_ajax_success('box',lang('save_setting_success'),null,0.5,$_SERVER['HTTP_REFERER']);
    }
    
    function upload(){
        need_login('page');
        
        $upload = $this->setting->get_conf('upload');
        $this->output->set('upload',$upload);
        
        $page_title = lang('upload_setting').' - '.lang('system_setting').' - '.$this->setting->get_conf('site.title');
        $page_keywords = $this->setting->get_conf('site.keywords');
        $page_description = $this->setting->get_conf('site.description');
        
        $this->page_init($page_title,$page_keywords,$page_description);
        $this->render();
    }
    
    function save_upload(){
        need_login('ajax_box');
        
        $upload = $this->getPost('upload');
        $enable_pre_resize = $this->getPost('enable_pre_resize');
        if($enable_pre_resize){
            if($upload['resize_width'] == '' || !is_numeric($upload['resize_width'])){
                form_ajax_failed('box',lang('resize_width_error'));
            }
            if($upload['resize_height'] == '' || !is_numeric($upload['resize_height'])){
                form_ajax_failed('box',lang('resize_height_error'));
            }
            if($upload['resize_quality'] < 1 || $upload['resize_quality'] > 100){
                form_ajax_failed('box',lang('resize_quality_error'));
            }
            $this->setting->set_conf('upload.resize_width',$upload['resize_width']);
            $this->setting->set_conf('upload.resize_height',$upload['resize_height']);
            $this->setting->set_conf('upload.resize_quality',$upload['resize_quality']);
            $this->setting->set_conf('upload.enable_pre_resize',true);
        }else{
            $this->setting->set_conf('upload.enable_pre_resize',false);
        }
        
        $this->setting->set_conf('upload.allow_size',$upload['allow_size']);
        form_ajax_success('box',lang('save_setting_success'),null,0.5,$_SERVER['HTTP_REFERER']);
    }
    
    function watermark(){
        need_login('page');
        
        $fonts = get_fonts();
        $this->output->set('fonts',$fonts);
        
        $watermark = $this->setting->get_conf('watermark');
        $this->output->set('watermark',$watermark);
        
        $page_title = lang('watermark_setting').' - '.lang('system_setting').' - '.$this->setting->get_conf('site.title');
        $page_keywords = $this->setting->get_conf('site.keywords');
        $page_description = $this->setting->get_conf('site.description');
        
        $this->page_init($page_title,$page_keywords,$page_description);
        $this->render();
    }
    
    function save_watermark(){
        need_login('ajax_box');
        
        $watermark_type = $this->getPost('watermark_type','0');
        $watermark = $this->getPost('watermark');
        $this->setting->set_conf('watermark.type',$watermark_type);
        if(!isset($watermark['water_mark_pos'])){
            $watermark['water_mark_pos'] = 5;
        }
        
        if($watermark_type == 1){
            if($watermark['water_mark_image'] == ''){
                form_ajax_failed('box',lang('water_mark_image_error'));
            }
            if($watermark['water_mark_opacity'] < 0 || $watermark['water_mark_opacity'] > 100){
                form_ajax_failed('box',lang('water_mark_opacity_error'));
            }
            $this->setting->set_conf('watermark.water_mark_image',$watermark['water_mark_image']);
            $this->setting->set_conf('watermark.water_mark_opacity',$watermark['water_mark_opacity']);
            $this->setting->set_conf('watermark.water_mark_pos',$watermark['water_mark_pos']);
        }elseif($watermark_type == 2){
            if($watermark['water_mark_string'] == ''){
                form_ajax_failed('box',lang('water_mark_string_error'));
            }
            if($watermark['water_mark_fontsize'] < 1){
                form_ajax_failed('box',lang('water_mark_fontsize_error'));
            }
            if(!check_color($watermark['water_mark_color'])){
                form_ajax_failed('box',lang('water_mark_color_error'));
            }
            if(!isset($watermark['water_mark_font']) || !$watermark['water_mark_font']){
                form_ajax_failed('box',lang('water_mark_font_error'));
            }
            if($watermark['water_mark_angle'] < 0 || $watermark['water_mark_angle'] > 360){
                form_ajax_failed('box',lang('water_mark_angle_error'));
            }
            if($watermark['water_mark_opacity'] < 0 || $watermark['water_mark_opacity'] > 100){
                form_ajax_failed('box',lang('water_mark_opacity_error'));
            }
            $this->setting->set_conf('watermark.water_mark_string',$watermark['water_mark_string']);
            $this->setting->set_conf('watermark.water_mark_fontsize',$watermark['water_mark_fontsize']);
            $this->setting->set_conf('watermark.water_mark_color',$watermark['water_mark_color']);
            $this->setting->set_conf('watermark.water_mark_font',$watermark['water_mark_font']);
            $this->setting->set_conf('watermark.water_mark_angle',$watermark['water_mark_angle']);
            $this->setting->set_conf('watermark.water_mark_opacity',$watermark['water_mark_opacity']);
            $this->setting->set_conf('watermark.water_mark_pos',$watermark['water_mark_pos']);
        }
        form_ajax_success('box',lang('save_setting_success'),null,0.5,$_SERVER['HTTP_REFERER']);
    }
    
    function fileupload(){
        $error = "";
        $msg = "";
        $fileElementName = 'fileToUpload';
        if(!empty($_FILES[$fileElementName]['error'])){
            $error = lang('upload_error');
        }elseif(empty($_FILES[$fileElementName]['tmp_name']) || $_FILES[$fileElementName]['tmp_name'] == 'none'){
            $error = lang('need_sel_upload_file');
        }else{
            $path_dir = 'data/watermark';
            if(!file_exists(ROOTDIR.$path_dir)){
                @mkdir(ROOTDIR.$path_dir);
            }
            $filename = $_FILES[$fileElementName]['name'];
            $fileext = file_ext($filename);
            $path = $path_dir.'/'.date('Ymd').'.'.$fileext;
            if(@move_uploaded_file($_FILES[$fileElementName]['tmp_name'],ROOTDIR.$path)){
                $msg = $path;
            }else{
                $error = lang('upload_error');
            }
        }
        
        echo loader::lib('json')->encode(array('error'=>$error,'msg'=>$msg));
        exit;
    }
    
    function themes(){
        need_login('page');

        $mdl_theme =& loader::model('theme');
        $themes = $mdl_theme->all_themes();
        $this->output->set('themes',$themes);

        $page_title = lang('theme_setting').' - '.lang('system_setting').' - '.$this->setting->get_conf('site.title');
        $page_keywords = $this->setting->get_conf('site.keywords');
        $page_description = $this->setting->get_conf('site.description');

        $this->page_init($page_title,$page_keywords,$page_description);
        $this->render();
    }
    
    function theme_set(){
        need_login('ajax_page');
        
        setcookie('MPIC_THEME','',- 86400 * 365,'/');
        
        $theme = $this->getGet('theme');
        $this->setting->set_conf('system.current_theme',$theme);
        
        ajax_box(lang('enable_success'),null,0.5,$_SERVER['HTTP_REFERER']);
    }
    
    function theme_edit(){
        need_login('ajax_page');
        
        $theme = $this->getGet('theme');
        $this->output->set('theme',$theme);
        $theme_lang_file = ROOTDIR.'themes/'.$theme.'/lang/'.LANGSET.'.lang.php';
        if(file_exists($theme_lang_file)){
            global $language;
            @include($theme_lang_file);
        }
        
        $_config =  $this->setting->get_conf('theme.'.$theme);
        
        ob_start();
        include template('_config',$theme,'themes/'.$theme);
        $setting_config = ob_get_clean();
        
        $this->output->set('setting_config',$setting_config);
        $this->render();
    }
    
    function theme_save_setting(){
        need_login('ajax');
        
        $theme = $this->getGet('theme');
        
        $config = $this->getPosts();
        
        $check_config_file = ROOTDIR.'themes/'.$theme.'/_config.php';
        if(file_exists($check_config_file)){
            $theme_lang_file = ROOTDIR.'themes/'.$theme.'/lang/'.LANGSET.'.lang.php';
            if(file_exists($theme_lang_file)){
                global $language;
                @include($theme_lang_file);
            }
            include_once($check_config_file);
            check_theme_config($config);
        }
        
        $this->setting->set_conf('theme.'.$theme,$config);
        form_ajax_success('box',lang('save_setting_success'),null,0.5,$_SERVER['HTTP_REFERER']);
    }
    
    function theme_confirm_remove(){
        need_login('ajax_page');
        $theme = $this->getGet('theme');
        $this->output->set('theme',$theme);
        
        $this->render();
    }
    
    function theme_remove(){
        need_login('ajax_page');
        
        $theme = $this->getGet('theme');
        if($theme == ''){
            ajax_box(lang('empty_theme'));
        }
        if($theme == 'default'){
            ajax_box(lang('can_not_delete_default'));
        }
        $current_theme = $this->setting->get_conf('system.current_theme');
        if($current_theme == $theme){
            ajax_box(lang('theme_is_using'));
        }
        
        if(loader::model('theme')->remove($theme)){
            ajax_box(lang('delete_theme_success'),null,0.5,$_SERVER['HTTP_REFERER']);
        }else{
            ajax_box(lang('delete_theme_failed'));
        }
        
    }
    
    function plugins(){
        need_login('page');

        $plugins = $this->plugin->get_plugins();
        $this->output->set('plugins',$plugins);
        
        $page_title = lang('plugin_setting').' - '.lang('system_setting').' - '.$this->setting->get_conf('site.title');
        $page_keywords = $this->setting->get_conf('site.keywords');
        $page_description = $this->setting->get_conf('site.description');
        $Config = loader::config();
        $this->output->set('safemode',$Config['safemode']);
        
        $this->page_init($page_title,$page_keywords,$page_description);
        $this->render();
    }
    
    function plugin_install(){
        need_login('ajax_page');
        
        $plugin = $this->getGet('plugin');
        
        $plugin_obj = $this->plugin->get_plugin_obj($plugin);
        $plugin_obj && $plugin_obj->callback_install();
        
        if($this->plugin->install_plugin($plugin)){
            ajax_box(lang('install_plugin_success'),null,0.5,$_SERVER['HTTP_REFERER']);
        }else{
            ajax_box(lang('install_plugin_failed'));
        }
    }
    
    function plugin_enable(){
        need_login('ajax_page');
        
        $plugin = $this->getGet('plugin');
        
        $plugin_obj = $this->plugin->get_plugin_obj($plugin);
        $plugin_obj && $plugin_obj->callback_enable();
        
        if($this->plugin->enable_plugin($plugin)){
            ajax_box(lang('enable_plugin_success'),null,0.5,$_SERVER['HTTP_REFERER']);
        }else{
            ajax_box(lang('enable_plugin_failed'));
        }
    }
    
    function plugin_disable(){
        need_login('ajax_page');
        
        $plugin = $this->getGet('plugin');
        
        $plugin_obj = $this->plugin->get_plugin_obj($plugin);
        $plugin_obj && $plugin_obj->callback_disable();
        
        if($this->plugin->disable_plugin($plugin)){
            ajax_box(lang('stop_plugin_success'),null,0.5,$_SERVER['HTTP_REFERER']);
        }else{
            ajax_box(lang('stop_plugin_failed'));
        }
    }
    
    function plugin_remove(){
        need_login('ajax_page');
        
        $plugin = $this->getGet('plugin');
        
        $plugin_obj = $this->plugin->get_plugin_obj($plugin);
        $plugin_obj && $plugin_obj->callback_remove();
        
        if($this->plugin->remove_plugin($plugin)){
            ajax_box(lang('remove_plugin_success'),null,0.5,$_SERVER['HTTP_REFERER']);
        }else{
            ajax_box(lang('remove_plugin_failed'));
        }
    }
    
    function plugin_config(){
        need_login('ajax_page');
        
        $plugin = $this->getGet('plugin');
        $this->output->set('plugin',$plugin);

        $_config = $this->plugin->get_config($plugin);
        
        ob_start();
        include template('_config',$plugin,'plugins/'.$plugin);
        $plugin_config_fields = ob_get_clean();
        
        $this->output->set('plugin_config_fields',$plugin_config_fields);
        $this->render();
    }
    
    function plugin_save_config(){
        need_login('ajax');
        
        $plugin = $this->getGet('plugin');
        
        $plugin_obj = $this->plugin->get_plugin_obj($plugin);
        
        $config = $this->getPosts();
        
        $plugin_obj && $plugin_obj->save_config($config);
        
        if($this->plugin->save_config($plugin,$config)){
            form_ajax_success('box',lang('save_setting_success'),null,0.5,$_SERVER['HTTP_REFERER']);
        }else{
            form_ajax_success('text',lang('save_setting_failed'),null,0.5,$_SERVER['HTTP_REFERER']);
        }
        
    }
    
    function info(){
        need_login('page');
        $info = loader::model('utility')->sys_info();
        $this->output->set('info',$info);
        $size = dirsize(ROOTDIR.'cache');
        $this->output->set('cache_size',bytes2u($size));
        $page_title = lang('system_info').' - '.lang('system_setting').' - '.$this->setting->get_conf('site.title');
        $page_keywords = $this->setting->get_conf('site.keywords');
        $page_description = $this->setting->get_conf('site.description');

        $this->page_init($page_title,$page_keywords,$page_description);
        $this->render();
    }
    
    function clear_cache(){
        dir_clear(ROOTDIR.'cache/data');
        dir_clear(ROOTDIR.'cache/templates');
        dir_clear(ROOTDIR.'cache/tmp');
        
        ajax_box(lang('clear_cache_success'),null,0.5,$_SERVER['HTTP_REFERER']);
    }
    
    function phpinfo(){
        need_login('page');
        
        phpinfo();
    }
    
    
    function language(){
        need_login('page');
        
        $langs = loader::model('utility')->get_languages();
        $time_zones = loader::model('utility')->get_time_zones();
        
        $this->output->set('lang_list',$langs);
        $this->output->set('time_zones',$time_zones);
        $this->output->set('current_lang',$this->setting->get_conf('system.language'));
        $this->output->set('current_timezone',$this->setting->get_conf('system.timezone'));
        
        $page_title = lang('language_and_locale').' - '.lang('system_setting').' - '.$this->setting->get_conf('site.title');
        $page_keywords = $this->setting->get_conf('site.keywords');
        $page_description = $this->setting->get_conf('site.description');
        
        $this->page_init($page_title,$page_keywords,$page_description);
        $this->render();
    }
    
    function save_language(){
        need_login('ajax_box');
        
        $system = $this->getPost('system');
        if($system['language'] == ''){
            form_ajax_failed('box',lang('empty_langset'));
        }
        if($system['timezone'] == ''){
            form_ajax_failed('box',lang('empty_timezone'));
        }
        
        $this->setting->set_conf('system.language',$system['language']);
        $this->setting->set_conf('system.timezone',$system['timezone']);
        
        form_ajax_success('box',lang('save_setting_success'),null,0.5,$_SERVER['HTTP_REFERER']);
    }
}