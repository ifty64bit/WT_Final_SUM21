var n_f_err = false;
var n_l_err = false;
var nid_err = false;
var n_father_err = false;
var n_father_nid_err = false;
var n_mother_err = false;
var n_mother_nid_err = false;
var n_addr_err = false;
var phone_err = false;

function get(id)
{
	return document.getElementById(id);
}

function checkFirstName(e)
{
    if (e.value == "")
    {
        n_f_err = true;
        get('n_f_err').innerHTML = "Value is Empty";
    }
    else {
        m_err = false;
        get('n_f_err').innerHTML = "";
    }
    toggle();
}

function checkLastName(e)
{
    if (e.value == "")
    {
        n_l_err = true;
        get('n_l_err').innerHTML = "Value is Empty";
    }
    else {
        n_l_err = false;
        get('n_l_err').innerHTML = "";
    }
    toggle();
}

function checkNid(e)
{
    if (e.value == "")
    {
        nid_err = true;
        get('n_nid_err').innerHTML = "Value is Empty";
    }
    else if (isNaN(e.value))
    {
        nid_err = true;
        get('n_nid_err').innerHTML = "Value is not numaric";
    }
    else {
        nid_err = false;
        get('n_nid_err').innerHTML = "";
    }
    toggle();
}

function checkNfather(e)
{
    if (e.value == "")
    {
        n_father_err = true;
        get('n_father_err').innerHTML = "Value is Empty";
    }
    else {
        n_father_err = false;
        get('n_father_err').innerHTML = "";
    }
    toggle();
}

function checkNfatherNid(e)
{
    if (e.value == "")
    {
        n_father_nid_err = true;
        get('n_father_nid').innerHTML = "Value is Empty";
    }
    else if (isNaN(e.value))
    {
        n_father_nid_err = true;
        get('n_father_nid_err').innerHTML = "Value is not numaric";
    }
    else {
        n_father_nid_err = false;
        get('n_father_nid').innerHTML = "";
    }
    toggle();
}

function checkNmother(e)
{
    if (e.value == "")
    {
        n_mother_err = true;
        get('n_mother_err').innerHTML = "Value is Empty";
    }
    else {
        n_mother_err = false;
        get('n_mother_err').innerHTML = "";
    }
    toggle();
}

function checkNmotherNid(e)
{
    if (e.value == "")
    {
        n_mother_nid_err = true;
        get('n_mother_nid').innerHTML = "Value is Empty";
    }
    else if (isNaN(e.value))
    {
        n_mother_nid_err = true;
        get('n_mother_nid_err').innerHTML = "Value is not numaric";
    }
    else {
        n_mother_nid_err = false;
        get('n_mother_nid').innerHTML = "";
    }
    toggle();
}

function checkA(e)
{
    if (e.value == "")
    {
        n_addr_err = true;
        get('n_addr_err').innerHTML = "Value is Empty";
    }
    else {
        n_addr_err = false;
        get('n_addr_err').innerHTML = "";
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
    if (n_f_err==false && n_l_err==false && nid_err==false && n_father_err==false && n_father_nid_err==false && n_mother_err==false && n_mother_nid_err==false && phone_err==false && n_addr_err==false)
    {
        get('sub5').disabled = false;
    }
    else {
        get('sub5').disabled = true;
    }
}
