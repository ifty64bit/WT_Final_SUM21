<?php
    require('./Model/db_config.php');
    session_start();
    $id=$_SESSION['id'];
    $username=$_SESSION['uname'];
    $q="SELECT acc_number FROM account WHERE user_id='$id'";
    $acc_number=get($q)[0]['acc_number'];
    $q="SELECT * FROM cheque WHERE asso_acc='$acc_number'";
    $res=get($q);
    $staus="";
    if(isset($_POST['apply']))
    {
        $q="INSERT INTO message(sender_name,sender_level,receiver,type,subject,message, status) VALUES('$username', 'user', 'emp', 'CHEQUE_REQUEST', 'CHEQUE REQUEST FROM $username', 'CHEQUE REQUEST FROM $username, ACCOUNT NUMBER: $acc_number', 'Pending')";
        $r=execute($q);
        if($r==true)
        {
            $staus="sent";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Request Cheque Book</title>
</head>
<body>
    <?Php 
        require('./header.php');
        if($staus=="sent")
        {
            echo "<div class='pass'>Request Sent</div>";
        }
        
     ?>
    <div>
        <form action="" method="post">
            <input class="pass btn" style="width: 500px; display:block; margin: 50px auto" name="apply" type="submit" value="Apply for A Cheque Book">
        </form>
    </div>
    <div class="form_container">
        <?php
            if(empty($res))
            {
                echo "You Dont Have Any Cheque Record";
            }
            else{
                echo "<table class='tab' style='width: 100%;'>";
                echo "<tr>";
                echo "<th>Cheque Number</th>";
                echo "<th>Issued By</th>";
                echo "<th>Time</th>";
                echo "</tr>";
                foreach($res as $r)
                {
                    echo "<tr>";
                    echo "<td>",$r['c_number'],"</td>";
                    echo "<td>",$r['issued_by'],"</td>";
                    echo "<td>",$r['issue_t'],"</td>";
                    echo "</tr>";
                }
            }
        ?>
    </div>
</body>
</html>