<?php
    include('./Model/db_config.php');
    session_start();
    $id=$_SESSION['id'];
    $query="SELECT * FROM account WHERE user_id='$id'";
    $data=get($query);
    $data=$data[0];
    $query="SELECT status from `user` where id='$id'";
    $data2=get($query);
    $data2=$data2[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Account Details</title>
</head>
<body>
    <?php include('./header.php') ?>
    <div class="form_container">
        <div class="f_between">
            <div>Account Status</div>
            <div><?php echo $data2['status'] ?></div>
        </div>
        <div class="f_between">
            <div>Account Number</div>
            <div><?php echo $data['acc_number'] ?></div>
        </div>
        <div class="f_between">
            <div>Account Type</div>
            <div><?php echo $data['acc_type'] ?></div>
        </div>
        <div class="f_between">
            <div>Balance</div>
            <div><?php echo $data['balance'] ?></div>
        </div class="f_between">
        <div  class="f_between">
            <div>Transaction Limit</div>
            <div><?php echo $data['tran_limit'] ?></div>
        </div>
        <div class="f_between">
            <div>Withdraw Limit</div>
            <div><?php echo $data['with_limit'] ?></div>
        </div>
    </div>
</body>
</html>