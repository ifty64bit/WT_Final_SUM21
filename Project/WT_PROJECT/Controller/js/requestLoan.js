var a_err = false;

function get(id)
{
	return document.getElementById(id);
}

function checkA(e)
{
    if (e.value == "")
    {
        a_err = true;
        get('a_err').innerHTML = "Value is Empty";
    }
    else if (isNaN(e.value))
    {
        a_err = true;
        get('a_err').innerHTML = "Value is not numaric";
    }
    else {
        a_err = false;
        get('a_err').innerHTML = "";
    }
    toggle();
}

function toggle()
{
    if (a_err)
    {
        get('btn').disabled = true;
    }
    else {
        get('btn').disabled = false;
    }
}