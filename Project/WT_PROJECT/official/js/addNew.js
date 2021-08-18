var un_err = false;
var f_n_err = false;
var l_n_err = false;
var p_err = false;
var s_err = false;

function get(id)
{
	return document.getElementById(id);
}

function checkUn(e)
{
    if (e.value == "")
    {
        un_err = true;
        get('un_err').innerHTML = "Value is Empty";
    }
    
    else {
        un_err = false;
        get('un_err').innerHTML = "";
    }
    toggle();
}

function checkFn(e)
{
    if (e.value == "")
    {
        f_n_err = true;
        get('f_n_err').innerHTML = "Value is Empty";
    }
    
    else {
        f_n_err = false;
        get('f_n_err').innerHTML = "";
    }
    toggle();
}

function checkLn(e)
{
    if (e.value == "")
    {
        l_n_err = true;
        get('l_n_err').innerHTML = "Value is Empty";
    }
    
    else {
        l_n_err = false;
        get('l_n_err').innerHTML = "";
    }
    toggle();
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
    toggle();
}

function checkS(e)
{
    if (e.value == "")
    {
        s_err = true;
        get('s_err').innerHTML = "Value is Empty";
    }
    else if (isNaN(e.value))
    {
        s_err = true;
        get('s_err').innerHTML = "Value is not numaric";
    }
    else {
        s_err = false;
        get('s_err').innerHTML = "";
    }
    toggle();
}

function toggle()
{
    if (un_err==false && f_n_err==false && l_n_err==false && p_err==false && s_err==false)
    {
        get('btn').disabled = false;
    }
    else {
        get('btn').disabled = true;
    }
}