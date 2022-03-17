<?php
function data($var){
    $var=htmlentities($var);
    $var=htmlspecialchars($var);
    $var=trim($var);
    $var=stripslashes($var);
    return $var;
}
if (isset($_POST['log'])){
session_start();
$username=data($_POST['username']);
$rollno=data($_POST['rollno']);
$image=$_FILES['image']['name'];

require_once 'dbconn.php';
$sql="SELECT * FROM `user`";
$runq=$conn->query($sql);
while ($results=$runq->fetch_assoc()) {
    if ($results['image']===$image ) {
       if ($results['rollno']===$rollno && $results['username']===$username) {
      $_SESSION['user']=$results['email'];
      header("location: ./mychat/index.php");
     
   }else {
       echo "<script>
       alert('check your login credentials or signup');
       </script>";
       echo "<script>
       window.location.assign('./login.html');
        </script>";
   }
    }else {
        echo "<script>
       alert('Incorrect login image, try again or signup');
        </script>";
        echo "<script>
            window.location.assign('./login.html');
         </script>";
         echo $image;
         echo $results['image'];
    }

}

}else{
    header("location: ./login.html");
}

?>