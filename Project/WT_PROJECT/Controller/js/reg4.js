var m_err = false;
var nid_err = false;
var addr_err = false;

function get(id)
{
	return document.getElementById(id);
}

function checkM(e)
{
    if (e.value == "")
    {
        m_err = true;
        get('m_err').innerHTML = "Value is Empty";
    }
    else {
        m_err = false;
        get('m_err').innerHTML = "";
    }
    toggle();
}

function checkNid(e)
{
    if (e.value == "")
    {
        nid_err = true;
        get('nid_err').innerHTML = "Value is Empty";
    }
    else if (isNaN(e.value))
    {
        nid_err = true;
        get('nid_err').innerHTML = "Value is not numaric";
    }
    else {
        nid_err = false;
        get('nid_err').innerHTML = "";
    }
    toggle();
}

function checkA(e)
{
    if (e.value == "")
    {
        addr_err = true;
        get('addr_err').innerHTML = "Value is Empty";
    }
    else {
        addr_err = false;
        get('addr_err').innerHTML = "";
    }
    toggle();
}

function toggle()
{
    if (m_err==false && nid_err==false && addr_err==false)
    {
        get('sub4').disabled = false;
    }
    else {
        get('sub4').disabled = true;
    }
}