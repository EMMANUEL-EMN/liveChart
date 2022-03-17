<?php

//updating image in database
$image=$_FILES['image']['name'];
$email=$_POST['email'];
require_once 'dbconn.php';

$sql="UPDATE `user` SET `image`='$image' WHERE `email`='$email'";
$runq=$conn->query($sql);
if ($runq) {
   header("location: ./login.html");
}

?>