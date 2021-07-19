<?php
    include('./Controller/addStudent.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
</head>
<body>
    <?php include('./header.php') ?>
    <div><?php echo $status ?></div>
    <div>
        <div>
            <form action="" method="POST">
                <div>
                    <h3>Name</h3>
                    <input type="text" name="name" value="<?php echo $name ?>">
                    <p><?php echo $name_err ?></p>
                </div>
                <div>
                    <h3>ID</h3>
                    <input type="text" name="id" value="<?php echo $id ?>">
                    <p><?php echo $id_err ?></p>
                </div>
                <div>
                    <h3>DOB</h3>
                    <input type="text" name="dob" value="<?php echo $dob ?>">
                    <p><?php echo $dob_err ?></p>
                </div>
                <div>
                    <h3>Credit:</h3>
                    <input type="text" name="credit" value="<?php echo $credit ?>">
                    <p><?php echo $credit_err ?></p>
                </div>
                <div>
                    <h3>CGPA</h3>
                    <input type="text" name="cgpa" value="<?php echo $cgpa ?>">
                    <p><?php echo $cgpa_err ?></p>
                </div>
                <div>
                    <h3>Select Department</h3>
                    <select name="dept">
                        <option value="----" selected disabled>Select</option>
                        <?php 
                            $depts=get("SELECT * FROM department");
                            foreach($depts as $d)
                            {
                                echo "<option ".(($dept==$d['id'])?'selected':''). " value=".$d['id']." > ".$d['name'] ."</option>";
                            }
                        ?>
                    </select>
                    <p><?php echo $dept_err ?></p>
                </div>
                <input type="submit" name="update" value="Update">
            </form>
        </div>
    </div>
</body>
</html>