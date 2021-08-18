<?php
    include('./Model/db_config.php');
    #$acc_number="";
    #$acc_number_error="";
    $acc_type="";
    $acc_type_error="";
    $tranc_limit="";
    $tranc_limit_error="";
    $with_limit="";
    $with_limit_error="";
    $hasError=false;
    
    if(isset($_POST['reg6']))
    {
        if(!isset($_POST['acc_type']))
        {
            $hasError=true;
            $acc_type_error="You Must Select A Option";
        }
        else{
            $acc_type=$_POST['acc_type'];
        }        

        if(empty($_POST['tranc_limit']))
        {
            $hasError=true;
            $tranc_limit_error="Field Can Not Be Empty";
        }
        elseif(!is_numeric($_POST['tranc_limit'])){
            $hasError=true;
            $tranc_limit_error="Field Value Must BE Numaric";
        }
        else{
            $tranc_limit=$_POST['tranc_limit'];
        }

        if(empty($_POST['with_limit']))
        {
            $hasError=true;
            $with_limit_error="Field Can Not Be Empty";
        }
        elseif(!is_numeric($_POST['with_limit'])){
            $hasError=true;
            $with_limit_error="Field Value Must BE Numaric";
        }
        else{
            $with_limit=$_POST['with_limit'];
        }
        if(!$hasError)
        {
            //user Table
            $uname=$_COOKIE['uname'];
            $first_name=$_COOKIE['first_name'];
            $last_name=$_COOKIE['last_name'];
            $email=$_COOKIE['email'];
            $password=$_COOKIE['password'];
            $query="INSERT INTO user(username,fname,lname,email,password,status) VALUES('$uname','$first_name','$last_name','$email','$password','Pending')";
            $query=execute($query);
            //GET ID
            $query2="SELECT id FROM `user` WHERE username='$uname'";
            $id=get($query2);
            $id=$id[0]['id'];
            //Account Table
            $querry3="INSERT INTO account(user_id,acc_type,tran_limit,with_limit) VALUES('$id','$acc_type','$tranc_limit','$with_limit')";
            $query3=execute($querry3);
            //About User Table
            $birth=$_COOKIE['b_year']."-".$_COOKIE['b_month']."-".$_COOKIE['b_day'];
            $house=$_COOKIE['house'];
            $road=$_COOKIE['road'];
            $block=$_COOKIE['block'];
            $division=$_COOKIE['division'];
            $district=$_COOKIE['district'];
            $gender=$_COOKIE['gender'];
            $phone=$_COOKIE['phone'];
            $querry4="INSERT INTO about_user(id,house,road,block,division,district,gender,birth,phone) VALUES('$id','$house','$road','$block','$division','$district','$gender','$birth','$phone')";
            $query4=execute($querry4);
            //nominee_user Table
            $n_first_name=$_COOKIE['n_first_name'];
            $n_last_name=$_COOKIE['n_last_name'];
            $n_nid=$_COOKIE['n_nid'];
            $n_father_name=$_COOKIE['n_father_name'];
            $n_father_nid=$_COOKIE['n_father_nid'];
            $n_mother_name=$_COOKIE['n_mother_name'];
            $n_mother_nid=$_COOKIE['n_mother_nid'];
            $n_addr=$_COOKIE['n_addr'];
            $n_phone=$_COOKIE['n_phone'];
            $n_occu=$_COOKIE['n_occu'];
            $querry5="INSERT INTO nominee_user(id,n_first_name,n_last_name,nominee_nid,n_father_name,n_father_nid,n_mother_name,n_mother_nid,n_addr,n_phone,n_occu) VALUES('$id','$n_first_name','$n_last_name','$n_nid','$n_father_name','$n_father_nid','$n_mother_name','$n_mother_nid','$n_addr','$n_phone','$n_occu')";
            $query5=execute($querry5);
            //Parents Table
            $father_name=$_COOKIE['father_name'];
            $father_nid=$_COOKIE['father_nid'];
            $father_work_addr=$_COOKIE['father_work_addr'];
            $father_occu=$_COOKIE['father_occu'];
            $mother_name=$_COOKIE['mother_name'];
            $mother_nid=$_COOKIE['mother_nid'];
            $mother_work_addr=$_COOKIE['mother_work_addr'];
            $mother_occu=$_COOKIE['mother_occu'];
            $query6="INSERT INTO  parents(id,father_name,father_nid,father_addr,father_occu,mother_name,mother_nid,mother_addr,mother_occu) VALUES('$id','$father_name','$father_nid','$father_work_addr','$father_occu','$mother_name','$mother_nid','$mother_work_addr','$mother_occu')";
            $query6=execute($query6);
            if($query && $querry3 && $querry4 && $querry5 && $query6)
            {
                session_start();
                $_SESSION['id']=$id;
                $_SESSION['uname']=$uname;
            }
        }
        if(isset($_SESSION['id']))
        {
            header('Location: _home.php');
        } 
    }
?>