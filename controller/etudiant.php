<?php 

/**
 * 
 */
class Etudiant extends Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->view->js = array('home/js/inscription.js');	
		
	}

	function index() {
		$this->view->title = 'inscription | Home';
		$this->view->active = 'home';
        $this->view->user = $this->user;
        $this->view->rende('home/index');

    }

	public function find()
	{
		# code...
		print_r($this->user);
		print_r($this->user->nom_user);
		print_r($this->user->prenom_user);
		
	}
	function newEtudiant() {
        // $matricule = $_POST['prenom'];
        // $nom = $_POST['nom'];
        // $postnom = $_POST['privilege'];
        // $prenom = $_POST['email'];
        // $sexe = $_POST['statut'];
        // $telephone = $_POST['login'];
        // $email = $_POST['password'];
		// $password = $_POST['password'];
		// $promotion = $_POST['promotion'];

        // //Insert user
        // $result = $this->model->insertEtudiantBdd($matricule, $nom, $postnom, $prenom, $sexe, $telephone, $email, $password, $promotion);

        // if ($result) {
        //     echo 'inserted';
        // } else {
        //     echo 'not_inserted';
        // }
    }
}