<?php 
    include('./Controller/registration4.php');
?>

<!DOCTYPE html>
<html> 
    <head>
        <script src="./Controller/js/reg4.js"></script>
        <link rel="stylesheet" href="./css/style.css">
        <title>Sign Up</title>
    </head>
    <body> 
    <?php include("./header.php") ?>
    <div id="err_div"></div>
        <div class="progress">
            <h3>
                <span style="color: #00FF0A;">Step 1 > </span>
                <span style="color: #00FF0A;">Step 2 > </span>
                <span style="color: #00FF0A;">Step 3 > </span>
                <span style="color: #000000;">Step 4 > </span>
                <span>Step 5 > </span>
                <span>Step 6  </span>
            </h3>
        </div>
        <div class="form_container">
            <form action="" method="POST"> 
                <legend><h2>Parent's Info</h2></legend>
                <table align="center">
                    <tr> 
                        <td>Mother's Name:</td> 
                        <td><input onfocusout='checkM(this)' id="m_name" type="text" name="m_name" value="<?php echo $m_name ?>"></td> 
                        <td><?php echo $m_name_error ?></td>
                    </tr>
                    <tr>
						<td></td>
						<td colspan="2" id="m_err"></td>
					</tr>
                    <tr>
                        <td>Mother's NID:</td> 
                        <td><input onfocusout='checkNid(this)' id="m_nid" type="text" name="m_nid" value="<?php echo $m_nid ?>"></td> 
                        <td><?php echo $m_nid_error ?></td>
                    </tr>
                    <tr>
						<td></td>
						<td colspan="2" id="nid_err"></td>
					</tr>
                    <tr>
                        <td>Mother's work  Address:</td> 
                        <td><input onfocusout='checkA(this)' id="m_work_addr" type="text" name="m_work_addr" value="<?php echo $m_work_addr ?>"></td> 
                        <td><?php echo $m_work_addr_error ?></td>
                    </tr>
                    <tr>
						<td></td>
						<td colspan="2" id="addr_err"></td>
					</tr>
                    <tr> 
                        <td>Occupation:</td> 
                        <td>
                            <select name="m_occupation">
                                <option value="----" selected disabled>--SELECT--</option>
                                <option <?php echo $m_occupation=='service'?"selected":"" ?> value="service">Service</option> 
                                <option <?php echo $m_occupation=='business'?"selected":"" ?> value="business">Business</option>
                                <option <?php echo $m_occupation=='teacher'?"selected":"" ?> value="teacher">Teacher</option>
                            </select> 
                        </td> 
                        <td><?php echo $m_occupation_error ?></td>
                    </tr>
                    <tr> 
                        <td></td>
                        <td><input class="btn" id="sub4" name="reg4" type="submit" value="Submit"></td> 
                    </tr> 
                </table>
            </form>
        </div>
    </body>
</html>
  
	