<?php

/**
 * 
 */
class Authentication extends Controller
{

  function __construct()
  {
    parent::__construct();
    $this->view->js = array('home/js/inscription.js');
    Session::init();
    $this->access_token = Session::get('access_token');
    $this->refresh_token = Session::get('refresh_token');
  }

  function index()
  {
    $this->view->title = 'level3 | Page D\'accueil';
    $this->view->active = 'home';
    $this->view->user = $this->user;
    $this->view->rende('home/index');
  }

  public function getToken()
  {
    print_r('{"access_token" : "' . $this->access_token . '", "refresh_token": "' . $this->refresh_token . '" }');
  }
  
  public function refreshToken()
  {
    $access_token  = htmlspecialchars($_POST['access_token']);
    $refresh_token = htmlspecialchars($_POST['refresh_token']);
    $_SESSION['refresh_token'] = $refresh_token;
    $_SESSION['access_token']  = $access_token;
    print_r('{"access_token" : "' . $_SESSION['access_token'] . '", "refresh_token": "' . $_SESSION['refresh_token'] . '" }');
  }
}
