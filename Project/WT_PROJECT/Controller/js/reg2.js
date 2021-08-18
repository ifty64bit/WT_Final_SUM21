var h_err = false;
var r_err = false;
var b_err = false;
var phone_err = false;
function get(id)
{
	return document.getElementById(id);
}

function checkH(e)
{
    if (e.value == "")
    {
        h_err = true;
        get('house_err').innerHTML = "Value is Empty";
    }
    else {
        h_err = false;
        get('house_err').innerHTML = "";
    }
    toggle();
}

function checkR(e)
{
    if (e.value == "")
    {
        r_err = true;
        get('road_err').innerHTML = "Value is Empty";
    }
    else {
        r_err = false;
        get('road_err').innerHTML = "";
    }
    toggle();
}

function checkB(e)
{
    if (e.value == "")
    {
        b_err = true;
        get('block_err').innerHTML = "Value is Empty";
    }
    else {
        b_err = false;
        get('block_err').innerHTML = "";
    }
    toggle();
}

function checkP(e)
{
    if (e.value == "")
    {
        phone_err = true;
        get('phone_err').innerHTML = "Value is Empty";
    }
    else if (isNaN(e.value))
    {
        phone_err = true;
        get('phone_err').innerHTML = "Value is not numaric";
    }
    else
    {
        phone_err = false;
        get('phone_err').innerHTML = "";
    }
    toggle();
}

function toggle()
{
    if (h_err==false && r_err==false && b_err==false && phone_err==false)
    {
        get('sub2').disabled = false;
    }
    else {
        get('sub2').disabled = true;
    }
}