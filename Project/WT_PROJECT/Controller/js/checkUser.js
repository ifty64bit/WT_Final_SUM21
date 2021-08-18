function get(id)
{
	return document.getElementById(id);
}
function check(e)
{
	var xhr=new XMLHttpRequest();
    var url = "./Controller/validate.php?uname=" + e.value;
    xhr.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200)
        {
            get("err_msg").innerHTML=this.responseText.trim();
            if(this.responseText.trim()==false)
            {
                get("err_msg").innerHTML="Avalible";
            }
            else{
                get("err_msg").innerHTML="Username Taken";
            }
            
        }
    }
    xhr.open("GET", url,true);
    
    xhr.send();
}

function checkFname(e)
{
    if (e.value == "")
    {
        get("err_msg").innerHTML="Username is Empty";
    }
    else {
        get("err_msg").innerHTML="";
    }
}