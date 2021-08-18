<?php
    include('./Model/db_config.php');
    session_start();
    
        $id=$_SESSION['id'];
        $user=$_SESSION['uname'];
        $p_number="";
        $p_number_error="";
        $p_number2="";
        $p_number2_error="";
        $transc_amount="";
        $transc_amount_error="";
        $password="";
        $password_error="";
        $hasError=false;
        $status="ok";
    
        if(isset($_POST['m_banking']))
        {
            if(empty($_POST['p_number']))
            {
                $hasError=true;
                $p_number_error="Field Can Not Be Empty";
            }
            elseif(!is_numeric($_POST['p_number']))
            {
                $hasError=true;
                $p_number_error="Phone Number Must Be Numaric";
            }
            else
            {	
                $p_number=$_POST['p_number'];
            }
    
            if(empty($_POST['p_number2']))
            {
                $hasError=true;
                $p_number2_error="Field Can Not Be Empty";
            }
            elseif(!is_numeric($_POST['p_number2']))
            {
                $hasError=true;
                $p_number2_error="Phone Number Must Be Numaric";
            }
            else
            {	
                $p_number2=$_POST['p_number2'];
            }
    
            if($p_number!=$p_number2)
            {
                $hasError=true;
                $p_number_error="Phone Number Dose Not Match";
                $p_number2_error="Phone Number Dose Not Match";
            }
    
            if(empty($_POST['transc_amount']))
            {
                $hasError=true;
                $tranc_amount_error="This Field IS Required";
            }
            elseif(!is_numeric($_POST['transc_amount']))
            {
                $hasError=true;
                $tranc_amount_error="This Field Must Be Numaric";
            }
            else{
                $transc_amount=$_POST['transc_amount'];
            }
    
            if(empty($_POST['password']))
            {
                $hasError=true;
                $password_error="Field Can Not Be Empty";
            }
            else
            {
                $password=$_POST['password'];
            }
    
            if(!$hasError)
            {
                $querry="SELECT acc_number,tran_limit,balance,password FROM account INNER Join `user` ON account.user_id=`user`.`id` where id='$id'";
                $res=get($querry)[0];
                $acc_number=$res['acc_number'];
                $trans_limit=$res['tran_limit'];
                $balance=$res['balance'];
                $pass=$res['password'];
    
                if($pass!=$password)
                {
                    $status="w_p";
                }
    
                if($transc_amount>$trans_limit)
                {
                    $status="e_l";
                }
    
                if($balance<$transc_amount)
                {
                    $status="e_b";
                }
    
                if($status=='ok')
                {
                    $new_bal=$balance-$transc_amount;
                    $res1=execute("UPDATE account SET balance='$new_bal' WHERE user_id='$id'");
                    $res2=execute("INSERT INTO transaction(t_from, t_from_acc, ammount, t_to, t_to_acc) VALUES('$user', '$acc_number', '$transc_amount', 'MOBILE_OUT', '$p_number')");
                    if($res1 && $res2)
                    {
                        $status="sent";
                    }
                }
                $p_number="";
                $p_number2="";
                $transc_amount="";
                $password="";
            }
        }
?>