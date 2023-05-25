<div class="content-wrapper" style="min-height: 221px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>La File D'attente</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=URL?>inscription">Inscription</a></li>
              <li class="breadcrumb-item"><a href="#">Inscription Speciale</a></li>
              <li class="breadcrumb-item active">La Reinscription</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">TICKET</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div id="ticket_detail"></div>
                 <input type="button" name="view" value="RESERVER TICKET" class=" btn btn-lg btn-default view_data">
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">LISTE DE TICKETS</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                 <div class="listeTicket"></div>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <div class="modal fade" id="dataModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Detail de votre Ticket</h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
              <input type="button" name="view" id="reserve" value="reserver" class=" btn btn-xs btn-info view_data"/>
            </div>
        </div>
    </div>
</div>




  