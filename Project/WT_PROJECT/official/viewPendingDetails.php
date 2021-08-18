<?php
    require_once('../Controller/viewPendingDetails.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Info</title>
</head>
<body>
    <?php include('./header.php')?>
    <div class="form_container">
        <table class="tab" style="width:100%">
            <tr>
                <td>Username: </td>
                <td><?php echo $res['username'] ?></td>
            </tr>

            <tr>
                <td>First Name: </td>
                <td><?php echo $res['fname'] ?></td>
            </tr>

            <tr>
                <td>Last Name: </td>
                <td><?php echo $res['lname'] ?></td>
            </tr>

            <tr>
                <td>Email: </td>
                <td><?php echo $res['email'] ?></td>
            </tr>

            <tr>
                <td>Phone: </td>
                <td><?php echo $res['phone'] ?></td>
            </tr>

            <tr>
                <td>House No: </td>
                <td><?php echo $res['house'] ?></td>
            </tr>

            <tr>
                <td>Road: </td>
                <td><?php echo $res['road'] ?></td>
            </tr>

            <tr>
                <td>Block: </td>
                <td><?php echo $res['block'] ?></td>
            </tr>

            <tr>
                <td>Division: </td>
                <td><?php echo $res['division'] ?></td>
            </tr>

            <tr>
                <td>District: </td>
                <td><?php echo $res['district'] ?></td>
            </tr>

            <tr>
                <td>Gender: </td>
                <td><?php echo $res['gender'] ?></td>
            </tr>

            <tr>
                <td>Birth Info: </td>
                <td><?php echo $res['birth'] ?></td>
            </tr>

            <tr>
                <td>Account Type: </td>
                <td><?php echo $res['acc_type'] ?></td>
            </tr>

            <tr>
                <td>Transaction Limit: </td>
                <td><?php echo $res['tran_limit'] ?></td>
            </tr>

            <tr>
                <td>Withdraw Limit: </td>
                <td><?php echo $res['with_limit'] ?></td>
            </tr>
            
            <tr>
                <td>Father Name: </td>
                <td><?php echo $res['father_name'] ?></td>
            </tr>

            <tr>
                <td>Father NID: </td>
                <td><?php echo $res['father_nid'] ?></td>
            </tr>

            <tr>
                <td>Father Address: </td>
                <td><?php echo $res['father_addr'] ?></td>
            </tr>

            <tr>
                <td>Father Occupation: </td>
                <td><?php echo $res['father_occu'] ?></td>
            </tr>

            <tr>
                <td>Mother Name: </td>
                <td><?php echo $res['mother_name'] ?></td>
            </tr>

            <tr>
                <td>Mother NID: </td>
                <td><?php echo $res['mother_nid'] ?></td>
            </tr>

            <tr>
                <td>Mother Address: </td>
                <td><?php echo $res['mother_addr'] ?></td>
            </tr>

            <tr>
                <td>Mother Occupation: </td>
                <td><?php echo $res['mother_occu'] ?></td>
            </tr>

            <tr>
                <td>Nominee First Name: </td>
                <td><?php echo $res['n_first_name'] ?></td>
            </tr>

            <tr>
                <td>Nominee Last Name: </td>
                <td><?php echo $res['n_last_name'] ?></td>
            </tr>

            <tr>
                <td>Nominee NID: </td>
                <td><?php echo $res['nominee_nid'] ?></td>
            </tr>

            <tr>
                <td>Nominee Father Name: </td>
                <td><?php echo $res['n_father_name'] ?></td>
            </tr>

            <tr>
                <td>Nominee Father NID: </td>
                <td><?php echo $res['n_father_nid'] ?></td>
            </tr>

            <tr>
                <td>Nominee Mother Name: </td>
                <td><?php echo $res['n_mother_name'] ?></td>
            </tr>

            <tr>
                <td>Nominee Mother NID: </td>
                <td><?php echo $res['n_mother_nid'] ?></td>
            </tr>

            <tr>
                <td>Nominee Occupation: </td>
                <td><?php echo $res['n_occu'] ?></td>
            </tr>

            <tr>
                <form action="" method="post">
                    <td><input name="ap" class="btn pass" type="submit" value="Approve"></td>
                    <td><input name="dp" class="btn err" type="submit" value="Disapprove"></td>
                </form>
            </tr>

        </table>
    </div>
</body>
</html>