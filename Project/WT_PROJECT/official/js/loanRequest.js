function get(id)
{
    return document.getElementById(id);
}
function runAction(id,accNumber,user,amount,grant)
{
    var xhr=new XMLHttpRequest();
    if(grant)
    {
        var url="../Controller/ajax.php?grant_loan=true&id="+id+"&acc="+accNumber+"&user="+user+"&amount="+amount;
        xhr.onreadystatechange=function(){
            if(this.readyState==4 && this.status==200)
            {
                if(this.responseText=="pass")
                {
                    get('grant').innerText="Approved";
                        }
                        else{
                            get('grant').innerText=this.responseText;
                        }
                        }
                    }
                }
            else if(!grant)
            {
                var url="../Controller/ajax.php?grant_loan=false&id="+id+"&acc="+accNumber+"&user="+user;
                console.log(url);
                xhr.onreadystatechange=function(){
                    if(this.readyState==4 && this.status==200)
                    {
                        if(this.responseText=="pass")
                        {
                            get('decline').innerText="Declined";
                        }
                        else{
                            get('decline').innerText=this.responseText;
                        }
                    }
                }
            }
        xhr.open("GET", url,true);
                
        xhr.send();
}