  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">COURS</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Cours</a></li>
              <li class="breadcrumb-item active">Affectation</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="col-md-12">
      <div class="row">
        <div class="col-md-10 col-sm-10 col-lg-10 offset-1">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">AFFECTATION </h3>
            </div>
            <form id="quickFormAffecterCours">
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Cours | Unite</label>
                  <select id="cours" class="form-control  select2 listOfCours" name="cours"></select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Titulaire</label>
                  <select id="titulaire" class="form-control select2 listOfTutilaire" name="titulaire"></select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Credit | Ponderation</label>
                  <input type="number" class="form-control" name="credit" id="credit">
                </div>
                <div class="form-group">
                  <label>Systeme</label>
                  <select id="systeme" class="form-control select2" name="systeme">
                    <option value="null">Sélectionnez un systeme</option>
                    <option value="as">Anciens systeme</option>
                    <option value="LMD">LMD</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Semestre</label>
                  <select id="semestre" class="form-control select2" name="semestre">
                    <option value="null">Sélectionnez un semestre</option>
                    <option value="1">1<sup>ére</sup></option>
                    <option value="2">2<sup>eme</sup></option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Promotion</label>
                  <select class="form-control select2 listOfPromotion" id="promotion"></select>
                </div>
              </div>
              <div class="card-footer">
                <button type="submot" id="button" name="button" class="btn btn-primary">Affecter</button>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>

  </div>