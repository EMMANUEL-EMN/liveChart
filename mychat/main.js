$(document).ready(function(){

    $('#fbtn').click(function(){
       
        let sender=$('#sender').val();
        let receiver=$('#receiver').val();
        let message=$('#msg').val();
        $.post(
            "http://localhost/javan/mychat/insert_msg.php",
            {
                sender1: sender,
                receiver1: receiver,
                msg: message
            },
            function (data,status){
                if (status){
                   $('#msg').val("");
                }
            }
        );
    });





});