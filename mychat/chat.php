<?php
session_start();
if (!isset($_SESSION['user'])) {
   header("location: ../login.html");
}
require_once 'dbconn.php';
$sql="SELECT * FROM `charts` WHERE `sender`='$_SESSION[user]' OR `receiver`='$_SESSION[user]'";
$runq=$conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="chat.css">
    <script src="jquery.js"></script>
    <script src="main.js"></script>
</head>
<body>
    <?php   require_once 'nav.html'; ?>

<div id="list">

</div>
<center>
<div class="sform">
       <div class="flexBox">
            <div>
                <textarea name="msg" id="msg" cols="100" rows="5" placeholder="Type here"></textarea>
            </div>
            <div>
                <input type="button" class="btn" id="fbtn" value="Send">
            </div>
       </div>
        
        <input type="hidden" name="receiver" value="<?php echo $_GET['receiver']; ?>" id="receiver">
        <input type="hidden" name="sender" value="<?php echo $_SESSION['user']; ?>" id="sender">
       
</div>

</center>
<script>
    $(document).ready(function(){

    setInterval(()=>{
let receiver=$('#receiver').val();
let sender=$('#sender').val();
$.get(
    "http://localhost/javan/mychat/msg.php",
    {
        sender1: sender,
        receiver1: receiver
    },
    function(data,status){
        if (status) {
            $('#list').html(data);
        }
    }
);
},500);
        
});
</script>
</body>
</html>