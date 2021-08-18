function get(id)
{
	return document.getElementById(id);
}

function makedeposit(e)
{
	var msg = "";
	if (e.value == "")
	{
		msg = "Value Empty";
		console.log(msg);
		get('err_div').innerHTML = msg;
	}
}

function regStep4(e)
{
	var err = false;
	var msg = "";
	if (e.value == "")
	{
		err = true;
		if (e.id == 'm_name')
		{
			msg = "<div>Mother name value is Empty</div>";
			get('err_div').innerHTML=msg;
		}
		else if (e.id == 'm_nid')
		{
			msg = msg + "<div>NID Value is Empty</div>";
			get('err_div').innerHTML = msg;
		}
		else if (e.id == 'm_work_addr')
		{
			msg = msg + "<div>Mother Work Address Value is Empty</div>";
			get('err_div').innerHTML = msg;
		}
	}
	else {
		err = false;
		msg = "";
		get('err_div').innerHTML = msg;
	}
	if (isNaN(e.value))
	{
		err = true;
		if (e.id == 'm_nid')
		{
			get('err_div').innerHTML = get('err_div').innerHTML+"<div>NID Value is Not Numaric</div>";
		}
	}
	if (err)
	{
		get('sub4').disabled = true;
	}
	else {
		get('sub4').disabled = true;
	}
}

var reg1_err = false;
function regStep1(e)
{
	var msg = "";
	if (e.value == "")
	{
		reg1_err = true;
		if (e.id == 'f_name')
		{
			msg = "<div>First Name value is Empty</div>";
			get('err_msg').innerHTML=msg;
		}
		else if (e.id == 'l_name')
		{
			msg = msg + "<div>Last Name Value is Empty</div>";
			get('err_msg').innerHTML = msg;
		}
		else if (e.id == 'email')
		{
			msg = msg + "<div>Email Address Value is Empty</div>";
			get('err_msg').innerHTML = msg;
		}
		else if (e.id == 'pass')
		{
			msg = msg + "<div>Password 1 Value is Empty</div>";
			get('err_msg').innerHTML = msg;
		}
		else if (e.id == 'pass2')
		{
			msg = msg + "<div>Password 2 Value is Empty</div>";
			get('err_msg').innerHTML = msg;
		}
	}
	else {
		reg1_err = false;
		msg = "";
		get('err_msg').innerHTML = msg;
	}

	if (e.value.length<6)
	{
		reg1_err = true;
		if (e.id == 'pass1' || e.id=='pass2')
		{
			msg = msg + "<div>Password is less then 6 char</div>";
			get('err_msg').innerHTML = msg;
		}
	}
	else {
		reg1_err = false;
		msg = "";
		get('err_msg').innerHTML = msg;
	}

	if (reg1_err)
	{
		get('sub1').disabled = true;
	}
	else {
		get('sub1').disabled = true;
	}
}

function regStep5(e)
{
	var err = false;
	var msg = "";
	if (e.value == "")
	{
		err = true;
		if (e.id == 'n_f_name')
		{
			msg = "<div>First name value is Empty</div>";
			get('err_div').innerHTML=msg;
		}
		else if (e.id == 'n_last_name')
		{
			msg = msg + "<div>Last Name Value is Empty</div>";
			get('err_div').innerHTML = msg;
		}
		else if (e.id == 'n_nid')
		{
			msg = msg + "<div>NID Value is Empty</div>";
			get('err_div').innerHTML = msg;
		}
		else if (e.id == 'n_father_name')
		{
			msg = msg + "<div>Father name Value is Empty</div>";
			get('err_div').innerHTML = msg;
		}
		else if (e.id == 'n_father_nid')
		{
			msg = msg + "<div>Father NID Value is Empty</div>";
			get('err_div').innerHTML = msg;
		}
		else if (e.id == 'n_mother_name')
		{
			msg = msg + "<div>Mother Name Value is Empty</div>";
			get('err_div').innerHTML = msg;
		}
		else if (e.id == 'n_mother_nid')
		{
			msg = msg + "<div>Mother NID Value is Empty</div>";
			get('err_div').innerHTML = msg;
		}
		else if (e.id == 'n_address')
		{
			msg = msg + "<div>Address Value is Empty</div>";
			get('err_div').innerHTML = msg;
		}
		else if (e.id == 'n_phone')
		{
			msg = msg + "<div>Phone Value is Empty</div>";
			get('err_div').innerHTML = msg;
		}
		else if (e.id == 'n_occupation')
		{
			msg = msg + "<div>Occupation Value is Empty</div>";
			get('err_div').innerHTML = msg;
		}
	}
	else {
		err = false;
		msg = "";
		get('err_div').innerHTML = msg;
	}

	if (isNaN(e.value))
	{
		err = true;
		if (e.id == 'n_nid')
		{
			get('err_div').innerHTML = get('err_div').innerHTML+"<div>NID Value is Not Numaric</div>";
		}
	}
	if (err)
	{
		get('reg5').disabled = true;
	}
	else {
		get('reg5').disabled = true;
	}
}

function regStep3(e)
{
	var err = false;
	var msg = "";
	if (e.value == "")
	{
		err = true;
		if (e.id == 'f_name')
		{
			msg = "<div>Mother name value is Empty</div>";
			get('err_div').innerHTML=msg;
		}
		else if (e.id == 'f_nid')
		{
			msg = msg + "<div>NID Value is Empty</div>";
			get('err_div').innerHTML = msg;
		}
		else if (e.id == 'f_work_addr')
		{
			msg = msg + "<div>Mother Work Address Value is Empty</div>";
			get('err_div').innerHTML = msg;
		}
	}
	else {
		err = false;
		msg = "";
		get('err_div').innerHTML = msg;
	}

	if (isNaN(e.value))
	{
		err = true;
		if (e.id == 'f_nid')
		{
			msg = msg + "<div>NID Value is Not Numaric</div>";
			get('err_div').innerHTML = msg;
		}
	}
	if (err)
	{
		get('reg3').disabled = true;
	}
	else {
		get('reg3').disabled = true;
	}
}