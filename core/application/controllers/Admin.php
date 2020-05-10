<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->data['fileName'] = "welcome_admin.php";

		// Without second parameter the view will load in front theme by default;
		Theme::renderView($this->data, 'admin');
	}
}
