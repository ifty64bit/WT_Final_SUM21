<?php require '../Controller/admin_control.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Statistic</title>
</head>
<body>
    <?php require './header.php' ?>
    <div class="form_container">
        <table class="tab">
            <tr>
                <td>Total Admin:</td>
                <td><?php echo $t_ad ?></td>
            </tr>
            <tr>
                <td>Total Employee:</td>
                <td><?php echo $t_emp ?></td>
            </tr>
            <tr>
                <td>Total User</td>
                <td><?php echo $t_u ?></td>
            </tr>
            <tr>
                <td>Total Transation:</td>
                <td><?php echo $t_t ?></td>
            </tr>
        </table>
    </div>
</body>
</html>