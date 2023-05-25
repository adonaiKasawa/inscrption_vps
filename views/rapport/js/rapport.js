$(document).ready(function () {
  const URLBASE = "http://localhost/inscription/";
  // faire un view de l'etudiant voir ses information tout entiere
  var datatable;
  $(document).on('click', '.view_data', function (e) {
    e.preventDefault();
    var id = $(this).attr("id");
    $.ajax({
      url: URLBASE + "rapport/viewEtudiant",
      method: "POST",
      data: { id: id },
      success: function (data) {
        $("#liste").html(data);
        $("#modal-info").modal("show");
      }
    });

  });
// faire apparaitre les information de l'etudiant dans le formulaire modal
  $(document).on('click', '.update', function (e) {
    e.preventDefault();
    var id = $(this).attr('id');
    $.ajax({
      url: URLBASE + "rapport/showEtudiant",
      method: 'POST',
      data: { id: id },
      dataType: "JSON",
      success: function (all_data) {
        const data = all_data[0];
        $('#id').val(data.id_etudiant);
        $('#nom').val(data.nom_etudiant);
        $('#postnom').val(data.postnom_etudiant);
        $('#prenom').val(data.prenom_etudiant);
        $('#sexe').val(data.sexe_etudiant);
        $('#telephone').val(data.tel_etudiant);
        $('#email').val(data.email_etudiant);
        $('#modal-default').modal('show');
      },
      error: function (data) {
        alert('Error!!');
      }
    });
  });
// modifier un etudiant
  $(document).on('click', '#modifier', function(e) {
    e.preventDefault();

    var id = $('#id').val();
    var nom = $('#nom').val();
    var postnom = $('#postnom').val();
    var prenom = $('#prenom').val();
    var sexe = $('#sexe').val();
    var telephone = $('#telephone').val();
    var email = $('#email').val();

    if (nom == '' || postnom == '' || prenom == '' || sexe == '' || telephone == '' || email == '') {
      // toastr.error("veuillez remplir tous les champs");
      swal.fire({
        title: 'Champs vides',
        text: 'Veillez remplir tous les champs',
        type: 'error',
        confirmButtonText: 'Ok'
    });
    }else{
      $.ajax({
          url: URLBASE + "rapport/updateEtudiant",
          type: 'POST',
          data: {
              id:id,
              nom:nom,
              postnom:postnom,
              prenom:prenom,
              sexe:sexe,
              telephone:telephone,
              email:email
          },
          success: function(data) {
            
              if (data == "modification_reussie") {
                //toastr.success("Modification reussie");
                swal.fire({
                  title: 'Modifier avec succes',
                  text: '',
                  type: 'success',
                  confirmButtonText: 'Ok'
              });
              datatable.ajax.reload();
              $('#modal-default').modal('hide');
              }else{
                swal.fire({
                  title: 'Echec de modification',
                  text:'',
                  type:'error',
                  confirmButtonText:'Ok'
              });
              }
          }
      });
    }
});

datatable = $('#reception_table').DataTable({
  "processing": true,
  "serverSide": true,
  "order": [],
  "serching":false,
  "ajax": {
      url: URLBASE + "rapport/xhrDataTable",
      type: "POST"
  },
  "columnDefs": [
      {
          "target": [0, 3, 4],
          "orderable": true
      }
  ]

});
// imprimer le rapport
  var options = {
    pageTitle: "<h1>Rapport Journal/h1>"
  }
  $('.buttons-print').click(function () {
    $('#reception_table').printThis(options);
  });
});