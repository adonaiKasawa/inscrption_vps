<?php 

/**
 * 
 */
class File_Attente extends Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->view->js = array('file_attente/js/file_attente.js');	
        SESSION::init();

	}

	function index() {
		$this->view->title = 'level3 | File d\'attente';
		$this->view->active = 'home';
		$this->view->user = $this->user;
    $this->view->rende('file_attente/index');
  }

	public function inseretTicket(){

		$findLaste = $this->model->findLaste();
		if (!empty($findLaste)){
			$lsteTicket = $findLaste[0];
			$ticket = $lsteTicket["numero_ticket"]+1;
		}else{
			$ticket = 1;
		}
		$dt = array(
			'numero_ticket' => $ticket,
			'userIdUser' => $this->user->id_user,
		);
		$result = $this->model->insertTicketBdd($dt);
		if($result){
			echo 'inserted';
		}else{
			echo 'not inserted';
		}
	}

  public function selectTicket(){
	$result = $this->model->selectTicketBdd();
	$output ='
					<div class=" table table-responsive">
						<table class="table table-bordered" id="table" name = "table"> ';
		if (!empty($result)) {
			# code...
			foreach($result as $keys )
		  {
			  $output .= '
					<tr>
						<td width="5%"><label>N°</label></td>
						<td width="20%">'.$keys['numero_ticket'].'</td>
						<td width="15%">
						  <button class="btn btn-success buttonok" btn-sm data-numero="'.$keys['numero_ticket'].'" data-idticket="'.$keys['id_ticket'].'"><i class="far fa-thumbs-up mr-1"></i></button>
						  <button class="btn btn-warning appeler_ticket" btn-sm  data-numero="'.$keys['numero_ticket'].'" data-idticket="'.$keys['id_ticket'].'"><i class="fas fa-bullhorn"></i></button>
					    <button class="btn btn-danger buttonko" btn-sm data-numero="'.$keys['numero_ticket'].'" data-idticket="'.$keys['id_ticket'].'"><i class="fas fa-trash"></i></button>
						</td>
					</tr>
				<tr>';			
		  }
		}					
		$output .="</table></div>";
		echo $output;
  }

  public function returnToEndListe()
  {
    if (isset($_POST['action'])== 'skaondcvsjkslnmaokflmvv') {
      # code...
      $id = htmlspecialchars(rtrim($_POST['id']));
      echo ($this->model->returnInThelastItem($id) ? 'success':'error');
    }
  }
  public function deleteTicketById()
  {
    if (isset($_POST['action'])== 'skaondcvsjkslnmaokflmvv') {
      # code...
      $id = htmlspecialchars(rtrim($_POST['id']));
      echo ($this->model->deleteTicketById($id) ? 'success':'error');
    }
  }
  public function lastTicket()
  {
	$result = $this->model->selectTicketBdd();
	$ticket = $result[0] ?? 0;
	echo $ticket['numero_ticket'];
  }
  public function viewTicket()
  {
	$this->view->rende_one('file_attente/lastTicket');
  }
}
?>
