<?php
    include('./Model/db_config.php');
    session_start();
    $id=$_SESSION['id'];
    $user=$_SESSION['uname'];
    $atm_number="";
    $atm_number_error="";
    $with_amount="";
    $with_amount_error="";
    $with_amount2="";
    $with_amount2_error="";
    $password="";
    $password_error="";
    $hasError=false;
    $status="ok";
    
    if(isset($_POST['atm']))
    {
        if(empty($_POST['atm_number']))
        {
            $hasError=true;
            $atm_number_error="This Field IS Required";
        }
        elseif(!is_numeric($_POST['atm_number']))
        {
            $hasError=true;
            $atm_number_error="Account Number Must Be Numaric";
        }
        else{
            $atm_number=$_POST['atm_number'];
        }

        if(empty($_POST['with_amount']))
        {
            $hasError=true;
            $with_amount_error="This Field IS Required";
        }
        elseif(!is_numeric($_POST['with_amount']))
        {
            $hasError=true;
            $with_amount_error="This Field Must Be Numaric";
        }
        else{
            $with_amount=$_POST['with_amount'];
        }

        if(empty($_POST['with_amount2']))
        {
            $hasError=true;
            $with_amount2_error="This Field IS Required";
        }
        elseif(!is_numeric($_POST['with_amount2']))
        {
            $hasError=true;
            $with_amount2_error="This Field Must Be Numaric";
        }
        else{
            $with_amount2=$_POST['with_amount2'];
        }

        if($with_amount!=$with_amount2)
        {
            $hasError=true;
            $with_amount_error="Ammount does not match";
            $with_amount2_error="Ammount does not match";
        }

        if(empty($_POST['password']))
        {
            $hasError=true;
            $password_error="Field Can Not Be Empty";
        }
        else{
            $password=$_POST['password'];
        }
        
        if(!$hasError)
        {
            $querry="SELECT acc_number,with_limit,balance,password FROM account INNER Join `user` ON account.user_id=`user`.`id` where id='$id'";
            $res=get($querry)[0];
            $acc_number=$res['acc_number'];
            $with_limit=$res['with_limit'];
            $balance=$res['balance'];
            $pass=$res['password'];

            if($pass!=$password)
            {
                $status="w_p";
            }

            if($with_amount2>$with_limit)
            {
                $status="e_l";
            }

            if($balance<$with_amount2)
            {
                $status="e_b";
            }

            if($status=='ok')
            {
                $new_bal=$balance-$with_amount2;
                $res1=execute("UPDATE account SET balance='$new_bal' WHERE user_id='$id'");
                $res2=execute("INSERT INTO transaction(t_from, t_from_acc, ammount, t_to, t_to_acc) VALUES('$user', '$acc_number', '$with_amount2', 'ATM_WITHDRAW', '$atm_number')");
                if($res1 && $res2)
                {
                    $status="sent";
                }
            }
            $atm_number="";
            $with_amount="";
            $with_amount2="";
            $password="";
        }
    }
?>