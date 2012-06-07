<?php

class BootstrapAdminController extends BootstrapAdminAppController {

	public function index()	{
		$this->redirect(array('plugin' => 'bootstrap_admin', 'controller' => 'dashboard'));
	}


}
