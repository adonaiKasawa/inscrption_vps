<?php 

/**
 * 
 */
class My_error extends Controller
{
	
	function __construct()
	{
		parent::__construct();
	    // $Auth = new Auth;
        // $Auth->handleLogin();
		
	}
	function index() {
		$this->view->title = '404 Error' ;
        $this->view->msg = 'This page doesnt exist';
		$this->view->user = $this->user;
        $this->view->rende('error/index');
	}
}
