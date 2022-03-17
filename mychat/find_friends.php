<?php
session_start();
if (!isset($_SESSION['user'])) {
   header("location: ../login.html");
}

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
</head>
<body>
   <?php require_once 'nav.html'; ?>

<?php 
require_once './dbconn.php';
$sql="SELECT * FROM `user` WHERE NOT `email`='$_SESSION[user]'";
$runq=$conn->query($sql);
?>

<?php
 while($results=$runq->fetch_assoc()){ 
   $imgurl="../profile/$results[image]";
   ?>
<form action="add_friend.php" method="POST">
    <img src="<?php echo $imgurl; ?>" alt="" id="img">
    <p class="msg"><?php echo $results['username']; ?></p>
    <input type="hidden" name="receiver" value="<?php echo $results['email']; ?>" id="receiver">
    <input type="hidden" name="sender" value="<?php echo $_SESSION['user']; ?>" id="sender">
    <button class="btn" id="follow" >ADD</button>
</form>
<?php } ?>  

 
</body>
</html>
