$(document).ready(function () {
  const URLBASE = "http://162.254.35.36/inscription/";
  const backNestUrl = 'http://162.254.35.36:4300/'
  const frontReactUrl = 'http://162.254.35.36:3000/'
  const access_token = localStorage.getItem('access_token');
  const exerciceEncours = localStorage.getItem('exerciceEncours');
  getCours();
  getTutilaire();
  getPromotion();

  async function refreshToken() {
    var refresh_token = localStorage.getItem('refresh_token');
    $.ajax({
      url: `${backNestUrl}auth/refresh`,
      headers: { Authorization: `Bearer ${refresh_token}` },
      method: 'POST',
      success: function (data) {
        const token = data
        localStorage.setItem('access_token', token.access_token)
        localStorage.setItem('refresh_token', token.refresh_token)
        $.ajax({
          url: `${URLBASE}/authentication/refreshToken`,
          method: 'post',
          data: {
            access_token: token.access_token,
            refresh_token: token.refresh_token
          },
          success: function (data) {
            const token = JSON.parse(data);
            console.log(token);
            localStorage.setItem('access_token', token.access_token)
            localStorage.setItem('refresh_token', token.refresh_token)
            return true
          }, error: function () {
            return false
          }
        });
      }, error: function (e) {
        return false;
      }
    })

  }

  function creatUnit() {
    var nom = $('#nom').val();
    var code = $('#code').val();
    $.ajax({
      url: backNestUrl + 'cours/create/unite',
      headers: { Authorization: `Bearer ${access_token}` },
      method: 'POST',
      data:
      {
        nom: nom,
        code: code,
      },
      success: function (data) {
        $('#nom').val('')
        $('#code').val('')
        toastr.success("Enregistrement reussi");
      },
      error: function (e) {
        console.log(e.response);
        var res = e.responseJSON;
        if (res.statusCode === 401) {
          var rt = refreshToken();
          if (rt) {
            creatUnit();
          } else {
            toastr.error("Vous n'avez pas d'enregistre un cours");
            alert('Vous allez etre deconnecté');
            window.location = frontReactUrl
          }
        } else if (res.statusCode === 409) {
          toastr.warning("Le cours enregistre existe déjà!");
        } else {
          toastr.warning("Le cours enregistre existe déjà!");

        }
      }
    });
  }

  function getCours() {
    $.ajax({
      url: backNestUrl + "cours/read/uniteByDepartementIdUser",
      method: "GET",
      headers: { Authorization: `Bearer ${access_token}` },
      success: function (data) {
        var outPut = '<option value="null">Sélectionnez un cours</option>';
        var outPut1 = "";
        data.map((item, i) => {
          outPut += `
          <option value="${item.id_unite_ensiegnement}">${item.nom}</option>`;
          outPut1 += `
                <tr>
                <td>${i + 1}</td>
                <td>${item.code}</td>
                <td>${item.nom}</td>
                <td>
                  <button class="btn btn-primary">modifier</button>
                  <button class="btn btn-danger">supprimer</button>
                </td>
              </tr>`;

        })
        $('.listOfCours').html(outPut);
        $('.listOfCoursTable').html(outPut1);

      }, error: async function (e) {
        var res = e.responseJSON;
        if (res.statusCode === 401) {
          refreshToken();
          $.ajax({
            url: backNestUrl + "cours/read/uniteByDepartementIdUser",
            method: "GET",
            headers: { Authorization: `Bearer ${access_token}` },
            success: function (data) {
              var outPut = "";
              data.map((item, i) => {
                outPut += `
                        <tr>
                        <td>${item.id_unite_ensiegnement}</td>
                        <td>${item.nom}</td>
                      </tr>`
              })
              $('.listOfCours').html(outPut);
            }
          })
        } else {
          toastr.warning("Aucun cours n'a était enregistre pour cette departement");
        }
      }
    });
  }

  function getTutilaire() {
    $.ajax({
      url: backNestUrl + "admin/read/users",
      method: "GET",
      success: function (data) {
        var outPut = '<option value="null">Sélectionnez un tutilaire</option>';
        data.map((item, i) => {
          if (item.privilege_user === "titulaire") {
            outPut += `
              <option value="${item.id_user}">${item.nom_user} ${item.postnom_user} ${item.prenom_user}</option>
            `
          }

        })
        $('.listOfTutilaire').html(outPut);
      }
    });
  }

  function getPromotion(systeme = 'as') {

    $.ajax({
      url: backNestUrl + "admin/read/promotionByDepartement",
      headers: { Authorization: `Bearer ${access_token}` },
      method: "GET",
      success: function (data) {
        console.log(data);
        var outPut = `<option value="null">Sélectionnez la promotion</option>`;
        data.map((item, i) => {
          if (systeme == item.systeme) {
            outPut += `
              <option value="${item.id_promotion}">${item.nom_promotion} - ${item.vacation}</option>
            `
          }
        });
        $('.listOfPromotion').html(outPut);
      },
      error: async function (e) {
        console.log(e.responseJSON);
        var res = e.responseJSON;
        if (res.statusCode === 401) {
          refreshToken();
          $.ajax({
            url: backNestUrl + "admin/read/promotionByDepartement",
            headers: { Authorization: `Bearer ${access_token}` },
            method: "GET",
            success: function (data) {
              console.log(data);
              var outPut = ` <label>PROMOTION</label>
              <select class="form-control" id="promotion">
              <option value="null">Sélectionnez la promotion</option>`;
              data.map((item, i) => {
                outPut += `
                    <option value="${item.id_promotion}">${item.nom_promotion} - ${item.vacation}</option>
                  `
              })
              outPut += `</select>`
              $('.listOfPromotion').html(outPut);
            },
          })
        } else {
          toastr.warning("Aucun promotion n'a était enregistre pour cette departement");
        }
      }
    });
  }

  function affecterCours() {
    var uniteId = $('#cours').val();
    var tutilaireId = $('#titulaire').val();
    var promotionId = $('#promotion').val();
    var credit = $('#credit').val();
    var semestre = $('#semestre').val();
    console.log(tutilaireId);
    $.ajax({
      url: `${backNestUrl}cours/create/affect/${exerciceEncours}`,
      headers: { Authorization: `Bearer ${access_token}` },
      method: 'POST',
      data: {
        uniteId: parseInt(uniteId),
        tutilaireId: parseInt(tutilaireId),
        promotionId: parseInt(promotionId),
        credit: parseInt(credit),
        semestre: parseInt(semestre)
      },
      success: function (data) {
        console.log(data);
        // $('#cours').val('null');
        // $('#titulaire').val('null');
        // $('#promotion').val('null');
        // $('#credit').val('');
        toastr.success("Enregistrement reussi");
      },
      error: function (e) {
        console.log(e);
        var res = e.responseJSON;
        console.log(res);
        if (res.statusCode === 401) {
          refreshToken();
          creatUnit();
          toastr.error("Vous n'avez le droits pas d'affecter un cours");
          // alert('Vous allez etre deconnecté');
          console.log(window.location);
        } else if (res.statusCode === 409) {
          toastr.warning(res.message);
        } else {
          toastr.warning(res.message);
        }
      }
    });
  }

  //liste d'affectation
  getAllAfectation();
  function getAllAfectation() {
    console.log(exerciceEncours);
    $.ajax({
      url: `${backNestUrl}cours/read/affect/${exerciceEncours}`,
      headers: { Authorization: `Bearer ${access_token}` },
      method: "GET",
      success: function (data) {
        console.log(data);
        var outPut = '';
        data.map((item, i) => {
          outPut += `
                <tr>
                  <td>${i + 1}</td>
                  <td>${item.unite_ensiegnement.nom}</td>
                  <td>${item.promotion.nom_promotion} ${item.promotion.vacation}  ${item.promotion.systeme !== null ? item.promotion.systeme : ""} </td>
                  <td>${item.credit}</td>
                  <td>${item.titulaire.nom_user} ${item.titulaire.postnom_user}</td>
                  
                  <td>
                    <button class="btn btn-primary btn-xs">modifier</button>
                    <button class="btn btn-danger btn-xs">supprimer</button>
                  </td>
                </tr>`;

        })
        $('.listAffectation').html(outPut);
      },
      error: async function (e) {
        console.log(e.responseJSON);
        var res = e.responseJSON;
        if (res.statusCode === 401) {
          refreshToken();
        } else {
          toastr.warning("Aucune affectation trouver n'a était enregistre pour cette departement");
        }
      }
    });
  }
  $(document).on('change', '.changeExercice', function () {
    // $exerciceId = $(this).val();
    // console.log($exerciceId);
    $.ajax({
      url:URLBASE+'/home/changeExercice',
      method: 'POST',
      data: {
        exerciceId: $exerciceId
      },
      success: function(data){
        console.log(data);
        const res = JSON.parse(data);
        console.log(res);
        localStorage.setItem('exerciceEncours',res.id_exercice);
        getAllAfectation();
      }
    })
  });

  //create cours 
  $(function () {
    $.validator.setDefaults({
      submitHandler: function () {
        $(document).on('submit', '#button', function (e) {
          e.preventDefault();
        });
        creatUnit();
      }
    });

    $('#quickFormCoursCreate').validate
      ({
        rules: {
          code:
          {
            required: true
          },
          nom:
          {
            required: true
          },
        },
        messages: {
          code: {
            required: "veuillez inserer le code du cours s'il vous plait !"
          },
          nom: {
            required: "veuillez inserer le nom du cours s'il vous plait !"
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

  $(document).on("change", "#systeme", function () {
    $systeme = $(this).val();
    getPromotion($systeme);
  })

  //affect cours 
  $(document).on('submit', '#quickFormAffecterCours', function (e) {
    e.preventDefault();
    affecterCours();
  });

});