  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4 class="m-0">INSCRIPTION SPECIALE</h4>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <div class="card card-info">
  <div class="card-header">
      <h5 class="card-title">INSCRIPTION SPECIALE POUR LE DEUXIEME GRADUAT</h5>
  </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form method="POST" id="quickForm">
        <div class="row">
          <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
              <label>Nom</label>
              <input type="text" id="nom" name="nom" class="form-control" placeholder="Enter entrer votre Nom">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Postnom</label>
              <input type="text" id="postnom" name="postnom" class="form-control" placeholder="Enter votre Postnom" >
            </div>
            </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Prenom</label>
              <input type="text" id="prenom" name="prenom" class="form-control" placeholder="Enter votre Prenom ..." >
            </div> 
            </div>
            <div class="col-sm-6">
            <div class="form-group">
               <label for="">Sexe</label>
               <select id="sexe" class="form-control" name="sexe">
                  <option value="">Selectionner Votre sexe</option>
                  <option value="Masculin">Masculin</option>
                  <option value="Feminin">Feminin</option>
               </select>
            </div> 
            </div>
            <div class="col-sm-6">
            <div class="form-group">
              <label>Telephone</label>
              <input type="text" id="telephone" name="telephone" class="form-control" placeholder="Enter le numero de Telephone ..." >
            </div> 
            </div>
            <div class="col-sm-6">
            <div class="form-group">
              <label>Email</label>
              <input type="email" id="email" name="email" class="form-control" placeholder="Enter votre adresse email..." >
            </div> 
            </div>
            <div class="col-sm-6">
            <div class="form-group">
            <label for="exampleInputPassword1">Promotion</label>
               <option value="">Selectionner votre Promotion</option>
               <div class="selectPromotion"></div>
            </div> 
            </div>
            <div class="col-sm-6">
            <div class="form-group">
            <label for="">Type d'inscription </label>
               <select id="sexe" class="form-control" name="sexe">
                  <option value="">Selectionner le type</option>
                  <option value="normale">Normale</option>
                  <option value="Speciale">Speciale</option>
                  <option value="pre licence">Pre-licence</option>
                  <option value="reinscription">Reinscription</option>
               </select>            
              </div> 
            </div>
            </div>
           </div>
           <div class="card-footer">
               <input type="submit" name="button" id="button" value="VALIDER INSCRIPTION" class=" btn btn-primary view_data">
            </div>
      </form>
    </div>