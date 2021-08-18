<?php
    include('../Model/db_config.php');
    session_start();
    if(!isset($_SESSION['level']))
    {
        header('Location: ./login.php');
    }
    $query="SELECT COUNT(status) from `user` where status='Pending'";
    $pending_account=get($query)[0]['COUNT(status)'];
    
    $query="SELECT COUNT(id) from message where type='CHEQUE_REQUEST' AND status='Pending'";
    $c_r=get($query)[0]['COUNT(id)'];
    $query="SELECT COUNT(id) from message where type='LOAN_REQUEST' AND status='Pending'";
    $l_r=get($query)[0]['COUNT(id)'];

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
        if($_SESSION['level']=='emp')
        {
            require './emp_section.php';
        }
        elseif($_SESSION['level']=='admin')
        {
            require './admin_section.php';
        }
    ?>
    
</body>
</html>