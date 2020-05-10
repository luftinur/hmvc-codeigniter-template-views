<?php (defined('BASEPATH')) OR exit('No direct script access allowed');
/**
 *  Theme Helper
 *
 * @package     Theme_Helper
 * @author      Lufti Nurfahmi
 * @copyright   Copyright (c) 2019 - 2020 KodingSpace.
 * @link     	https://www.kodingspace.com
 */


class Theme{
    
    /** 
     * Render View to Theme Base on Config
     * @param $viewname, $type
     * $viewname => your view name, example : home.php
     * $type => index of theme config base on config/theme_config.php
     * 
     * */ 
    public static function renderView($data, $type = 'front', $hmvc = false){

        $ci =& get_instance();

        $theme = $ci->config->item("theme");
        $theme_name = $theme[$type]["name"];

        /* Variabel $viewName to load in index.master.php */
        if($hmvc){
            $data['viewName'] = $data['fileName'];
        }else{
            $data['viewName'] = $theme_name.'/'.$data['fileName'];
        }
       

        /* Pass theme_name for template url */
        $theme_path = 'themes/'.$theme_name;
        $file_master = $theme[$theme_name]["file_master"];

        // if theme folder not exist then redirect to 404;
        if(!is_dir($theme_path)){
            show_404();
        }
        
        $ci->load->view($theme_name.'/'.$file_master, $data);
        
    }

    public static function pageTitle($title = ''){
	
        if($title != ""){
            $siteName = "Theme Helper Codeigniter with HMVC | ". $title;
        }else{
            $siteName = "Theme Helper Codeigniter with HMVC";
        }
        return $siteName;
		
    }

    /**
     * Get template url directory 
     * for accessing public assets inside theme directory
     */
    public static function templateUrl($type= 'front'){
        $ci =& get_instance();
        return  $ci->config->base_url().'themes/'.$type;
    }

    /**
     * Get template path 
     * for accessing public assets inside theme directory
     */

    public static function templatePath($type= 'front'){
        $ci =& get_instance();
        return  'themes/'.$type;
    }
    
     /**
     * Add script file
     */

    public static function addScript($fileUrl = ""){
        if($fileUrl != ""){
            return "<script src='".$fileUrl."' type='text/javascript'></script>";
        }
        return "";    
    }

    /**
     * Add css file
     */
   public static function addStyle($fileUrl = ""){
        
        if($fileUrl != ""){
            
            return "<link rel='stylesheet' type='text/css' href='".$fileUrl."' />";
            
        }
        return "";
        
   }
    
}

?>