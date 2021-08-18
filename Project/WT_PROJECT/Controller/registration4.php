<?php

    $m_name="";
    $m_name_error="";
    $m_nid="";
    $m_nid_error="";
    $m_work_addr="";
    $m_work_addr_error="";
    $m_occupation="";
    $m_occupation_error="";
    $hasError=false;

    if(isset($_POST['reg4']))
    {
        if(empty($_POST['m_name']))
        {
            $hasError=true;
            $m_name_error="Field Can Not Be Empty";
        }

        else{
            $m_name=$_POST['m_name'];
        }

        if(empty($_POST['m_nid']))
        {
            $hasError=true;
            $m_nid_error="Field Can Not Be Empty";
        }
        elseif(!is_numeric($_POST['m_nid'])){
            $hasError=true;
            $m_nid_error="Field Value Must BE Numaric";
        }
        else{
            $m_nid=$_POST['m_nid'];
        }

        if(empty($_POST['m_work_addr']))
        {
            $hasError=true;
            $m_work_addr_error="Field Can Not Be Empty";
        }

        else{
            $m_work_addr=$_POST['m_work_addr'];
        }

        if(!isset($_POST['m_occupation']))
        {
            $hasError=true;
            $m_occupation_error="Field Can Not Be Empty";
        }

        else{
            $m_occupation=$_POST['m_occupation'];
        }
        if(!$hasError)
        {
            setcookie('mother_name',$m_name,time()+(60*10));
            setcookie('mother_nid',$m_nid,time()+(60*10));
            setcookie('mother_work_addr',$m_work_addr,time()+(60*10));
            setcookie('mother_occu',$m_occupation,time()+(60*10));
            header('Location: registration5.php');
        }
    }
?>