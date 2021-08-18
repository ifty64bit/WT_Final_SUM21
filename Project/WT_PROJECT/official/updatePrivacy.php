<?php
    session_start();
    require '../Model/db_config.php';
    $q="Select privacy_policy From sys";
    $res=get($q)[0]['privacy_policy'];
    if(isset($_POST['save'])){
        $p=$_POST['p_p'];
        $q="UPDATE  sys SET privacy_policy='$p'";
        $r=execute($q);
        if($r==true)
        {
            $status='ok';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Update Privacy Policy</title>
</head>
<body>
    <?php require './header.php' ?>
    <?php echo isset($status) ? "<div class='pass'>Updated</div>" : ""?>
    
    <div class="form_container">
        <div>
            <h2>Update Privacy Policy</h2>
        </div>
        <form action="" method="post">
            <textarea name="p_p" id="" cols="50" rows="30">
                <?php echo $res ?>
            </textarea>
            <input type="submit" name="save" class="btn" value="Save">
        </form>
    </div>
</body>
</html>