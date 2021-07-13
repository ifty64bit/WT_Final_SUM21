<?php
    include('./Model/db_config.php');

    $name="";
    $name_err="";
    $has_err=false;

    if(isset($_POST['add_category']))
    {
        if(empty($_POST['name']))
        {
            $has_err=true;
            $name_err="Field is Empty";
        }
        $result="";
        if(!$has_err)
        {
            $result=insertCategory($_POST['name']);
            if($result===true)
            {
                header('Location: allCategory.php');
            }
        }
    }
    if(isset($_POST['edit_category']))
    {
        if(empty($_POST['name']))
        {
            $has_err=true;
            $name_err="Field is Empty";
        }
        if(!$has_err)
        {
            $name=$_POST['name'];
            $query="UPDATE CATEGORIS SET category = '$name' WHERE id=".$_POST['id'];
            $result=execute($query);
            if($result===true)
            {
                header('Location: allCategory.php');
            }
            else
            {
                echo $result;
            }
        }
        
    }
    function insertCategory($name)
    {
        $query="INSERT INTO CATEGORIS(category) VALUES('$name')";
        return execute($query);
    }
    function getAllCategories()
    {
        $query="SELECT * FROM categoris";
        $result=get($query);
        return $result;
    }
    function getCategory($id)
    {
        $query="SELECT * FROM categoris WHERE id='$id'";
        $result=get($query);
        return $result[0];
    }
?>