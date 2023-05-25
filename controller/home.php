<?php

/**
 * 
 */
class Home extends Controller
{

  function __construct()
  {
    parent::__construct();
    $this->view->js = array('home/js/inscription.js');
    Session::init();
  }

  function index()
  {
    $this->view->title = 'level3 | Page D\'accueil';
    $this->view->active = 'home';
    $this->view->user = $this->user;
    $this->view->rende('home/index');
  }

  public function changeExercice()
  {
    if (isset($_POST['exerciceId'])) {
      # code...
      $getExercice = $this->model->getExercice();
      foreach ($getExercice as $key) {
        if ($key['id_exercice'] == (int)htmlspecialchars($_POST['exerciceId'])) {
          # code...
          Session::set('exerciceEncours', array(
            'id_exercice' => $key['id_exercice'],
            'annee_exercice' => $key['annee_exercice'],
            'debut_exercice' => $key['debut_exercice'],
            'fin_exercice' => $key['fin_exercice'],
            'etat_exercice' => $key['etat_exercice'],
          ));
          print_r('{"id_exercice" : "' . $key['id_exercice'] . '", "annee_exercice": "' . $key['annee_exercice'] . '","debut_exercice": "' . $key['debut_exercice'] . '",
              "fin_exercice": "' . $key['fin_exercice'] . '",
              "etat_exercice": "' . $key['etat_exercice'] . '"
            }');
        }
      }
    }
  }
  public function getAllExercice()
  {
    # code...
    $getExercice = $this->model->getExercice();
    foreach ($getExercice as $key) {
      if ($key['etat_exercice'] == 'ENCOURS') {
        # code...
        Session::set('exerciceEncours', array(
          'id_exercice' => $key['id_exercice'],
          'annee_exercice' => $key['annee_exercice'],
          'debut_exercice' => $key['debut_exercice'],
          'fin_exercice' => $key['fin_exercice'],
          'etat_exercice' => $key['etat_exercice'],
        ));
        print_r('{"id_exercice" : "' . $key['id_exercice'] . '", "annee_exercice": "' . $key['annee_exercice'] . '","debut_exercice": "' . $key['debut_exercice'] . '",
              "fin_exercice": "' . $key['fin_exercice'] . '",
              "etat_exercice": "' . $key['etat_exercice'] . '"
            }');
      }
    }
  }
}
