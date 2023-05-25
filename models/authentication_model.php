<?php 

/**
  * 
  */
class Authentication_Model extends Model {
 	
 	public function __construct()
 	{		
 		parent::__construct();
 	}
	
	public function find()
	{
		# code...
		// exemple
		//return $this->db->select("SELECT * FROM name_table");
	}
	public function ajouterEtudiantRequet($data)
	{
	$this->db->insert('etudiant', $data);
	}
} 
 