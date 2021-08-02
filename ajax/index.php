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
        function loadDoc()
        {
            var xhr=new XMLHttpRequest();
            xhr.open("GET","profile.php",true);
            xhr.onreadystatechange=function(){
                if(this.readyState==4 && this.status==200)
                {
                    get("root").innerHTML=this.responseText;
                }
            }
            xhr.send();
        }
    </script>
    <title>Ajax</title>
</head>
<body>
    <button onclick="loadDoc()">Click Me</button>
    <div id="root">

    </div>
</body>
</html>