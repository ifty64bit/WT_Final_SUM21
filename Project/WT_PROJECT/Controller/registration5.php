<?php

    $n_f_name="";
    $n_f_name_error="";
    $n_l_name="";
    $n_l_name_error="";
    $n_nid="";
    $n_nid_error="";
    $n_father_name="";
    $n_father_name_error="";
    $n_father_nid="";
    $n_father_nid_error="";
    $n_mother_name="";
    $n_mother_name_error="";
    $n_mother_nid="";
    $n_mother_nid_error="";
    $n_address="";
    $n_address_error="";
    $n_phone="";
    $n_phone_error="";
    $n_occupation="";
    $n_occupation_error="";
    $hasError=false;

    if(isset($_POST['reg5']))
    {
        if(empty($_POST['n_f_name']))
        {
            $hasError=true;
            $n_f_name_error="Field Can Not Be Empty";
        }
        else{
            $n_f_name=$_POST['n_f_name'];
        }

        if(empty($_POST['n_l_name']))
        {
            $hasError=true;
            $n_l_name_error="Field Can Not Be Empty";
        }
        else{
            $n_l_name=$_POST['n_l_name'];
        }

        if(empty($_POST['n_nid']))
        {
            $hasError=true;
            $n_nid_error="Field Can Not Be Empty";
        }
        elseif(!is_numeric($_POST['n_nid']))
        {
            $hasError=true;
            $n_nid_error="Field Must Be Numaric";
        }
        else{
            $n_nid=$_POST['n_nid'];
        }

        if(empty($_POST['n_father_name']))
        {
            $hasError=true;
            $n_father_name_error="Field Can Not Be Empty";
        }
        else{
            $n_father_name=$_POST['n_father_name'];
        }

        if(empty($_POST['n_father_nid']))
        {
            $hasError=true;
            $n_father_nid_error="Field Can Not Be Empty";
        }
        elseif(!is_numeric($_POST['n_father_nid']))
        {
            $hasError=true;
            $n_father_nid_error="Field Must Be Numaric";
        }
        else{
            $n_father_nid=$_POST['n_father_nid'];
        }

        if(empty($_POST['n_mother_name']))
        {
            $hasError=true;
            $n_mother_name_error="Field Can Not Be Empty";
        }
        else{
            $n_mother_name=$_POST['n_mother_name'];
        }

        if(empty($_POST['n_mother_nid']))
        {
            $hasError=true;
            $n_mother_nid_error="Field Can Not Be Empty";
        }
        elseif(!is_numeric($_POST['n_mother_nid']))
        {
            $hasError=true;
            $n_mother_nid_error="Field Must Be Numaric";
        }
        else{
            $n_mother_nid=$_POST['n_mother_nid'];
        }

        if(empty($_POST['n_phone']))
        {
            $hasError=true;
            $n_phone_error="Field Can Not Be Empty";
        }
        elseif(!is_numeric($_POST['n_phone']))
        {
            $hasError=true;
            $n_phone_error="Field Must Be Numaric";
        }
        else{
            $n_phone=$_POST['n_phone'];
        }

        if(empty($_POST['n_occupation']))
        {
            $hasError=true;
            $n_occupation_error="Field Can Not Be Empty";
        }
        else{
            $n_occupation=$_POST['n_occupation'];
        }
        if(empty($_POST['n_address']))
        {
            $hasError=true;
            $n_address_error="Field Can Not Be Empty";
        }
        else{
            $n_address=$_POST['n_address'];
        }
        if(!$hasError)
        {
            setcookie('n_first_name',$n_f_name,time()+(60*10));
            setcookie('n_last_name',$n_l_name,time()+(60*10));
            setcookie('n_nid',$n_nid,time()+(60*10));
            setcookie('n_father_name',$n_father_name,time()+(60*10));
            setcookie('n_father_nid',$n_father_nid,time()+(60*10));
            setcookie('n_mother_name',$n_mother_name,time()+(60*10));
            setcookie('n_mother_nid',$n_mother_nid,time()+(60*10));
            setcookie('n_addr',$n_address,time()+(60*10));
            setcookie('n_phone',$n_phone,time()+(60*10));
            setcookie('n_occu',$n_occupation,time()+(60*10));
            header('Location: registration6.php');
        }
    }
?>