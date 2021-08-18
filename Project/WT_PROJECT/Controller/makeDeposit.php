<?php
    include('./Model/db_config.php');
    session_start();
    $id=$_SESSION['id'];
    $card="";
    $card_err="";
    $card_type="";
    $card_type_err="";
    $cvv="";
    $cvv_err="";
    $exp="";
    $exp_err="";
    $ammount="";
    $ammount_err="";
    $has_err=false;
    $loaded=false;
    
    if(isset($_POST['deposit']))
    {
        if(empty($_POST['card']))
        {
            $has_err=true;
            $card_err="Field is Empty";
        }
        elseif(!is_numeric($_POST['card']))
        {
            $has_err=true;
            $card_err="Card Number Must Be Numaric";
        }
        else{
            $card=$_POST['card'];
        }

        if(empty($_POST['c_name']))
        {
            $has_err=true;
            $card_type_err="Select Card";
        }
        elseif($_POST['c_name']=="----")
        {
            $has_err=true;
            $card_type_err="Select Card";
        }
        else{
            $card_type=$_POST['c_name'];
        }

        if(empty($_POST['cvv']))
        {
            $has_err=true;
            $cvv_err="Field is Empty";
        }
        elseif(!is_numeric($_POST['cvv']))
        {
            $has_err=true;
            $cvv_err="CVV Number Must BE Numaric";
        }
        else{
            $cvv=$_POST['cvv'];
        }

        if(empty($_POST['exp']))
        {
            $has_err=true;
            $exp_err="Field is Empty";
        }
        else{
            $exp=$_POST['exp'];
        }

        if(empty($_POST['ammount']))
        {
            $has_err=true;
            $ammount_err="Field is Empty";
        }
        elseif(!is_numeric($_POST['ammount']))
        {
            $has_err=true;
            $ammount_err="Ammount Number Must BE Numaric";
        }
        else{
            $ammount=$_POST['ammount'];
        }

        if(!$has_err)
        {
            $bal=get("SELECT balance,acc_number from account where user_id='$id'");
            $bal=$bal[0];

            $acc_num=$bal['acc_number'];
            $bal=$bal['balance']+$ammount;
            $query="UPDATE account SET balance=$bal where user_id='$id'";
            $res=execute($query);
            $to=$_SESSION['uname'];
            $query="INSERT INTO transaction(t_from, t_from_acc, ammount, t_to, t_to_acc) VALUES('$card_type', '$card', '$ammount', '$to', '$acc_num')";
            $res2=execute($query);
            if($res==true && $res2==true)
            {
                #header("Location: _home.php");
                $loaded=true;
                $card="";
                $cvv="";
                $exp="";
                $ammount="";
                $card_type="";
            }
        }
    }
?>