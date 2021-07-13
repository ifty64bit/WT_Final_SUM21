<?php
    include('./Controller/login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="" method="post">
            <div>
                <div>
                    <h3>Username</h3>
                    <input type="text" name="username" value="<?php echo $username ?>">
                    <p><?php echo $username_err ?></p>
                </div>
                <div>
                    <h3>Password</h3>
                    <input type="text" name="pass" value="<?php echo $pass ?>">
                    <p><?php echo $pass_err ?></p>
                </div>
                <div>
                    <input type="submit" name="login" value="Log in">
                </div>
            </div>
        </form>
    </div>
</body>
</html>