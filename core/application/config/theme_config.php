<?php (defined('BASEPATH')) OR exit('No direct script access allowed');
/**
 *  Theme Config
 *
 * @package     Theme_Helper
 * @author      Lufti Nurfahmi
 * @copyright   Copyright (c) 2019 - 2020 KodingSpace.
 * @link     	https://www.kodingspace.com
 */

/**
 * You can add more array to set the theme
 * example: 
 * "themename_v1" => array("name" => "themename_v1", "file_master" => "index.master.php")
 * name is directory inside /theme/name
 * file_master is file master header, body, footer;
 */

 $config['theme'] = array(
     "admin" => array(
        'name' => 'admin', 
        'file_master' => 'index.master.php'
     ),
     "front" => array(
        'name' => 'front', 
        'file_master' => 'index.master.php' 
     )
 );