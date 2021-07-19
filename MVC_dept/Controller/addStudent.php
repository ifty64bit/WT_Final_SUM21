<?php
    include('./Model/db_config.php');
    $name="";
    $name_err="";
    $id="";
    $id_err="";
    $dob="";
    $dob_err="";
    $credit="";
    $credit_err="";
    $cgpa="";
    $cgpa_err="";
    $dept="";
    $dept_err="";
    $status="";
    $has_err=false;
    if(isset($_POST['addStu']) or isset($_POST['update']))
    {
        if(empty($_POST['name']))
        {
            $has_err=true;
            $name_err="Field is Empty";
        }
        else{
            $name=$_POST['name'];
        }
        if(empty($_POST['dob']))
        {
            $has_err=true;
            $dob_err="Field is Empty";
        }
        else{
            $dob=$_POST['dob'];
        }
        if(empty($_POST['credit']))
        {
            $has_err=true;
            $credit_err="Field is Empty";
        }
        elseif(!is_numeric($_POST['credit']))
        {
            $has_err=true;
            $credit_err="Must be Numaric";
        }
        elseif($_POST['credit']>140)
        {
            $has_err=true;
            $credit_err="Must be less then 140";
        }
        else{
            $credit=$_POST['credit'];
        }

        if(empty($_POST['cgpa']))
        {
            $has_err=true;
            $cgpa_err="Field is Empty";
        }
        elseif(!is_numeric($_POST['cgpa']))
        {
            $has_err=true;
            $cgpa_err="Must be Numaric";
        }
        elseif($_POST['cgpa']>4)
        {
            $has_err=true;
            $cgpa_err="Must be Less Then 4";
        }
        else
        {
            $cgpa=$_POST['cgpa'];
        }

        if(empty($_POST["dept"]) or $_POST["dept"]=="----")
        {
            $has_err=true;
            $dept_err="Select Department";
        }
        else{
            $dept=$_POST['dept'];
        }

        if(empty($_POST['id']))
        {
            $has_err=true;
            $id_err="Field is Empty";
        }
        elseif(!is_numeric($_POST['id']))
        {
            $has_err=true;
            $id_err="Must Be Numaric";
        }
        elseif(strlen($_POST['id'])>8)
        {
            $has_err=true;
            $id_err="ID Size Must Be Less then 8";
        }
        else{
            $id=$_POST['id'];
        }


        if(!$has_err)
        {
            if(isset($_POST['addStu']))
            {
                $query="INSERT INTO student(name,id,dob,credit,cgpa,dept_id) VALUES('$name','$id','$dob','$credit','$cgpa','$dept')";
                $result = execute($query);
                if($result===true)
                {
                    echo "Inserted";
                    $status="Success";
                    $name="";
                    $id="";
                    $dob="";
                    $credit="";
                    $cgpa="";
                    $dept="";
                }
                else{
                    $status=$result;
                }
            }
            elseif(isset($_POST['update']))
            {
                $query="UPDATE student SET name='$name', dob='$dob', credit=$credit, cgpa=$cgpa, dept_id=$dept where id=$id";
                $result=execute($query);
                if($result===true)
                {
                    echo "success";
                }
                else{
                    echo $result;
                }
            }
            
        }
    }

    if(isset($_GET['id']))
    {
        $query="SELECT * FROM student WHERE id=".$_GET["id"];
        $result=get($query);
        foreach($result as $r)
        {
            $name=$r['name'];
            $id=$r['id'];
            $dob=$r['dob'];
            $credit=$r['credit'];
            $cgpa=$r['cgpa'];
            $dept=$r['dept_id'];
        }
        
    }

    
?>