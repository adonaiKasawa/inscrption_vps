<?php 

/**
  * 
  */
class File_Attente_Model extends Model {
 	
 	public function __construct()
 	{		
 		parent::__construct();
 	}
	
	public function findLaste()
	{
		# code...
		// exemple
		return $this->db->select('SELECT * FROM ticket WHERE "createdAt" >=:createdAt ORDER BY id_ticket DESC LIMIT 1', array('createdAt' => date('Y-m-d')));
	}
	public function insertTicketBdd(array $dt){
		return $this->db->insert('ticket',$dt);
	}
	public function selectTicketBdd(){
		return $this->db->select('SELECT * FROM ticket WHERE "createdAt" >=:createdAt ORDER BY "createdAt" asc',array('createdAt' => date('Y-m-d')));
	}

	public function insertTicketBYTicket($ticket)
	{
		return $this->db->select("SELECT * FROM ticket WHERE numero_ticket =:numero_ticket ORDER BY id_ticket DESC LIMIT 1 ",
		array("numero_ticket" => $ticket ));
	}
	public function returnInThelastItem(int $id)
	{
		# code...
		return $this->db->prepare('UPDATE ticket SET "createdAt" = NOW()  WHERE  id_ticket = ?')->execute([$id]);
	}
	public function deleteTicketById($id)
	{
		# code...
		return $this->db->delete('"ticket"', '"id_ticket" = '.$id.'',1);
	}
} 