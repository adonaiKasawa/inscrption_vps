<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire d'inscription</title>
  <link rel="stylesheet" href="<?= URL ?>public/dist/css/adminlte.min.css">
</head>

<body>
  <?php $etudiant = isset($this->etudiant) ? $this->etudiant : null; ?>
 
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="row" style="border-bottom: 1px black solid;">
          <div class="col-md-2" style="text-align: center;">
            <img src="<?= URL ?>public/dist/img/isp.png" width="100" height="100" />
          </div>
          <div class="col-md-9">
            <div style="text-align: center">
              <h3>REPUBLIQUE DEMOCRATIQUE DU CONGO</h3>
              <h4>MINISTERE DE L'ENSEIGNEMENT SUPERIEUR ET UNIVERSITAIRE.</h4>
              <h4><b>INSTITUT SUPERIEUR PEDAGOGIEQUE DE LA GOMBE</b></h4>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12" style="text-align: center"><a href="<?=URL?>/inscription"><h3><u>Formulaire d'inscription</u></h3></a></div>
          <div class="col-md-12"><h4>1.<u>Orintation</u></h4></div>
          <div class="col-md-12"><h4>1.<u>IDENTIFICATION DU CANDIDAT</u></h4></div>
          <div class="col-md-12">
            Matricule : <?= $etudiant['matricule_etudiant'] ?><br>
            Nom : <?= $etudiant['nom_etudiant'] ?><br>
            Post-nom : <?= $etudiant['postnom_etudiant'] ?><br>
            Prénom : <?= $etudiant['prenom_etudiant'] ?><br>
            Sexe : <?= $etudiant['sexe_etudiant'] ?><br>
            Télèphone : <?= $etudiant['tel_etudiant'] ?><br>
            Email : <?= $etudiant['email_etudiant'] ?><br>
          </div>
          <div class="col-md-12"><h4>2.<u>Inscription</u></h4></div>
          <div class="col-md-12">
            Section : <?= $etudiant['nom_section'] ?><br>
            Departement : <?= $etudiant['nom_departement'] ?><br>
            Promtion : <?= $etudiant['nom_promotion'] ?><br>
            Vacation : <?= $etudiant['vacation'] ?><br>
            Systeme : <?= empty($etudiant['systeme']) ? 'Anciens systeme': $etudiant['systeme']?><br>
            Type d'inscription:  <?= $etudiant['type_inscription'] ?>
          </div>
          <div class="col-md-12"><h4>3.<u>Coordonne level3</u></h4></div>
          <div class="col-md-12">
            Matricule : <?= $etudiant['matricule_etudiant'] ?><br>
            Mot de passe : <?= $etudiant['password_etudiant'] ?><br>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>