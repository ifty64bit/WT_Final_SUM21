<?php
    include('../Model/db_config.php');
    session_start();
    $user_id=$_GET['id'];
    $q="SELECT * FROM `user` INNER JOIN about_user ON `user`.`id`=about_user.id INNER JOIN account ON about_user.id=account.user_id INNER JOIN nominee_user ON account.user_id=nominee_user.id INNER JOIN parents ON nominee_user.id=nominee_user.id WHERE `user`.id='$user_id' and parents.id='$user_id'";
    $res=get($q)[0];

    if(isset($_POST['ap']))
    {
        $q="UPDATE `user` SET status='Active' where id='$user_id'";
        $res=execute($q);
        if($res==true)
        {
            header('Location: ./pendingAccounts.php');
        }
    }
    
    if(isset($_POST['dp']))
    {
        $q="UPDATE `user` SET status='Disapproved' where id='$user_id'";
        $res=execute($q);
        if($res==true)
        {
            header('Location: ./pendingAccounts.php');
        }
    }

    if(isset($_POST['bk']))
    {
        $q="UPDATE `user` SET status='Blocked' where id='$user_id'";
        $res=execute($q);
        if($res==true)
        {
            header('Location: ./manageAccount.php');
        }
    }

    if(isset($_POST['ac']))
    {
        $q="UPDATE `user` SET status='Active' where id='$user_id'";
        $res=execute($q);
        if($res==true)
        {
            header('Location: ./manageAccount.php');
        }
    }
?>