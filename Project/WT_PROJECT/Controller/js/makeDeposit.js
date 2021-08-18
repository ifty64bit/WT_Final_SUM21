var card_err = false;
var cvv_err = false;
var exp_err = false;
var am_err = false;

function get(id)
{
	return document.getElementById(id);
}

function checkCvv(e)
{
    if (e.value == "")
    {
        cvv_err = true;
        get('cvv_err').innerHTML = "Value is Empty";
    }
    else if (isNaN(e.value))
    {
        cvv_err = true;
        get('cvv_err').innerHTML = "Value is not numaric";
    }
    else {
        cvv_err = false;
        get('cvv_err').innerHTML = "";
    }
    toggle();
}

function checkCard(e)
{
    if (e.value == "")
    {
        card_err = true;
        get('card_err').innerHTML = "Value is Empty";
    }
    else if (isNaN(e.value))
    {
        card_err = true;
        get('card_err').innerHTML = "Value is not numaric";
    }
    else {
        card_err = false;
        get('card_err').innerHTML = "";
    }
    toggle();
}

function checkExp(e)
{
    if (e.value == "")
    {
        exp_err = true;
        get('exp_err').innerHTML = "Value is Empty";
    }
    
    else {
        exp_err = false;
        get('exp_err').innerHTML = "";
    }
    toggle();
}

function checkAm(e)
{
    if (e.value == "")
    {
        am_err = true;
        get('am_err').innerHTML = "Value is Empty";
    }
    else if (isNaN(e.value))
    {
        am_err = true;
        get('am_err').innerHTML = "Value is not numaric";
    }
    else {
        am_err = false;
        get('am_err').innerHTML = "";
    }
    toggle();
}

function toggle()
{
    if (card_err==false && cvv_err==false && exp_err==false && am_err==false)
    {
        get('btn').disabled = false;
    }
    else {
        get('btn').disabled = true;
    }
}