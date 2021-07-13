<?php
    include('./Controller/category.php');
    $categories=getAllCategories();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Categories</title>
</head>
<body>
    <div>
        <table>
            <thead>
                <th>SL#</th>
                <th>Name</th>
                <th>Product Count</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                <?php
                    foreach($categories as $c)
                    {
                        echo "<tr>
                            <td>".$c['id']."</td>
                            <td>".$c['category']."</td>
                            <td>100</td>
                            <td><a href='editCategory.php?id=".$c['id']."''>Edit</a></td>
                            <td><a href='#'>Delete</a></td>
                        </tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>