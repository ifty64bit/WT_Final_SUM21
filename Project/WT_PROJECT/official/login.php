<?php 
    include('../Controller/login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Admin Panel</title>
</head>
<body>
    <?php include("./header.php") ?>
        <div class="form_container">
            <form action="" method="post">
                <h2>Login</h2>
                <table align="center">

                    <tr>
                        <td></td>
                        <td>
                            <select name="type" id="type">
                                <option value="----" selected disabled>Select</option>
                                <option value="employee">Employee</option>
                                <option value="admin">Admin</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>Username:</td>
                        <td><input type="text" name="username"></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="text" name="password"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input class="btn" type="submit" name="login-admin" value="Log in"></td>
                    </tr>
                </table>
            </form>
        </div>  
</body>
</html>