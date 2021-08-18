var F_err=false;
var L_err=false;
var E_err=false;
var P_err=false;
var P2_err=false;
function get(id)
{
	return document.getElementById(id);
}

function checkFname(e)
{
    if (e.value == "")
    {
        F_err = true;
        get('f_name_err').innerHTML = "Value is Empty";
    }
    else {
        F_err = false;
        get('f_name_err').innerHTML = "";
    }
    toggle()
}

function checkLname(e)
{
    if (e.value == "")
    {
        L_err = true;
        get('l_name_err').innerHTML = "Value is Empty";
    }
    else {
        L_err = false;
        get('l_name_err').innerHTML = "";
    }
    toggle()
}

function checkE(e)
{
    if (e.value == "")
    {
        E_err = true;
        get('e_err').innerHTML = "Value is Empty";
    }
    else if (!e.value.includes('@'))
    {
        E_err = true;
        get('e_err').innerHTML = "Email in not valid format";
    }
    else if (!e.value.includes('.'))
    {
        E_err = true;
        get('e_err').innerHTML = "Email in not valid format";
    }
    else {
        E_err = false;
        get('e_err').innerHTML = "";
    }
    toggle()
}

function checkP(e)
{
    if (e.value == "")
    {
        P_err = true;
        get('p_err').innerHTML = "Value is Empty";
    }
    else if (e.value.length < 6)
    {
        P_err = true;
        get('p_err').innerHTML = "Password length is less then 6";
    }
    else {
        P_err = false;
        get('p_err').innerHTML = "";
    }
    toggle()
}

function checkP2(e)
{
    if (e.value == "")
    {
        P2_err = true;
        get('p2_err').innerHTML = "Value is Empty";
    }
    else if (e.value.length < 6)
    {
        P2_err = true;
        get('p2_err').innerHTML = "Password length is less then 6";
    }
    else if (e.value != get('pass').value)
    {
        P2_err = true;
        get('p2_err').innerHTML = "Password Dose not match";
    }
    else {
        P2_err = false;
        get('p2_err').innerHTML = "";
    }
    toggle()
}

function toggle()
{
    if (F_err==false && L_err==false && E_err==false && P_err==false && P2_err==false)
    {
        get('sub1').disabled = false;
    }
    else {
        get('sub1').disabled = true;
    }
}
