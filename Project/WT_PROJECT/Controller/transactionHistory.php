<?php
    include('./Model/db_config.php');
    session_start();
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $qurry="SELECT acc_number,username FROM account INNER JOIN `user` ON account.user_id=`user`.id WHERE user_id='$id'";
        $res=get($qurry)[0];
        $acc_number=$res['acc_number'];
        $user=$res['username'];
        $qurry="SELECT * FROM transaction WHERE t_from_acc='$acc_number' OR t_to_acc='$acc_number' ORDER BY t DESC";
        $res=get($qurry);
    }
    else{
        $id=$_SESSION['id'];
        $user=$_SESSION['uname'];
        $qurry="SELECT acc_number FROM account WHERE user_id='$id'";
        $acc_number=get($qurry)[0]['acc_number'];
        $qurry="SELECT * FROM transaction WHERE t_from_acc='$acc_number' OR t_to_acc='$acc_number' ORDER BY t DESC";
        $res=get($qurry);
    }
    

?>