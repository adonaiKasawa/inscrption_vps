$(document).ready(function () {
  const URLBASE = "http://162.254.35.36/inscription/";

  selectTicket();

  $('.view_data').click(function () {

    $.ajax({
      url: URLBASE + 'file_attente/inseretTicket',
      method: "POST",
      success: function (data) {
        if (data === "inserted") {
          console.log(data);
          // $('#ticket_detail').html(`<div class="alert alert-success">
          //                   Ticket ajouter avec succes
          //           </div>`);
        } else {
          console.log(data);
          $('#ticket_detail').html(`<div class="alert alert-danger">
                            une erreur se produit lors du  traitement.
                    </div>`);
        }
        console.log(data);
      }
    });
    for (let i = 0; i < 2; i++) {
      selectTicket();
    }
  });

  function selectTicket() {
    $.ajax({
      url: URLBASE + 'file_attente/selectTicket',
      method: "POST",
      success: function (data) {
        $('.listeTicket').html(data);
      }
    });
  }



  $('#reserve').click(function () {
    $('#table').printThis(options);
  });
// 
  $(document).on('click', '.buttonko', function () {
    $id = $(this).data('idticket');
    $numero = $(this).data('numero');
    $.ajax({
      url: `${URLBASE}file_attente/returnToEndListe`,
      method: 'POST',
      data: {
        id: $id,
        action: 'skaondcvsjkslnmaokflmvv'
      },
      success: function (data) {
        if (data === 'success') {
          console.log(data);
          // toastr.success(`le ticket ${$numero} passe en dernier de la file`);
          for (let i = 0; i < 2; i++) {
            selectTicket();
          }
        } else {
          console.log(data);
          //toastr.error('une erreur se produite veuillez actualiser la page');
        }
      }
    });
  });
  // appeler ticket
  $(document).on("click", ".appeler_ticket", function(e){
    e.preventDefault();
    var id = $(this).data("idticket");
    var appeler_ticket = $(this).data('numero');

    const msg = new SpeechSynthesisUtterance();
		msg.volume = 1;
		msg.rate = 0.6;
		msg.pitch = 1;
		msg.text = "numéro ..." + appeler_ticket + "...Vous êtes voulu dans le guichet";

		msg.voiceURI = "Amelie";
		msg.lang = "fr-CA";

        let voices = speechSynthesis.getVoices();

        console.log(voices);

		speechSynthesis.speak(msg);
  });
// 
  $(document).on('click', '.buttonok', function () {
    $id = $(this).data('idticket');
    $numero = $(this).data('numero');
    $.ajax({
      url: `${URLBASE}file_attente/deleteTicketById`,
      method: 'POST',
      data: {
        id: $id,
        action: 'skaondcvsjkslnmaokflmvv'
      },
      success: function (data) {
        if (data === 'success') {
          console.log(data);
         // toastr.success(`le ticket ${$numero} est servie`);
          for (let i = 0; i < 2; i++) {
            selectTicket();
          }
        } else {
          toastr.error(`une erreur se produite veilleux actualisé la page`);
        }
        console.log(data);
      }
    });
  });
  var options = {
    pageTitle: "<h1>Reservation de ticket/h1>"
  }
  $('.buttonok').click(function () {
    $('#reception_table').printThis(options);
  });

});