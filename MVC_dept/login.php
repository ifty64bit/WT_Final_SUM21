<?php include('./Controller/login.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div>
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
                        <input type="text" name="pass">
                        <p><?php echo $pass_err ?></p>
                    </div>
                    <input type="submit" name="login" value="Login">
                </div>
            </form>
        </div>
    </div>
</body>
</html>