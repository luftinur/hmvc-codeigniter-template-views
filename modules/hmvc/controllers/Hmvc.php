<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hmvc extends MY_Controller {

	public function __construct(){
        parent::__construct();

	}

	public function index()
	{
		$this->data['fileName'] = "welcome_hmvc.php";

		// Without second parameter the view will load in front theme by default;
		Theme::renderView($this->data, 'admin');
	}
}
