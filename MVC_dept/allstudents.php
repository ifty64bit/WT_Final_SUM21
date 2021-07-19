<?php
    include('./Model/db_config.php');
    $list=get("SELECT * FROM student");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Students</title>
</head>
<body>
    <?php include('./header.php') ?>
    <div>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Date of Birth</th>
                    <th>Credit</th>
                    <th>CGPA</th>
                </tr>
            </thead>
            <?Php
                foreach($list as $l)
                {
                    echo "<tr>
                            <td>".$l['id']."</td>
                            <td>".$l['name']."</td>
                            <td>".$l['dob']."</td>
                            <td>".$l['credit']."</td>
                            <td>".$l['cgpa']."</td>
                            <td><a href='./editStudent.php?id=".$l['id']."'>Edit</a></td>
                        </tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>