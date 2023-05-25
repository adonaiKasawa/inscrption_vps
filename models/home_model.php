<?php 

/**
  * 
  */
class Home_Model extends Model {
 	
 	public function __construct()
 	{		
 		parent::__construct();
 	}
	
	public function findEtudiant(array $data)
	{
		# code...
		// exemple
		return $this->db->select("SELECT * FROM etudiant 
		WHERE nom_etudiant =:nom AND email_etudiant =:email",
			array("nom" =>$data['nom_etudiant'], "email" => $data['email_etudiant'])
		);
	}

	public function ajouterEtudiantRequet($data)
	{
		$insert = $this->db->insert('etudiant', $data);
		if ($insert) {
			$etudiant = $this->findEtudiant($data);
			if (!empty($etudiant)) {
				return array('status' => "success", "data" => $etudiant[0]);

			}else{
				return array('status' => "error", "msg" => "error_find_etudiant");
			}
		}else {
			return array('status' => "error", "msg" => "error_insert_etudiant");
		}
	}

	public function getExercice()
	{
		return $this->db->select("SELECT * FROM exercice");
	}
} 
 