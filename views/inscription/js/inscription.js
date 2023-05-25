$(document).ready(function () {
  const URLBASE = "http://localhost/inscription/"

  selectPromotion();
  getAllDepartement();

  $(function () {
    $.validator.setDefaults({
      submitHandler: function () {
        $(document).on('submit', '#button', function (e) {
          e.preventDefault();
        });

        var nom = $('#nom').val();
        var postnom = $('#postnom').val();
        var prenom = $('#prenom').val();
        var sexe = $('#sexe').val();
        var telephone = $('#telephone').val();
        var email = $('#email').val();
        var promotion = $('#promotion').val();
        var vacation = $('#vacation').val();
        var date_naissance = $('#date_naissance').val(); 
        var lieu_naissance = $('#lieu_naissance').val();
        var etat_civil = $('#etat').val();
        var nationnalite = $('#nationnalite').val();
        var adresse = $('#adresse').val();
        var nom_pere = $('#nom_pere').val();
        var nom_mere = $('#nom_mere').val();
        var province_origine = $('#province_origine').val();
        var district_origine = $('#district_origine').val();
        var territoire_origine = $('#territoire_origine').val();
        var nom_ecole = $('#nom_ecole').val();
        var adresse_ecole = $('#adresse_ecole').val();
        var annees_obtention_diplome = $('#annees_obtention_diplome').val();
        var pourcentage_obtenu = $('#pourcentage_obtenu').val();
        var section_suivie_humanite = $('#section_suivie_humanite').val();
        var diplome_etat = false;
        var attest_etat = false;
        var vie_et_moeurs = false;
        var releve_g1= false;
        var releve_g3 = false;
        var diplome_g3 = false;

        // $('#diplome_etat').each(function(){
        //   if($(this).is(':checked')){
        //     diplome.push($(this).val());
        //   }
        //   diplome = diplome.toString();
        // });
        var dossier = document.getElementsByName("r1");
        for (let i = 0; i < dossier.length; i++) {
          const element = dossier[i];
          if (element.type == "checkbox" && element.checked) {
            switch (element.id) {
              case 'diplome_etat':
                diplome_etat = true
                break;
              case 'attest_etat':
                attest_etat = true
                break;
              case 'vie_et_moeurs':
                vie_et_moeurs = true
                break;
              case 'releve_g1':
                releve_g1 = true
                break;
                case 'releve_g3':
                  releve_g3 = true
                  break;
              case 'diplome_g3':
                diplome_g3 = true
                break;
              default:
                break;
            }
          }
        }
        // console.log(diplome_etat);
        // console.log(attest_etat);
        // console.log(vie_et_moeurs);
        // console.log(releveG);
        // console.log(diplomeG);
        $.ajax({
          url: URLBASE + 'inscription/inscriptionNormale',
          method: 'POST',
          data:
          {
            nom: nom,
            postnom: postnom,
            prenom: prenom,
            sexe: sexe,
            telephone: telephone,
            email: email,
            vacation: vacation,
            diplome_etat:diplome_etat,
            attest_etat:attest_etat,
            vie_et_moeurs:vie_et_moeurs,
            releve_g1:releve_g1,
            releve_g3:releve_g3,
            diplome_g3:diplome_g3,
            promotion: parseInt(promotion),
            lieu_naissance:lieu_naissance,
            date_naissance:date_naissance,
            etat_civil:etat_civil,
            nationnalite:nationnalite,
            adresse:adresse,
            nom_pere:nom_pere,
            nom_mere:nom_mere,
            province_origine:province_origine,
            district_origine:district_origine,
            territoire_origine:territoire_origine,
            nom_ecole:nom_ecole,
            adresse_ecole:adresse_ecole,
            annees_obtention_diplome:annees_obtention_diplome,
            section_suivie_humanite:section_suivie_humanite,
            pourcentage_obtenu:pourcentage_obtenu
            //dossier: dossier
          },
          success: function (data) {
            console.log(data);
            const res = JSON.parse(data);
            console.log(res);
            if (res.status == "success") {
              toastr.success("Enregistrement reussi");
              window.location = `${URLBASE}inscription/formulaire_etudiant/${res.id}`;
            }
            else {
              toastr.warning(res.msg);
            }
          }
        });
      }
    });

    $('#quickForm').validate
      ({
        rules: {
          nom:
          {
            required: true
          },
          postnom:
          {
            required: true
          },
          prenom:
          {
            required: true
          },
          sexe:
          {
            required: true,
          },
          telephone:
          {
            required: true,
          },
          email:
          {
            required: true,
            email: true,
          },
          promotion:
          {
            required: true
          },
          vacation: {
            required: true
          },
          lieu_naissance:{
            required:true
          },
          date_naissance:{
            required:true
          },
          etat_civil:{
            required:true
          },
          nationnalite:{
            required:true
          },
          adresse:{
            required:true
          },
          nom_pere:{
            required:true
          },
          nom_mere:{
            required:true
          },
          province_origine:{
            required:true
          },
          district_origine:{
            required:true
          },
          territoire_origine:{
            required:true
          },
          nom_ecole:{
            required:true
          },
          adresse_ecole:{
            required:true
          },
          annees_obtention_diplome:{
            required:true
          },
          section_suivie_humanite:{
            required:true
          },
          pourcentage_obtenu:{
            required:true
          }
        },
        messages: {
          nom: {
            required: "veuillez inserer le nom de l'etudiann(e) s'il vous plait !"
          },
          postnom: {
            required: "veuillez inserer le postnom de l'etudiant(e) s'il vous plait !"
          },
          prenom: {
            required: "veuillez inserer le prenom de l'etudiant(e) s'il vous plait !"
          },
          sexe: {
            required: "veuillez inserer le sexe de l'etudiant(e) s'il vous plait ! "
          },
          telephone: {
            required: "veuillez inserer le numero de telephon de l'etudiant(e) valide"

          },
          email: {
            required: "veuillez inserer l'adresse email de l'etudiant(e) s'il vous plait !",
            email: "le email de l'etudiant n'est pas valide recommencer s'il vous plait !"
          },
          type: {
            required: "veuillez inserer le type d'inscription s'il vous plait !!"
          },
          promotion: {
            required: "veuillez selectionner l'option pour l'etudiant s'il vous plait !",
          },
          vacation: {
            required: "veuillez selectionner vacation pour l'etudiant s'il vous plait !"
          },
          lieu_naissance: {
            required: "entrez le lieu de naissance du candidat "
          },          
          date_naissance: {
            required: "entrez la date de naissance du candidat "
          },
          etat_civil: {
            required: "entrez l'etat civil du candidat "
          },
          nationnalite: {
            required: "entrez la nationnalite du candidat "
          },
          adresse: {
            required: "entrez l'adresse physique du candidat "
          },
          nom_pere: {
            required: "entrez le nom de pere du candidat "
          },
          nom_mere: {
            required: "entrez le nom de la mere du candidat "
          },
          province_origine: {
            required: "entrez la province du caandidat"
          },
          district_origine: {
            required: "entrez le nom de distric du candidat "
          },
          territoire_origine: {
            required: "entreez le nom du territoire du candidat "
          },
          nom_ecole: {
            required: "veuillez entrer le nom de l'ecole de provenance du candidat "
          },
          adresse_ecole: {
            required: "veuillez entrer l'adresse de l'ecole du candidat"
          },
          annees_obtention_diplome: {
            required: "veuillezn entrer la date de l'obtention de diplome  "
          },
          section_suivie_humanite: {
            required: "veuillez entrer le nom de la section valide "
          },
          pourcentage_obtenu: {
            required: "veuillez entrer le pourcentage "
          },
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
  });

  function selectPromotion() {
    $.ajax({
      url: URLBASE + 'inscription/selectPromotion',
      method: 'POST',
      success: function (data) {
        $(".selectPromotion").html(data)
      }
    });
  }

  function getAllDepartement() {
    $.ajax({
      url: URLBASE + 'inscription/getAllDepartement',
      method: 'POST',
      success: function (data) {
        $(".getAllDepartement").html(data);
      }
    });
  }


  $(document).on('change', '#vacation', function () {
    $vacation = $(this).val();
    $departementId = $("#departement").val();
    $systeme = $("#systeme").val();
    console.log($departementId);
    if ($vacation !== "null" && $systeme !== 'null') {
      $.ajax({
        url: URLBASE + 'inscription/getPromotionByDepartementAndSystement',
        method: 'POST',
        data: {
          departementId: $departementId,
          systeme: $systeme,
          vacation: $vacation,
          action: "smvfd[,gv7fdgvw6ersrewr45444rwefdcgv98745346"
        },
        success: function (data) {
          console.log(data);
          $("#promotion").html(data);
        }
      });
    } else {
      $("#promotion").html(data);
    }

  });
  $(document).on('change', "#promotion", function () {
    $promotionId = $(this).val();
    $systeme = $("#systeme").val();
    if ($promotionId !== 'null') {
      $.ajax({
        url: `${URLBASE}inscription/getPromotionById`,
        method: "POST",
        data: {
          promotion: $promotionId
        },
        success: function (data) {
          res = JSON.parse(data);
          if (res.systeme === "as" ) {
            if (res.nom_promotion === "G2") {
              $('#releve_g1').show();
              $('#diplome_g3').hide();
              $('#releve_g3').hide();
              $('#diplome_etat').hide();
              $('#attest_etat').hide();
              $('#vie_et_moeurs').hide();
            } else if (res.nom_promotion === "G1") {
              $('#diplome_g3').hide();
              $('#releve_g3').hide();
              $('#releve_g1').hide();
              $('#diplome_etat').show();
              $('#attest_etat').show();
              $('#vie_et_moeurs').show();
            } else if (res.nom_promotion === "L0") {
              $('#releve_g3').show();
              $('#diplome_g3').hide();
              $('#releve_g1').hide();
              $('#attest_etat').hide();
              $('#vie_et_moeurs').hide();
            }
          } else if(res.systeme === "LMD") {
            $('#diplome_g3').hide();
            $('#releve_g3').hide();
            $('#releve_g1').hide();
            $('#diplome_etat').show();
            $('#attest_etat').show();
            $('#vie_et_moeurs').show();
          }
         
        }
      });
    }
  });
});