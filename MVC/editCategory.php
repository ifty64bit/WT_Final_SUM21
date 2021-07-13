<?php
    include('./Controller/category.php');
    $id=$_GET['id'];
    $c=getCategory($id);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
</head>
<body>
<div>
    <form action="" method="post">
        <div>
            <input type="text" name="name" id="" value="<?php echo $c['category'] ?>">
            <input type="hidden" name="id" value="<?php echo $id ?>">
        </div>
        <div>
                <input type="submit" name="edit_category" value="Save">
        </div>
        </form>
    </div>
</body>
</html>