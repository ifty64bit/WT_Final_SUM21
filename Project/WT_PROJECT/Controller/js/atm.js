var atm_err = false;
var w_err = false;
var w2_err = false;
var password_err = false;

function get(id)
{
	return document.getElementById(id);
}

function checkAtm(e)
{
    if (e.value == "")
    {
        atm_err = true;
        get('atm_err').innerHTML = "Value is Empty";
    }
    else if (isNaN(e.value))
    {
        atm_err = true;
        get('atm_err').innerHTML = "Value is not numaric";
    }
    else {
        atm_err = false;
        get('atm_err').innerHTML = "";
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

function checkW2(e)
{
    if (e.value == "")
    {
        w2_err = true;
        get('w2_err').innerHTML = "Value is Empty";
    }
    else if (isNaN(e.value))
    {
        w2_err = true;
        get('w2_err').innerHTML = "Value is not numaric";
    }
    else if (e.value != get('w').value)
    {
        get('w2_err').innerHTML = "Amount dose not match";
    }
    else {
        w2_err = false;
        get('w2_err').innerHTML = "";
    }
    toggle();
}

function checkP(e)
{
    if (e.value == "")
    {
        ppassword_err = true;
        get('p_err').innerHTML = "Value is Empty";
    }
    else {
        password_err = false;
        get('p_err').innerHTML = "";
    }
    toggle();
}

function toggle()
{
    if (atm_err==false && w_err==false && w2_err==false && password_err==false)
    {
        get('btn').disabled = false;
    }
    else {
        get('btn').disabled = true;
    }
}