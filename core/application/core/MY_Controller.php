<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* load the MX_Router class */
require APPPATH . "third_party/MX/Controller.php";

class MY_Controller extends MX_Controller{

    protected 
            $ci;

    function __construct()
    {
        parent::__construct();
        
        $this->ci =& get_instance();
    
              
    }
 
}



/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */