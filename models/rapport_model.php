<?php 
/*
  * 
  */
class Rapport_Model extends Model {
 	
 	public function __construct()
 	{		
 		parent::__construct();
 	}

    // SELECT MOODEL ETDUDIANT
    // public function selectEtudiantBdd()
    // {
    //     return $this->db->select("SELECT * FROM etudiant ORDER BY id_etudiant ASC");
    // }
      // VIEW ETUDIANT MODEL
    public function viewEtudiantBdd($id)
    {
         return $this->db->select("SELECT * FROM etudiant WHERE id_etudiant = $id");
    }

     // UPDATE MODEL ETUDIANT
    public function updateEtudiantBdd($id, $nom, $postnom, $prenom, $sexe, $telephone, $email) 
    {
    $requette = "UPDATE etudiant SET nom_etudiant='$nom' , postnom_etudiant='$postnom', prenom_etudiant='$prenom', sexe_etudiant='$sexe', tel_etudiant='$telephone', email_etudiant='$email' WHERE id_etudiant='$id'";
    $statement = $this->db->prepare($requette);
    $result = $statement->execute();
    if($result){
        echo "modification_reussie";
    }else{
        echo "modifcation echouer";
    }
    }

    // SHOW MODEL ETUDIANT
    public function showEtudiantBdd($id) 
    {
        return $this->db->select("SELECT * FROM etudiant WHERE id_etudiant =$id");
        
    }
    function xhrDataTable()
    {
      $this->model->xhr_dataTable();
    }
    // DATATABLE ETUDIANT
   function xhr_dataTable()
   {
       $query = "";
       $query .= "SELECT * FROM etudiant ";

       if (isset($_POST["search"]["value"])) {
           $query .= " WHERE nom_etudiant ILIKE '%".$_POST["search"]["value"]. "%' OR postnom_etudiant ILIKE '%".$_POST["search"]["value"]."%' OR  sexe_etudiant ILIKE '%" . $_POST["search"]["value"] . "%' OR tel_etudiant ILIKE '%".$_POST["search"]["value"]."%'";
       }
       if (isset($_POST["order"])) {
        $query .= " ORDER BY '".$_POST['order']['0']['column']."' '".$_POST['order']['0']['dir']. "'";
       }else {
           $query .= " ORDER BY  id_etudiant DESC ";
       }

       if ($_POST["length"] != -1) {
        $query .= " LIMIT '" . $_POST["length"] ."' OFFSET '". $_POST["start"] ."' ";
       }

       $sth = $this->db->prepare($query);
       $sth->execute();
       $result = $sth->fetchAll();

       $data = array();
       $filtered_rows = $sth->rowCount();

       foreach ($result as $row) {
           $sub_array = array();
           $sub_array[] = $row["id_etudiant"];
           $sub_array[] = $row["nom_etudiant"];
           $sub_array[] = $row["postnom_etudiant"];
           $sub_array[] = $row["prenom_etudiant"];
           $sub_array[] = $row["sexe_etudiant"];
           $sub_array[] = "<button type='button' id='" . $row["id_etudiant"] . "' class='update btn btn-sm btn-success'> <i class='nav-icon fas fa-edit'>MODIFIER</i></button>
                           <button type='button' id='" . $row["id_etudiant"] . "' class='btn btn-sm  btn-info view_data'><i class='fas fa-eye'></i>VOIR PLUS</button>";
           $data[] = $sub_array;
       }


       $results = array(
           "draw" => intval($_POST["draw"]),
           "recordsTotal" => $filtered_rows,
           "recordsFiltered" => $this->get_total_all_records("SELECT * FROM etudiant "),
           "data" => $data
       );
       echo json_encode($results);
   }
} 
