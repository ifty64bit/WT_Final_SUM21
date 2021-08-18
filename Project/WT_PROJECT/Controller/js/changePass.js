var op_err = false;
var p_err = false;
var p2_err = false;

function get(id)
{
	return document.getElementById(id);
}

function checkOP(e)
{
    if (e.value == "")
    {
        op_err = true;
        get('op_err').innerHTML = "Value is Empty";
    }
    else if (e.value.length < 6)
    {
        op_err = true;
        get('op_err').innerHTML = "Password length is less then 6";
    }
    else {
        op_err = false;
        get('op_err').innerHTML = "";
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
    else if (e.value.length < 6)
    {
        p_err = true;
        get('p_err').innerHTML = "Password length is less then 6";
    }
    else {
        p_err = false;
        get('p_err').innerHTML = "";
    }
    toggle()
}

function checkP2(e)
{
    if (e.value == "")
    {
        p2_err = true;
        get('p2_err').innerHTML = "Value is Empty";
    }
    else if (e.value.length < 6)
    {
        p2_err = true;
        get('p2_err').innerHTML = "Password length is less then 6";
    }
    else if (e.value != get('p').value)
    {
        p2_err = true;
        get('p2_err').innerHTML = "Password Dose not match";
    }
    else {
        p2_err = false;
        get('p2_err').innerHTML = "";
    }
    toggle()
}

function toggle()
{
    if (op_err==false && p_err==false && p2_err==false)
    {
        get('btn').disabled = false;
    }
    else {
        get('btn').disabled = true;
    }
}
