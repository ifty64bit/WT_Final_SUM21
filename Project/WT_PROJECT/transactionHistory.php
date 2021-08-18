<?php
    include('./Controller/transactionHistory.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Transaction History</title>
</head>
<body>
    <?php 
        if(isset($_SESSION['level']))
        {
            include('./official/header.php');
        }
        else{
            include('./header.php');
        }
    ?>
    <div class="form_container">
        
        <table class="tab">
            <tr>
                <th>From</th>
                <th>Sender Account</th>
                <th>Ammount</th>
                <th>TO</th>
                <th>To Account</th>
                <th>Time</th>
            </tr>
            <?php
                foreach($res as $r)
                {
                    echo "<tr>";
                    echo "<td>",$r['t_from']==$user?"SELF":$r['t_from'],"</td>";
                    echo "<td>".$r['t_from_acc']."</td>";
                    echo "<td>",$r['t_from']==$user?'-'.$r['ammount']:'+'.$r['ammount'],"</td>";
                    echo "<td>",$r['t_to']==$user?"SELF":$r['t_to'],"</td>";
                    echo "<td>".$r['t_to_acc']."</td>";
                    echo "<td>".$r['t']."</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>