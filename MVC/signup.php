<?php
    include('./Controller/signup.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>
<body>
    <div>
        <form action="" method="post">
            <div>
                <h3>Username</h3>
                <input type="text" name="username" value="<?php echo $username ?>">
                <p><?php echo $username_err ?></p>
            </div>
            <div>
                <h3>Password</h3>
                <input type="text" name="pass1" value="<?php echo $pass1 ?>">
                <p><?php echo $pass1_err ?></p>
            </div>
            <div>
                <h3>Password Again</h3>
                <input type="text" name="pass2" value="<?php echo $pass2 ?>">
                <p><?php echo $pass2_err ?></p>
            </div>
            <div>
                <h3>Phone Number</h3>
                <input type="text" name="phone" value="<?php echo $phone ?>">
                <p><?php echo $phone_err ?></p>
            </div>
            <div>
                <h3>Email</h3>
                <input type="text" name="email" value="<?php echo $email ?>">
                <p><?php $email_err ?></p>
            </div>
            <input type="submit" name="signup" value="Sign Up">
        </form>
    </div>
</body>
</html>