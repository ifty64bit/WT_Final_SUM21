<?php
    require './Controller/editFamilyInfo.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Family Information</title>
</head>
<body>
    <?php 
       include("./header.php");
    ?>
    <div class="form_container">
        <form action="" method="post">
            <h2>Family Info</h2>
            <table align="center">
                <tr>
                    <td>Father's Name:</td>
                    <td><input type="text" name="f_name" id="f_name" value="<?php echo $f_name ?>"></td>
                    <td><?php echo $f_name_err ?></td>
                </tr>
                <tr>
                    <td>
                        Father's NID:
                    </td>
                    <td>
                        <input type="text" name="f_nid" id="f_nid" value="<?php echo $f_nid ?>">
                    </td>
                    <td><?php echo $f_nid_err ?></td>
                </tr>
                <tr>
                    <td>
                        Occupation:
                    </td>
                    <td>
                        <input type="text" name="f_occupation" id="f_occupation" value="<?php echo $f_occupation ?>">
                    </td>
                    <td><?php echo $f_occupation_err ?></td>
                </tr>
                <tr>
                    <td>Father Work Address</td>
                    <td><input type="text" name="f_work" id="f_work" value="<?php echo $f_work ?>"></td>
                    <td><?php echo $f_work_err ?></td>
                </tr>
                <tr>
                    <td>Mother's Name:</td>
                    <td><input type="text" name="m_name" id="m_name" value="<?php echo $m_name ?>"></td>
                    <td><?php echo $m_name_err ?></td>
                </tr>
                <tr>
                    <td>
                        Mother's NID:
                    </td>
                    <td>
                        <input type="text" name="m_nid" id="m_nid" value="<?php echo $m_nid ?>">
                    </td>
                    <td><?php echo $m_nid_err ?></td>
                </tr>
                <tr>
                    <td>
                         Occupation:
                    </td>
                    <td>
                        <input type="text" name="m_occupation" id="m_occupation" value="<?php echo $m_occupation ?>">
                    </td>
                    <td><?php echo $m_occupation_err ?></td>
                </tr>
                    <td>Mother's Work Address</td>
                    <td><input type="text" name="m_work" id="m_work" value="<?php echo $m_work ?>"></td>
                    <td><?php echo $m_work_err ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="btn" type="submit" name="sub" value="Save"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>