<style>
    h1{
        text-align: center;
        font-size: 500px;
    }
</style>
<h1 class="lastTicket"></h1>
<script src="<?=URL?>public/plugins/jquery/jquery.min.js"></script>
<script>
$(document).ready(function(){
    const URLBASE = "http://localhost/inscription/";
    lastTicket();
    setInterval(() => {
        lastTicket()
    }, 1000);
    function lastTicket() {
        $.ajax({
            url:URLBASE+'file_attente/lastTicket',
            method:"POST",
            success:function(data){
               $('.lastTicket').html(data);
            }
        });
    }
})
</script>