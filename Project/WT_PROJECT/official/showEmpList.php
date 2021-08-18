<?php
    include('../Model/db_config.php');
    session_start();
    $query="SELECT * from emp";
    $res=get($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <script src="./js/showEmpList.js"></script>
        <title>Manage Account</title>
    </head>
    <body>
        <?php include('./header.php')?>
        <div class="form_container">
            <table class="tab" style="width: 100%;">
                <tr>
                    <th>Username</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Salary</th>
                    <th>Action</th>

                </tr>
                <?php
                    foreach($res as $r)
                    {
                        $id=$r['id'];
                        $username=$r['username'];
                        $f_name=$r['first_name'];
                        $l_name=$r['last_name'];
                        $sal=$r['salary'];
                        echo "<tr id='$id'>";
                        echo "<td>","<input type='text' name='username' id='' value='$username'>","</td>";
                        echo "<td>","<input type='text' name='f_name' id='' value='$f_name'>","</td>";
                        echo "<td>","<input type='text' name='l_name' id='' value='$l_name'>","</td>";
                        echo "<td>","<input type='text' name='salary' id='' value='$sal'>","</td>";
                        echo "<td><button class='btn' name='save' onclick='runAction(\"$id\")' >Save</button></td>";
                        echo "</tr>";
                    }
                ?>
            </table>
        </div>
    </body>
</html>