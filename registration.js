
/* ----- отправка и запись даннных на сервер -----*/
$(document).ready(function(){
    $('#form').submit(function(e) {
        $(".error").remove();
        var setdata = $("#form").serialize(); 
            $.post( "sent.php", setdata, function( data ) { 
                $('#form').css('display','none');
                $('#result_form').html( data ); 
            })
        return false;
    });
});
/* -----------------------------------------------*/