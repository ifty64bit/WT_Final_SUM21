<?php 
    require '../Controller/admin_control.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Sent Notice</title>
</head>
<body>
    <?php require './header.php';
    if(isset($status))
    {
        echo "<div class='pass'>Sent</div>";
    }
    ?>
    
    <div class="form_container">
        <form action="" method="post">
        <table>
            <tr>
                <td>TO: </td>
                <td>
                    <select name="to" id="">
                        <option value="all">All</option>
                        <option value="user">User</option>
                        <option value="emp">Employee</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><textarea cols="50" rows="30" name="notice"></textarea></td>
            </tr>
            <tr>
                <td colspan="2"><input class="btn" type="submit" name="post_notice" value="Submit"></td>
            </tr>
        </table>
        </form>
    </div>
</body>
</html>