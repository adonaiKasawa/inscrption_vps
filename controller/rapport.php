<?php

/**
 * 
 */
class Rapport extends Controller
{

  function __construct()
  {
    parent::__construct();
    $this->view->js = array('rapport/js/rapport.js');
  }
  function index()
  {
    $this->view->title = 'level3 | Rapport Inscription';
    $this->view->active = 'home';
    $this->view->user = $this->user;
    $this->view->rende('rapport/index');
  }


  function xhrDataTable()
  {
    $this->model->xhr_dataTable();
  }

//DETAILS ETUDIANT
  public function viewEtudiant()
  {
    $id = $_POST['id'];
    $output = '';
    $select = $this->model->viewEtudiantBdd($id);
    $output .= '
                <div class=" table table-responsive">
                  <table class="table table-striped table-bordered table-hover table-condensed">';

    $output .= '
                  <tr>
                    <td width="30%"><label>Nom</label></td>
                    <td width="70%">' . $select[0]['nom_etudiant'] . '</td>
                  </tr>
                  <tr>
                    <td width="30%"><label>Postnom</label></td>
                    <td width="70%">' . $select[0]['postnom_etudiant'] . '</td>
                  </tr>                          
                  <tr>
                    <td width="30%"><label>Prenom</label></td>
                    <td width="70%">' . $select[0]['prenom_etudiant'] . '</td>
                  </tr>
                  <tr>
                    <td width="30%"><label>Sexe</label></td>
                    <td width="70%">' . $select[0]['sexe_etudiant'] . '</td>
                  </tr>
                  <tr>
                    <td width="30%"><label>Telephone</label></td>
                    <td width="70%">' . $select[0]['tel_etudiant'] . '</td>
                  </tr>
                <tr>
                    <td width="30%"><label>Email</label></td>
                    <td width="70%">' . $select[0]['email_etudiant'] . '</td>
                </tr>';

    $output .= "</table></div>";
    echo $output;
  }

//SHOW MODAL ETUDIANT
  function showEtudiant()
  {

    $id = $_POST['id'];
    $etudiant = $this->model->showEtudiantBdd($id);

    echo json_encode($etudiant);
  }

//UPDATE ETUDIANT
  function updateEtudiant()
  {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $postnom = $_POST['postnom'];
    $prenom = $_POST['prenom'];
    $sexe = $_POST['sexe'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];

    $return = $this->model->updateEtudiantBdd($id, $nom, $postnom, $prenom, $sexe, $telephone, $email);
    echo $return;
  }
}
