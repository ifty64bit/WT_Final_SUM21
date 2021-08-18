var acc_name_err = false;
var acc_number_err = false;
var trans_err = false;
var password_err = false;

function get(id)
{
	return document.getElementById(id);
}

function checkName(e)
{
    if (e.value == "")
    {
        acc_name_err = true;
        get('acc_name_err').innerHTML = "Value is Empty";
    }
    
    else {
        acc_name_err = false;
        get('acc_name_err').innerHTML = "";
    }
    toggle();
}

function checkNumber(e)
{
    if (e.value == "")
    {
        acc_number_err = true;
        get('acc_number_err').innerHTML = "Value is Empty";
    }
    else if (isNaN(e.value))
    {
        acc_number_err = true;
        get('acc_number_err').innerHTML = "Value is not numaric";
    }
    else {
        acc_number_err = false;
        get('acc_number_err').innerHTML = "";
    }
    toggle();
}

function checkTrans(e)
{
    if (e.value == "")
    {
        trans_err = true;
        get('trans_err').innerHTML = "Value is Empty";
    }
    else if (isNaN(e.value))
    {
        trans_err = true;
        get('trans_err').innerHTML = "Value is not numaric";
    }
    else {
        trans_err = false;
        get('trans_err').innerHTML = "";
    }
    toggle();
}

function checkP(e)
{
    if (e.value == "")
    {
        password_err = true;
        get('password_err').innerHTML = "Value is Empty";
    }
    
    else {
        password_err = false;
        get('password_err').innerHTML = "";
    }
    toggle();
}

function toggle()
{
    if (acc_name_err==false && acc_number_err==false && trans_err==false && password_err==false)
    {
        get('btn').disabled = false;
    }
    else {
        get('btn').disabled = true;
    }
}
