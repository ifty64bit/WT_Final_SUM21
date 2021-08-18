<?php
    require '../Controller/admin_control.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./js/addNew.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>Add</title>
</head>
<body>
    <?php require './header.php';
        echo isset($staus)?"<div class='pass'>User Added</div>":"";
    ?>

    <div class="form_container">
        <form action="" method="post">
            <h3>User Info</h3>
            <table>
                <tr>
                    <td>Type:</td>
                    <td><select name="type" id="type">
                        <option value="---" selected disabled>----</option>
                        <option value="emp">Employee</option>
                        <option value="admin">Admin</option>
                    </select></td>
                    <td><?php echo $type_err ?></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input onfocusout="checkUn(this)" type="text"  name="username" id="username" value=<?php echo "$username" ?>></td>
                    <td><?php echo $username_err ?></td>
                </tr>

                <tr>
                    <td></td>
                    <td colspan="2" id="un_err"></td>
				</tr>
                <tr>
                    <td>First Name</td>
                    <td><input onfocusout="checkFn(this)" type="text" name="f_name" id="f_name" value=<?php echo "$f_name" ?>></td>
                    <td><?php echo $f_name_err ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2" id="f_n_err"></td>
				</tr>
                <tr>
                    <td>Last Name</td>
                    <td><input onfocusout="checkLn(this)" type="text" name="l_name" id="l_name" value=<?php echo "$l_name" ?>></td>
                    <td><?php echo $l_name_err ?></td>
                </tr>

                <tr>
                    <td></td>
                    <td colspan="2" id="l_n_err"></td>
				</tr>

                <tr>
                    <td>Password</td>
                    <td><input onfocusout="checkP(this)" type="password" name="pass" id="pass" value=<?php echo "$password" ?>></td>
                    <td><?php echo $password_err ?></td>
                </tr>

                <tr>
                    <td></td>
                    <td colspan="2" id="p_err"></td>
				</tr>

                <tr>
                    <td>Salary</td>
                    <td><input onfocusout="checkS(this)" type="text" name="salary" id="salary" value=<?php echo "$salary" ?>></td>
                    <td><?php echo $salary_err ?></td>
                </tr>

                <tr>
                    <td></td>
                    <td colspan="2" id="s_err"></td>
				</tr>

                <tr>
                    <td><input name="addbyadmin" class="btn" id="btn" type="submit" value="Add"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>