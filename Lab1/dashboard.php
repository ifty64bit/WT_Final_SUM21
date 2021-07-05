<?php
    #session_start() 
    if(!isset($_COOKIE['loggeduser']))
    {
        header("Location: login.php");
    }
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
    <h1>Welcome <?php echo $_COOKIE['loggeduser'] ?></h1>
    <table>
        <tr>
            <td>Add Something</td>
            <td>Add Something</td>
        </tr>
    </table>

</body>
</html>