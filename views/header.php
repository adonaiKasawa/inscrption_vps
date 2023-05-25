<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $this->title ?></title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="./public/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="./public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="./public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="./public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="./public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="./public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="./public/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="./public/sweetalert/Resources/Public/Assets/sweetalert2.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="./public/plugins/toastr/toastr.min.css">
  <link rel="stylesheet" href="./public/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="./public/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link rel="stylesheet" href="./public/dist/css/adminlte.min.css">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__wobble" src="<?= URL ?>public/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <select class="form-control changeExercice">
            <?php
            $model  = new Model();
            $getExercice = $model->getExercice();
            $ouput = '';
            if (!empty($getExercice)) {
              foreach ($getExercice as $key) {
                if ($key["etat_exercice"] == 'ENCOURS') {
                  $ouput .= '<option value="'.$key["id_exercice"].'" class="bg-success">'.$key['annee_exercice'].'</option>';
                }
              }
              foreach ($getExercice as $key) {
                if ($key["etat_exercice"] == 'FIN') {
                  $ouput .= '<option value="'.$key["id_exercice"].'">'.$key['annee_exercice'].'</option>';
                }
              }
              echo $ouput;
            }
            ?>
          </select>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="<?= URL ?>public/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="<?= URL ?>public/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="<?= URL ?>public/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link " data-toggle="dropdown" href="#">
            <img src="<?= URL ?>public/dist/img/user2-160x160.jpg" width="30" class="img-circle image elevation-2" alt="User Image" />
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header"><?= $this->user->nom_user ?> <?= $this->user->prenom_user ?></span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-user mr-2"></i> Profile
              <span class="float-right text-muted text-sm">...</span>
            </a>
            <div class="dropdown-divider"></div>

            <a href="<?= URL ?>logout" class="dropdown-item dropdown-footer">
              <i class="fas fa-out mr-2"></i>
              Se déconnecter
            </a>
          </div>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?= URL ?>" class="brand-link">
        <img src="<?= URL ?>public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Level3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= URL ?>public/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?= $this->user->nom_user ?> <?= $this->user->prenom_user ?></a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
            <?php if ($this->user->privilege_user === "inscription") { ?>
              <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Options
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= URL ?>file_attente" class="nav-link">
                      <i class="nav-icon fas fa-tree"></i>
                      <p>File D'attente</p>
                    </a>
                  </li>
                  <li class="nav-item menu-is-opening menu-open">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-book"></i>
                      <p>
                        INSCRIPTIONS
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: block;">
                    <li class="nav-item menu-is-opening menu-open">
                      <a href="<?= URL ?>inscription" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>FORMULAIRE</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="<?= URL ?>rapport" class="nav-link">
                        <i class="fas fa-book mr-1"></i>
                        <p>RAPPORT JOURNALIER</p>
                      </a>
                    </li>
                  </ul>
                  </li>

                </ul>
              </li>

            <?php } elseif ($this->user->privilege_user === "chef_departement") {  ?>
              <li class="nav-item menu-open">
                <a href="#" class="nav-link  <?= $this->active === "Cours" ? "active" : null ?>">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Cours
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= URL ?>cours/creation" class="nav-link <?= $this->active === "coursCreate" ? "active" : null ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Création</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= URL ?>cours/affectation" class="nav-link <?= $this->active === "coursAffect" ? "active" : null ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Affection</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= URL ?>cours/list_cours" class="nav-link <?= $this->active === "coursList" ? "active" : null ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Liste des cours</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= URL ?>cours/list_affectation" class="nav-link <?= $this->active === "coursListAffect" ? "active" : null ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Liste d'affection</p>
                    </a>
                  </li>
                </ul>
              </li>
            <?php } ?>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>