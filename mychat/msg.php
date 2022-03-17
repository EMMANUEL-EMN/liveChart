<?php
require_once 'dbconn.php';
$sender=$_GET['sender1'];
$receiver=$_GET['receiver1'];
$sql="SELECT * FROM `charts` WHERE `sender`='$sender' AND `receiver`='$receiver' ||
 `receiver`='$sender' AND `sender`='$receiver'  ORDER BY `id` ASC";
$runq=$conn->query($sql);
while ($results=$runq->fetch_assoc()) {
    if ($results['sender']==$sender) {
        $response='
        <div class="sender">
            <div >
                <p class="msg">'.$results['text'].'</p>
             </div>
         </div>
         <br>';
    }else {
        $response='
            <div class="receiver">
                <div >
                    <p class="msg2">'.$results['text'].'</p>
                </div>
                <br>';
    }
    echo $response;
}

?>