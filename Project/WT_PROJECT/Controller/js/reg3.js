var f_err = false;
var nid_err = false;
var addr_err = false;

function get(id)
{
	return document.getElementById(id);
}

function checkF(e)
{
    if (e.value == "")
    {
        f_err = true;
        get('f_err').innerHTML = "Value is Empty";
    }
    else {
        f_err = false;
        get('f_err').innerHTML = "";
    }
    toggle();
}

function checkNid(e)
{
    if (e.value == "")
    {
        nid_err = true;
        get('nid_err').innerHTML = "Value is Empty";
    }
    else if (isNaN(e.value))
    {
        nid_err = true;
        get('nid_err').innerHTML = "Value is not numaric";
    }
    else {
        nid_err = false;
        get('nid_err').innerHTML = "";
    }
    toggle();
}

function checkA(e)
{
    if (e.value == "")
    {
        addr_err = true;
        get('addr_err').innerHTML = "Value is Empty";
    }
    else {
        addr_err = false;
        get('addr_err').innerHTML = "";
    }
    toggle();
}

function toggle()
{
    if (f_err==false && nid_err==false && addr_err==false)
    {
        get('sub3').disabled = false;
    }
    else {
        get('sub3').disabled = true;
    }
}