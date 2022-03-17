<?php
require_once '../dbconn.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/chat.css">
    <script src="jquery.js"></script>
    <link rel="stylesheet" href="chat.css">
    <script src="jquery.js"></script>
    <script src="main.js"></script>
</head>
<body>
    <?php require_once 'nav.html'; ?>
    <h2 style="text-align: center;">All friends</h2>
    <?php
    
    $query="SELECT * FROM `friends` WHERE `email`='$_SESSION[user]'";
    $runq=$conn->query($query);
    
    while ($results=$runq->fetch_assoc()) {
       $sql="SELECT * FROM `user` WHERE `email`='$results[friend_email]'";
       $rq=$conn->query($sql);
       $results1=$rq->fetch_assoc();
       $imgurl="../profile/$results1[image]";
        //echo $results1['image'];
    ?>

        <center>
        <a id="uid" href="chat.php?receiver=<?php echo $results['friend_email']; ?>">
        <div class="friend">
            <div>       
                 <img src="<?php echo $imgurl; ?>" alt="" id="img">
            </div>
            <div class="uname">
                <p><?php  echo $results1['username']; ?></p>
            </div>
        </div>
        </a>
        </center>

    <?php } ?>

</body>
</html> 