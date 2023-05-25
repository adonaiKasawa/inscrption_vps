$(document).ready(function () {
  const URLBASE = "http://162.254.35.36/inscription/"
  const backNestUrl = 'http://162.254.35.36:4300/'

  getToken();
  getAllExercice();
  function getToken() {
    $.ajax({
      url: `${URLBASE}/authentication/getToken`,
      method: 'post',
      success: function (data) {
        const token = JSON.parse(data);
        localStorage.setItem('access_token',token.access_token)
        localStorage.setItem('refresh_token',token.refresh_token)
      }
    })
  }
  function refreshToken() {
    var refresh_token = localStorage.getItem('refresh_token');
    $.ajax({
      url: `${backNestUrl}auth/refresh`,
      method: 'post',
      success: function (data) {
        const token = JSON.parse(data);
        console.log(token);
        localStorage.setItem('access_token',token.access_token)
        localStorage.setItem('refresh_token',token.refresh_token)
        $.ajax({
          url: `${URLBASE}/authentication/refreshToken`,
          method: 'post',
          success: function (data) {
            const token = data;
            console.log(token);
            localStorage.setItem('access_token',token.access_token)
            localStorage.setItem('refresh_token',token.refresh_token)
          }
        })
      }
    })
  }
  function getAllExercice() {
    $.ajax({
      url:URLBASE+'/home/getAllExercice',
      method: 'POST',
      success: function(data){
        console.log(data);
        const res = JSON.parse(data);
        console.log(res);
        localStorage.setItem('exerciceEncours',res.id_exercice);
      }
    }); 
  }
  $(document).on('change', '.changeExercice', function () {
    $exerciceId = $(this).val();
    console.log($exerciceId);
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
      }
    })
  });

});