<?php
function data($var){
    $var=htmlentities($var);
    $var=htmlspecialchars($var);
    $var=trim($var);
    $var=stripslashes($var);
    return $var;
}
$username=data($_POST['username']);
$rolno=data($_POST['rollno']);
$email=data($_POST['email']);
$password=data($_POST['password']);
$img=$_FILES['img']['name'];

require_once 'dbconn.php';

//insert image to folder profile

$target_dir="./profile/";
$file_path=$target_dir.basename($img);
move_uploaded_file($_FILES['img']['tmp_name'],$file_path);

$sql="INSERT INTO `user` (`username`,`rollno`,`email`,`password`,`image`)
VALUES ('$username','$rolno','$email','$password','$img')";
$runq=$conn->query($sql);
if ($runq) {
    echo "<script>
    alert('successfully signed Up');
    </script>";
    echo "<script>
    window.location.assign('./login.html');
    </script>";
}else {
    echo "<script>
    alert('Not successfully signed Up');
    </script>";
    echo "<script>
    //window.location.assign('./signup.html');
    </script>";
    
}


?>