<?php
    include("../MVC/Model/db_config.php");

    function checkUsername($category)
    {
        $query="SELECT * from categoris where category='$category'";
        $rs=get($query);
        if(count($rs)>0)
        {
            return true;
        }
        return false;
    }

    echo checkUsername($_GET['category']);
?>