<?php

    $f_name="";
    $f_name_error="";
    $f_nid="";
    $f_nid_error="";
    $f_work_addr="";
    $f_work_addr_error="";
    $f_occupation="";
    $f_occupation_error="";
    $hasError=false;

    if(isset($_POST['reg3']))
    {
        if(empty($_POST['f_name']))
        {
            $hasError=true;
            $f_name_error="Field Can Not Be Empty";
        }

        else{
            $f_name=$_POST['f_name'];
        }

        if(empty($_POST['f_nid']))
        {
            $hasError=true;
            $f_nid_error="Field Can Not Be Empty";
        }
        elseif(!is_numeric($_POST['f_nid'])){
            $hasError=true;
            $f_nid_error="Field Value Must BE Numaric";
        }
        else{
            $f_nid=$_POST['f_nid'];
        }

        if(empty($_POST['f_work_addr']))
        {
            $hasError=true;
            $f_work_addr_error="Field Can Not Be Empty";
        }

        else{
            $f_work_addr=$_POST['f_work_addr'];
        }

        if(!isset($_POST['f_occupation']))
        {
            $hasError=true;
            $f_occupation_error="Field Can Not Be Empty";
        }

        else{
            $f_occupation=$_POST['f_occupation'];
        }
        if(!$hasError)
        {
            setcookie('father_name',$f_name,time()+(60*10));
            setcookie('father_nid',$f_nid,time()+(60*10));
            setcookie('father_work_addr',$f_work_addr,time()+(60*10));
            setcookie('father_occu',$f_occupation,time()+(60*10));
            header('Location: registration4.php');
        }
    }
?>