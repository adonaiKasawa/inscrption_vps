  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Cours</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Cours</a></li>
            <li class="breadcrumb-item active">Création</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <div class="col-md-8 offset-2">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Création des cours </h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form id="quickFormCoursCreate">
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Code</label>
            <input type="text" class="form-control" name="code" id="code" placeholder="ex: 45er4">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Nom</label>
            <input type="text" class="form-control" name="nom" id="nom" placeholder="ex: Langage de programmation java ">
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" id="button" name="button" class="btn btn-primary creatunit">Créer</button>
        </div>
      </form>
    </div>
  </div>

</div>