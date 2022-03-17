<?php
session_start();
//check if user exists in the database system
require_once 'dbconn.php';
$query="SELECT * FROM `user`";
$runq=$conn->query($query);

function data($var){
    $var=htmlentities($var);
    $var=htmlspecialchars($var);
    $var=trim($var);
    $var=stripslashes($var);
    return $var;
}

$email=data($_POST['email']);

while ($results=$runq->fetch_assoc()) {
    if ($results['email']===$email) {
        $_SESSION['reset']=$email;
      header("location: reset_image_form.php");  
    }else {
        echo "<script>
        alert('sorry your details doesn`t exists in our database system. please signup');
        </script>";
        echo "<script>
        window.location.assign('./signup.html');
        </script>";
        
    }
}



?>