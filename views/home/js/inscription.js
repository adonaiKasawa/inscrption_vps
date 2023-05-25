$(document).ready(function () {
  const URLBASE = "http://localhost/inscription/"
  $(document).on('click', '#button', function () {
    var nom = $('#nom').val();
    if (nom == "") {
      alert('entrer les nom');
    } else {
      $.ajax({
        url: `${URLBASE}inscription/home`,
        method: 'post',
        data: { nom: nom },
        success: function (data) {
          if (data) {
            load("inscription_special.php")
          }
        }
      })
    }
  })

  

})
