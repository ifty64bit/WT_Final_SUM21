<?php
    require '../Model/db_config.php';
    session_start();
    $q="SELECT `user`.id, message.id as m_ID, message.sender_name, `user`.email, account.acc_number, account.balance FROM `user`
    INNER JOIN account ON `user`.id=account.user_id
    INNER JOIN message ON `user`.`username`=message.sender_name
    WHERE message.type='CHEQUE_REQUEST' AND message.status='Pending'";
    $res=get($q);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <script>
            function get(id)
            {
                return document.getElementById(id);
            }
            function runAction(id,accNumber,user,grant)
            {
                var xhr=new XMLHttpRequest();
                if(grant)
                {
                    var url="../Controller/ajax.php?grant=true&id="+id+"&acc="+accNumber+"&user="+user;
                    xhr.onreadystatechange=function(){
                        if(this.readyState==4 && this.status==200)
                        {
                            if(this.responseText=="pass")
                            {
                                get('grant').innerText="Approved";
                            }
                            else{
                                get('grant').innerText=this.responseText;
                            }
                        }
                    }
                }
                else if(!grant)
                {
                    var url="../Controller/ajax.php?grant=false&id="+id+"&acc="+accNumber+"&user="+user;
                    console.log(url);
                    xhr.onreadystatechange=function(){
                        if(this.readyState==4 && this.status==200)
                        {
                            if(this.responseText=="pass")
                            {
                                get('decline').innerText="Declined";
                            }
                            else{
                                get('decline').innerText=this.responseText;
                            }
                        }
                    }
                }
                xhr.open("GET", url,true);
                
                xhr.send();
            }
        </script>
        <title>Cheque Book Request</title>
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
                        echo "<td><button onclick='runAction($id,$acc_number,\"$sender\",true)' class='btn pass' id='grant'>Grant</button></td>";
                        echo "<td><button onclick='runAction($id,$acc_number,\"$sender\",false)' class='btn err' id='decline'>Decline</button></td>";
                        echo "</tr>";
                    }
                ?>
            </table>
        </div>
    </body>
</html>