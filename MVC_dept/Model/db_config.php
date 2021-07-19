<?php
    $db_server="localhost";
    $db_user="root";
    $db_pass="";
    $db_name="mvc_dept";

    function execute($query)
    {
        global $db_server, $db_user, $db_pass, $db_name;
        $conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
        if($conn)
        {
            if(mysqli_query($conn,$query))
            {
                return true;
            }
            else
            {
                return mysqli_errno($conn);
            }
        }
    }

    function get($query)
    {
        global $db_server,$db_user,$db_pass,$db_name;
        $conn=mysqli_connect($db_server,$db_user,$db_pass,$db_name);
        if($conn)
        {
            $data=[];
            $result=mysqli_query($conn,$query);
            while($row=mysqli_fetch_assoc($result))
            {
                $data[]=$row;
            }
            return $data;
        }
    }

?>