<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* load the MX_Router class */
require APPPATH . "third_party/MX/Controller.php";

class MY_Controller extends MX_Controller{

    protected 
            $ci;
            
    protected static 
            $front_theme = 'front',
            $admin_theme = 'admin';

    function __construct()
    {
        parent::__construct();
        $this->ci =& get_instance();

        /* Add Style Sample */
        //$this->ci->data['link_header'][] = Theme::addStyle("https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");
        
        /* Add Script Sample */
        //$this->ci->data['link_header'][] = Theme::addScript("https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js");
    }

}



/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */