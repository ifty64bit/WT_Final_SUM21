function get(id)
{
    return document.getElementById(id);
}
function runAction(id)
{
    var c=get(id);
    var username=c.children[0].children[0].value;
    var f_name=c.children[1].children[0].value;
    var l_name=c.children[2].children[0].value;
    var salary=c.children[3].children[0].value;

    var xhr=new XMLHttpRequest();
    var url="../Controller/ajax.php?updateEmp=true&id="+id+"&uname="+username+"&f_name="+f_name+"&l_name="+l_name+"&salary="+salary;
    console.log(url);
    xhr.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200)
        {
            if(this.responseText=="pass")
            {
                console.log("pass");
                c.children[0].children[0].value=username;
                c.children[1].children[0].value=f_name;
                c.children[2].children[0].value=l_name;
                c.children[3].children[0].value=salary;
            }
            else{
                console.log(this.responseText);
            }
        }
    }
    xhr.open("GET", url,true);
    
    xhr.send();
}