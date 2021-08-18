var ph_err = false;
var ph2_err = false;
var w_err = false;
var p_err = false;

function get(id)
{
	return document.getElementById(id);
}

function checkPh(e)
{
    if (e.value == "")
    {
        ph_err = true;
        get('ph_err').innerHTML = "Value is Empty";
    }
    else if (isNaN(e.value))
    {
        ph_err = true;
        get('ph_err').innerHTML = "Value is not numaric";
    }
    else {
        ph_err = false;
        get('ph_err').innerHTML = "";
    }
    toggle();
}

function checkPh2(e)
{
    if (e.value == "")
    {
        ph2_err = true;
        get('ph2_err').innerHTML = "Value is Empty";
    }
    else if (isNaN(e.value))
    {
        ph2_err = true;
        get('ph2_err').innerHTML = "Value is not numaric";
    }
    else {
        ph2_err = false;
        get('ph2_err').innerHTML = "";
    }
    toggle();
}

function checkT(e)
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

function toggle()
{
    if (ph_err==false && ph2_err==false && w_err==false && p_err==false)
    {
        get('btn').disabled = false;
    }
    else {
        get('btn').disabled = true;
    }
}