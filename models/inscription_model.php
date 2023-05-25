<?php

/**
 * 
 */
class Inscription_Model extends Model
{

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
  public function findEtudiant(array $data)
	{
		# code...
		// exemple
		return $this->db->select("SELECT * FROM etudiant 
		WHERE nom_etudiant =:nom AND email_etudiant =:email",
			array("nom" =>$data['nom_etudiant'], "email" => $data['email_etudiant'])
		);
	}
  
  public function insertEtudiantBdd($data)
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
  public function getEtudiantById(int $id)
  {
    return $this->db->select("SELECT * FROM etudiant, promotion , departement, section 
    WHERE id_etudiant =:id AND etudiant.fk_id_promotion = promotion.id_promotion AND promotion.fk_id_departement = departement.id_departement 
    AND departement.fk_id_section = section.id_section", array("id" => $id));
  }
  public function selectPromotionRequette()
  {

    return $this->db->select("SELECT * FROM promotion  ORDER BY nom_promotion DESC");
  }
  public function selectDepartementRequette($id)
  {
    return $this->db->select("SELECT * FROM departement WHERE id_departement = :departement", array('departement' => $id));
  }
  public function selectDepartementRequete()
  {
    return $this->db->select("SELECT * FROM departement");
  }
  public function selectVacationRequette()
  {
    return $this->db->select("SELECT * FROM promotion ORDER BY vacation DESC");
  }
  public function getPromotionByDepartementAndSystement(string $systeme, int $departement)
  {
    return $this->db->select("SELECT * FROM promotion WHERE fk_id_departement =:id AND systeme = :systeme",array("id" => $departement, "systeme" =>$systeme));
  }
  public function getPromotionById(int $promotion)
  {
   return $this->db->select("SELECT * FROM promotion WHERE id_promotion =:promotion ", array("promotion" => $promotion));
  }
  public function checkExistTelOrEmail(string $tel, string $email)
  {
    return $this->db->select("SELECT * FROM etudiant WHERE tel_etudiant =:tel OR email_etudiant =:email", array("tel" => $tel, "email" => $email));
  }

}
