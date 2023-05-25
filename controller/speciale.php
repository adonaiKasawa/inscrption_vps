<?php 

/**
 * 
 */
class Speciale extends Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->view->js = array('speciale/js/speciale.js');	
	}

	function index() {
		$this->view->title = 'level3 | inscription speciale';
		$this->view->active = 'home';
		$this->view->user = $this->user;
        $this->view->rende('speciale/index');
    }
}