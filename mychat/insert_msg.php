<?php
require_once 'dbconn.php';
$msg=$_POST['msg'];
$sender=$_POST['sender1'];
$receiver=$_POST['receiver1'];
    
$query="INSERT INTO `charts` (`sender`,`text`,`receiver`,`uploads`) 
VALUES('$sender','$msg','$receiver','')";
$runq=$conn->query($query);
if ($runq) {
    $response="inserted".$msg;
}else {
   $response="not inserted".$conn->error;
}

echo $response;
?>