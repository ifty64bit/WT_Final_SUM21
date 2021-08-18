<?php
    require '../Model/db_config.php';

    function checkifExist($uname)
    {
        $query="SELECT * FROM `user` where username='$uname'";
        $rs=get($query);
        if(count($rs)>0)
        {
            return true;
        }
        return false;
    }

    echo checkifExist($_GET['uname']);
?>