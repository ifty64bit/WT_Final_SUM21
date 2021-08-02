<?php
    include('./Controller/category.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        function get(id)
        {
            return document.getElementById(id);
        }
        function check(e)
        {
            var xhr=new XMLHttpRequest();
            xhr.open("GET","check_cat.php?category="+e.value,true);
            xhr.onreadystatechange=function(){
                if(this.readyState==4 && this.status==200)
                {
                    get("message").innerHTML=this.responseText.trim();
                    if(this.responseText.trim()==false)
                    {
                        get("message").innerHTML="Avalible";
                    }
                    else{
                        get("message").innerHTML="Category Exists";
                    }
                }
            }
            xhr.send();
        }
    </script>
    <title>Add Category</title>
</head>
<body>
    <div>
        <form action="" method="post">
            <div>
                <input type="text" name="name" id="input" onfocusout="check(this)">
            </div>
            <div id="message"></div>
            <div>
                <input type="submit" name="add_category" value="Add">
            </div>
        </form>
    </div>
</body>
</html>