<?php 

/**
 * 
 */
class Cours extends Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->view->js = array('cours/js/cours.js');	
		$this->view->title = 'Level3 | Cours';
		$this->view->active = 'Cours';
		$this->view->user = $this->user;
	}

	function index() {
		$this->view->title = 'Level3 | Cours';
		$this->view->active = 'Cours';
		$this->view->user = $this->user;
        $this->view->rende('cours/creation/index');
    }

	public function creation()
	{
		# code...
		$this->view->active = 'coursCreate';
		$this->view->rende('cours/creation/index');
	}
	public function affectation()
	{
		# code...
		$this->view->active = 'coursAffect';
		$this->view->rende('cours/affectation/index');
	}
	public function list_affectation()
	{
		# code...
		$this->view->active = 'coursListAffect';
		$this->view->rende('cours/list_affectation/index');
	}
	public function list_cours()
	{
		# code...
		$this->view->active = 'coursList';
		$this->view->rende('cours/list_cours/index');
	}


}