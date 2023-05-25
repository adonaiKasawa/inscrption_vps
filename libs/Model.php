<?php  
/**
  * 
  */
 class Model 
 {
 	
 	function __construct()
 	{
 		 $this->db= new Database(DB_TYPE, DB_HOST, DB_PORT, DB_NAME, DB_USER, DB_PASS);
 		 // parrent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTIONS);
 	}

	 public function find()
	{
		# code...
		// exemple
		//return $this->db->select("SELECT * FROM name_table");
	}
    function get_total_all_records($query) {
        $sth = $this->db->prepare($query);
        $sth->execute();
        return $sth->rowCount();
    }
	public function getExercice()
	{
		return $this->db->select("SELECT * FROM exercice");
	}
 	
 } 
