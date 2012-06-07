<?php

class BootstrapAdminAppController extends AppController {

	//public $components = array('Auth');
	public $helpers = array('BootstrapAdmin.Navbar');

	public function beforeFilter() {
		//var_dump($this); exit;
	}

}
