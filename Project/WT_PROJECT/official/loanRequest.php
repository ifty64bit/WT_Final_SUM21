<?php
    require '../Model/db_config.php';
    session_start();
    $q="SELECT `user`.id, message.id as m_ID, message.sender_name, message.subject, `user`.email, account.acc_number, account.balance FROM `user`
    INNER JOIN account ON `user`.id=account.user_id
    INNER JOIN message ON `user`.`username`=message.sender_name
    WHERE message.type='LOAN_REQUEST' AND message.status='Pending'";
    $res=get($q);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <script src="./js/loanRequest.js"></script>
        <title>Loan Request</title>
    </head>
    <body>
        <?php require('./header.php') ?>
        <div class="form_container">
            <table class="tab" style="width: 100%;">
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Account</th>
                    <th>Balance</th>
                    <th>Amount</th>
                    <th colspan="2">Action</th>
                    
                </tr>
                <?php
                    foreach($res as $r)
                    {
                        echo "<tr>";
                        echo "<td>",$r['sender_name'],"</td>";
                        echo "<td>",$r['email'],"</td>";
                        echo "<td>",$r['acc_number'],"</td>";
                        echo "<td>",$r['balance'],"</td>";
                        
                        $id=$r['m_ID'];
                        $acc_number=$r['acc_number'];
                        $sender=$r['sender_name'];
                        $amount=explode(" ",$r['subject'])[1];
                        echo "<td>$amount</td>";
                        echo "<td><button onclick='runAction($id,$acc_number,\"$sender\",$amount, true)' class='btn pass' id='grant'>Grant</button></td>";
                        echo "<td><button onclick='runAction($id,$acc_number,\"$sender\",$amount, false)' class='btn err' id='decline'>Decline</button></td>";
                        echo "</tr>";
                    }
                ?>
            </table>
        </div>
    </body>
</html>