  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header"> 
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Rapport</h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= URL?>inscription">Retour a l'inscription</a></li>
          </ol>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
    <div class="box-card">
      <div class="card-header">
        <h3 class="card-title" align="center" >Rapport Journalier</h3><br>
        <!-- <button type="button" id="imprimer" name="imprimer" class="btn btn-info">imprimer</button>    -->
      </div>
      <div id="result" class="listeEtu">
        <div class="container-fluid">
        <div class="dt-buttons btn-group flex-wrap">               
        <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button">
          <span>Excel</span>
        </button> 
        <button class="btn btn-secondary buttons-pdf buttons-html5"  tabindex="0" aria-controls="example1" type="button">
          <span>PDF</span>
        </button> 
        <button class="btn btn-secondary buttons-print" tabindex="0" id="print" type="button">
          <span>Print</span>
        </button>  
      </div>
        <table id="reception_table" class="table table-striped table-bordered table-hover table-condensed">
            <thead>
                <tr>
                    <th width="10px">N°</th>
                    <th>Nom</th> 
                    <th>Postnom</th>
                    <th>Prenom</th>
                    <th>Sexe</th>
                    <th width="200px">Action</th>
                </tr>
            </thead>
      </table>
        </div>
    </div>
      <div class="modal fade" id="modal-info">
        <div class="modal-dialog">
          <div class="modal-content bg-info">
            <div class="modal-header">
              <h4 class="modal-title">Details etudiant</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body" id="liste">
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">annuler</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

      <div class="modal fade" id="modal-default">
        <div class="modal-dialog modal-xx">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Modifier etudiant</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form  role="form" id="update_user_formulaire">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="firstname" class="col-sm-2 control-label">Nom</label>
                            <input type="text"name="nom" class="form-control" id="nom" placeholder="Enter le Prénom">
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-sm-2 control-label">Postnom</label>
                            <input type="text" name="postnom" class="form-control" id="postnom" placeholder="Enter le Nom">
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-sm-2 control-label">Prenom</label>
                        <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Enter le login">
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-sm-2 control-label">Sexe</label>
                        <select name="sexe" id="sexe"  class="form-control">
                          <option value="masculin">Masculin</option>
                          <option value="feminin">Feminin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-sm-2 control-label">Telephone</label>
                            <input type="text" name="telephone" class="form-control" id="telephone" placeholder="Enter le login">
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-sm-2 control-label">Email</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="Enter le login">
                    </div>
            </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">annuler</button>
              <button type="button" name="modifier" id="modifier" class="btn btn-primary">Modifier</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
       <!-- Modal update user  -->
 <!-- <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                &times;
            </button>
                <h4 class="modal-title" id="myModalLabel">
                    Mettre à jour etudiant
                </h4>
            </div>
            <div class="modal-body">
                
            <form class="form-horizontal" role="form" id="update_user_formulaire">
                    <input type="hidden" id="id">
                    <div class="form-group">
                        <label for="firstname" class="col-sm-2 control-label">Nom</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nom" placeholder="Enter le Prénom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-sm-2 control-label">Postnom</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="postnom" placeholder="Enter le Nom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-sm-2 control-label">Prenom</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="prenom" placeholder="Enter le login">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-sm-2 control-label">Sexe</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="sexe" placeholder="Enter le login">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-sm-2 control-label">Telephone</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="telephone" placeholder="Enter le login">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" placeholder="Enter le login">
                        </div>
                    </div>
            </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler </button>
                <button type="button" class="btn btn-primary" id="modifier" data-dismiss="modal">Valider </button>
            </div>
    </div><!-- /.modal-content -->
<!-- </div>/.modal -->

