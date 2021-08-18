var uname_err=false;
var p_err=false;

function get(id)
{
	return document.getElementById(id);
}

function checkU(e)
{
    if (e.value == "")
    {
        uname_err = true;
        get('uname_err').innerHTML = "Value is Empty";
    }
    else {
        uname_err = false;
        get('uname_err').innerHTML = "";
    }
    toggle()
}

function checkP(e)
{
    if (e.value == "")
    {
        p_err = true;
        get('p_err').innerHTML = "Value is Empty";
    }
    else {
        p_err = false;
        get('p_err').innerHTML = "";
    }
    toggle()
}

function toggle()
{
    if (uname_err==false && p_err==false)
    {
        get('login').disabled = false;
    }
    else {
        get('login').disabled = true;
    }
}
