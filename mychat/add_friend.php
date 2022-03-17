<?php
require_once 'dbconn.php';

$sender=$_POST['sender'];
$receiver=$_POST['receiver'];

$sql="INSERT INTO `friends` (`email`,`friend_email`,`status`) 
VALUES ('$sender','$receiver','friends')";
$runq=$conn->query($sql);
if ($runq) {
   $response=header("location: ./index.php");
}else {
    $response="not inserted".$conn->error;
}
echo $response;

?>