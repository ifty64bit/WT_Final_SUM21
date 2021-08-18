<?php 
    session_start();
    require './Model/db_config.php';
    $q="select privacy_policy from sys";
    $r=get($q)[0]['privacy_policy'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Privacy Policy</title>
</head>
<body>
    <?php require './header.php' ?>
    <div class="form_container">
        <?php echo $r ?>
    </div>
</body>
</html>