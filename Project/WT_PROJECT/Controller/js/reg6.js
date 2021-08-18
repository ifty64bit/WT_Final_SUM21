var t_err = false;
var w_err = false;


function get(id)
{
	return document.getElementById(id);
}

function checkT(e)
{
    if (e.value == "")
    {
        t_err = true;
        get('t_err').innerHTML = "Value is Empty";
    }
    else if (isNaN(e.value))
    {
        t_err = true;
        get('t_err').innerHTML = "Value is not numaric";
    }
    else {
        t_err = false;
        get('t_err').innerHTML = "";
    }
    toggle();
}
function checkW(e)
{
    if (e.value == "")
    {
        w_err = true;
        get('w_err').innerHTML = "Value is Empty";
    }
    else if (isNaN(e.value))
    {
        w_err = true;
        get('w_err').innerHTML = "Value is not numaric";
    }
    else {
        w_err = false;
        get('w_err').innerHTML = "";
    }
    toggle();
}

function toggle()
{
    if (t_err==false && w_err==false )
    {
        get('sub6').disabled = false;
    }
    else {
        get('sub6').disabled = true;
    }
}