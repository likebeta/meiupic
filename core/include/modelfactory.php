<?php
/**
 * $Id$
 * 
 * @author : Lingter
 * @support : http://www.meiu.cn
 * @copyright : (c)2010 meiu.cn lingter@gmail.com
 */
class modelfactory{
    
    function modelfactory(){
        $this->output =& get_output();
        $this->db =& db();
    }
}