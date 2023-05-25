<?php 

/**
 * 
 */
class Logout extends Controller
{
	
	function __construct()
	{
		parent::__construct();
	    Session::init();
        Session::destroy();

        header("location:".URL);
	}
}
