<?php
    include('../Model/db_config.php');
    session_start();
    $query="SELECT * from `user` where status='Pending'";
    $res=get($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title><?php echo $_SESSION['level']=='emp'?'Employee':'Admin' ?> Panel</title>
</head>
<body>
    <?php
        include('./header.php');
    ?>
    <div class="form_container">
        <table class="tab">
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php
                foreach($res as $r)
                {
                    echo "<tr>";
                    echo "<td>",$r['username'],"</td>";
                    echo "<td>",$r['email'],"</td>";
                    echo "<td><a href='./viewPendingDetails.php?id=",$r['id'],"'><button class='btn'>Vew Details</button></a></td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>