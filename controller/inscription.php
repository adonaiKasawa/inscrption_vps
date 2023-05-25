<?php

/**
 * 
 */
class Inscription extends Controller
{
  function __construct()
  {
    parent::__construct();
    $this->view->js = array('inscription/js/inscription.js');
    Session::init();
  }

  function index()
  {
    $this->view->title = 'level3 | inscription';
    $this->view->active = 'home';
    $this->view->user = $this->user;
    $this->view->rende('inscription/index');
  }
  public function pregTel_EMail(string $tel, $email)
  {
    if (preg_match("#^0[1-69]([-. ]?[0-9]{2}){4}$#", $tel) && preg_match("#^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email)) {
      return true;
    } else {
      return false;
    }
  }
  public function inscriptionNormale()
  {
 
    if (isset($_POST['telephone']) and isset($_POST['email'])) {

      $nom =  htmlspecialchars($_POST['nom']);
      $postnom = htmlspecialchars($_POST['postnom']);
      $prenom = htmlspecialchars($_POST['prenom']);
      $sexe = htmlspecialchars($_POST['sexe']);
      $telephone = htmlspecialchars($_POST['telephone']);
      $date_naissance = htmlspecialchars($_POST['date_naissance']);
      $lieu_naissance = htmlspecialchars($_POST['lieu_naissance']);
      $etat_civil = htmlspecialchars($_POST['etat_civil']);
      $nationnalite = htmlspecialchars($_POST['nationnalite']);
      $adresse = htmlspecialchars($_POST['adresse']);
      $nom_pere = htmlspecialchars($_POST['nom_pere']);
      $nom_mere = htmlspecialchars($_POST['nom_mere']);
      $province_origine = htmlspecialchars($_POST['province_origine']);
      $district_origine = htmlspecialchars($_POST['district_origine']);
      $territoire_origine = htmlspecialchars($_POST['territoire_origine']);
      $nom_ecole = htmlspecialchars($_POST['nom_ecole']);
      $adresse_ecole = htmlspecialchars($_POST['adresse_ecole']);
      $annee_obtention_diplome = htmlspecialchars($_POST['annees_obtention_diplome']);
      $pourcentage_obtenu = htmlspecialchars($_POST['pourcentage_obtenu']);
      $section_suivie_humanite = htmlspecialchars($_POST['section_suivie_humanite']);
      $email = htmlspecialchars($_POST['email']);
      $diplome_etat = (bool) htmlspecialchars($_POST['diplome_etat']);
      $attest_etat = (bool)  htmlspecialchars($_POST['attest_etat']);
      $vie_et_moeurs = (bool) htmlspecialchars($_POST['vie_et_moeurs']);
      $exercice = Session::get("exerciceEncours");
      $releve_g1 = htmlspecialchars($_POST['releve_g1']);
      $releve_g3 = htmlspecialchars($_POST['releve_g3']);
      $diplome_g3 = htmlspecialchars($_POST['diplome_g3']);
      $exercice = Session::get('exerciceEncours');
      $promotion = (int) htmlspecialchars($_POST['promotion']);
      //if ($this->pregTel_EMail($telephone, $email)) {
        //Insert etudiant
        $checkExistTelOrEmail = $this->model->checkExistTelOrEmail($telephone, $email);
        if (empty($checkExistTelOrEmail)) {
          $getPromotionById = $this->model->getPromotionById($promotion);
          $type = "";
          if ((!empty($getPromotionById) && $getPromotionById[0]['nom_promotion'] == 'G1') || ($getPromotionById[0]['systeme'] == 'LMD' && $getPromotionById[0]['nom_promotion'] == 'L1')) {
            $type = 'normale';
          } elseif (!empty($getPromotionById) && $getPromotionById[0]['nom_promotion'] == 'L0') {
            $type = 'pre-licence';
          } elseif (!empty($getPromotionById) && $getPromotionById[0]['nom_promotion'] == 'G2') {
            $type = 'speciale';
          }
          // print_r($dossier);
          $dataBdd = array(
            'matricule_etudiant' => $this->str_random(8),
            'nom_etudiant'       => $nom,
            'postnom_etudiant'   => $postnom,
            'prenom_etudiant'    => $prenom,
            'sexe_etudiant'      => $sexe,
            'tel_etudiant'       => $telephone,
            'email_etudiant'     => $email,
            'salt'               => "1",
            'password_etudiant'  => $this->str_random(8),
            'type_inscription'   => $type,
            'diplome_etat'       => $diplome_etat,
            'attest_etat'        => $attest_etat,
            'vie_et_moeurs'      => $vie_et_moeurs,
            'att_naissance'      => $attest_etat,
            'fk_id_promotion'    => $promotion,
            'fk_id_user' => $this->user->id_user,
            'exerciceIdExercice'=> (int) $exercice['id_exercice'],
            'date_naissance'=> $date_naissance,
            'lieu_naissance'=> $lieu_naissance,
            'etat_civil'=>$etat_civil,
            'nationnalite'=>$nationnalite,
            'adresse'=>$adresse,
            'nom_pere'=>$nom_pere,
            'nom_mere'=>$nom_mere,
            'province_origine'=>$province_origine,
            'district_origine'=>$district_origine,
            'territoire_origine'=>$territoire_origine,
            'nom_ecole'=>$nom_ecole,
            'adresse_ecole'=>$adresse_ecole,
            'annee_obtention_diplome'=>$annee_obtention_diplome,
            'section_suivie_humanite'=>$section_suivie_humanite,
            'pourcentage_obtenu'=>$pourcentage_obtenu,
            'releve_g1'=>$releve_g1,
            'releve_g3'=>$releve_g3,
            'diplome_g3'=>$diplome_g3
          );

          $result = $this->model->insertEtudiantBdd($dataBdd);
          if ($result['status'] == 'success') {

            echo ('{"status" : "success", "id": "' . $result['data']['id_etudiant'] . '" }');
          } else if ($result['status'] == 'error' && $result['msg'] == 'error_find_etudiant') {

            $find = $this->model->findEtudiant($dataBdd);

            if (!empty($find)) {

              echo ('{"status" : "success", "id": "' . $find[0]['id_etudiant'] . '" }');
            } else {

              echo ('{"status" : "error", "msg": "Etudiant(e) se bien inscrit veillez contacter l\'admin pour le formilaire!" }');
            }
          }
        } else {

          echo ('{"status" : "error", "msg": "L\'email ou le n° de télephone existe déjà!" }');
        }
      // } else {

      //   echo ('{"status" : "error", "msg": "Le Numero de telephone ' . $_POST['telephone'] . 'ou L\'adresse email ' . $_POST['email'] . 'n\'est pas valide, recommencez !" }');
      // }
    }
  }
  public function selectPromotion()
  {
    $select = $this->model->selectPromotionRequette();
    $output = "<select class='form-control' name='promotion' id='promotion'>
                   <option value=''>Promotion</option>";
    foreach ($select as $key) {
      $departement = $this->model->selectDepartementRequette($key['fk_id_departement']);
      $output .= '<option value="' . $key['id_promotion'] . '">' . $key['nom_promotion'] . ' ' . $departement[0]['nom_departement'] . ' | ' . $key['vacation'] . '</option>';
    }
    echo $output .= "</select>";
  }
  public function getPromotionByDepartementAndSystement()
  {
    if (isset($_POST['action']) == 'smvfd[,gv7fdgvw6ersrewr45444rwefdcgv98745346') {
      $systeme = htmlspecialchars($_POST["systeme"]);
      $departementId = htmlspecialchars($_POST["departementId"]);
      $vacation = htmlspecialchars($_POST["vacation"]);
      $promotion = '';
      if ((!empty($systeme) && $systeme !== 'null') && (!empty($departementId) && $departementId !== 'null')) {

        $promotion = $this->model->getPromotionByDepartementAndSystement($systeme, (int)$departementId);
       
      }
      if ($promotion !== '') {
        $output = '<option value="null">Sélectionnez une promotion</option>';
        foreach ($promotion as $key) {
          if ($key['systeme'] == 'as' && $key['vacation'] == $vacation && ($key['nom_promotion'] == 'G1' || $key['nom_promotion'] == 'G2' || $key['nom_promotion'] == 'L0')) {
            $output .= '<option value="' . $key['id_promotion'] . '">' . $key['nom_promotion'] . '</option>';
          } else if ($key['systeme'] == 'LMD' && $key['vacation'] == $vacation && $key['nom_promotion'] == 'L1') {
            $output .= '<option value="' . $key['id_promotion'] . '">' . $key['nom_promotion'] . '</option>';
          }
        }
        echo $output;
      }
    }
  }
  public function getAllDepartement()
  {
    try {
      //code...
      $select = $this->model->selectDepartementRequete();
      if (isset($select[0]) && !empty($select)) {
        # code...
        $output = "
      <option value='null'>Sélectionnez un departement</option>";
        foreach ($select as $key) {
          $output .= '<option value="' . $key['id_departement'] . '">' . $key['nom_departement'] . '</option>';
        }
        echo $output .= "</select></div>";
      } else {
        echo "<option value='null'>Pas de departement trouver</option>";
      }
    } catch (\Throwable $th) {
      //throw $th;
      echo " <option value='null'>Pas de departement trouver</option>";
    }
  }
  public function selectVacation()
  {
    $select = $this->model->selectVacationRequette();
    $output = "<select class='form-control' name='vacation' id='vacation'>
                    <option value=''>Vacation</option>";


    foreach ($select as $keys) {
      $output .= '<option value="' . $keys['id_promotion'] . '">' . $keys['vacation'] . '</option>';
    }
    echo $output .= "</select>";
  }

  public function getPromotionById()
  {
    if (isset($_POST["promotion"])) {
      $promotion = htmlspecialchars($_POST['promotion']);
      if (!empty($promotion) && $promotion !== 'null') {
        # code...
        $getPromotionById = $this->model->getPromotionById($promotion);
        if (!empty($getPromotionById)) {
          $get = $getPromotionById[0];
          echo ('{"nom_promotion" : "' . $get['nom_promotion'] . '", "systeme": "'.$get['systeme'].'"}');
        }
      }
    }
  }

  public function formulaire_etudiant(string $id)
  {
    # code...
    $etudiant =  $this->model->getEtudiantById($id);
    $this->view->etudiant = isset($etudiant[0]) ? $etudiant[0] : [];
    $this->view->rende_one("inscription/formilaire");
  }
}
