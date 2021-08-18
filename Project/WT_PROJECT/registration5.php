<?php 
    include('./Controller/registration5.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <script src="./Controller/js/reg5.js"></script>
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
            <span style="color: #00FF0A;">Step 4 > </span>
            <span style="color: #000000;">Step 5 > </span>
            <span>Step 6  </span>
        </h3>
    </div>
    <div class="form_container">
        <form action="" method="post">
            <h2>Registration Form for Nominee</h2>
            <table align="center">
                <tr>
                    <td>Nominee's First Name*</td>
                    <td>:<input onfocusout="checkFirstName(this)" type="text" name="n_f_name" id="n_f_name" value=<?php echo "$n_f_name" ?>></td>
                    <td><?php echo $n_f_name_error ?></td>
                </tr>
                <tr>
					<td></td>
					<td colspan="2" id="n_f_err"></td>
				</tr>
                <tr>
                    <td>Nominee's Last Name*</td>
                    <td>:<input onfocusout="checkLastName(this)" type="text" name="n_l_name" id="n_l_name" value=<?php echo "$n_l_name" ?>></td>
                    <td><?php echo $n_l_name_error ?></td>
                </tr>
                <tr>
				    <td></td>
				    <td colspan="2" id="n_l_err"></td>
				</tr>
                <tr>
                    <td>Nominee's NID</td>
                    <td>:<input onfocusout="checkNid(this)" type="text" name="n_nid" id="n_nid" value=<?php echo "$n_nid" ?> ></td>
                    <td><?php echo $n_nid_error ?></td>
                </tr>
                <tr>
				    <td></td>
				    <td colspan="2" id="n_nid_err"></td>
				</tr>
                <tr>
                    <td>Nominee's Father's Name</td>
                    <td>:<input onfocusout="checkNfather(this)" type="text" name="n_father_name" id="n_father_name" value=<?php echo "$n_father_name" ?>></td>
                    <td><?php echo $n_father_name_error ?></td>
                </tr>
                <tr>
				    <td></td>
				    <td colspan="2" id="n_father_err"></td>
				</tr>
                <tr>
                    <td>Nominee's Father's NID</td>
                    <td>:<input onfocusout="checkNfatherNid(this)" type="text" name="n_father_nid" id="n_father_nid" value=<?php echo "$n_father_nid" ?>></td>
                    <td><?php echo $n_father_nid_error ?></td>
                </tr>
                <tr>
				    <td></td>
				    <td colspan="2" id="n_father_nid"></td>
				</tr>
                <tr>
                    <td>Nominee's Mother's Name</td>
                    <td>:<input onfocusout="checkNmother(this)" type="text" name="n_mother_name" id="n_mother_name" value=<?php echo "$n_mother_name" ?>></td>
                    <td><?php echo $n_mother_name_error ?></td>
                </tr>
                <tr>
				    <td></td>
				    <td colspan="2" id="n_mother_err"></td>
				</tr>
                <tr>
                    <td>Nominee's Mother's NID</td>
                    <td>:<input onfocusout="checkNmotherNid(this)" type="text" name="n_mother_nid" id="n_mother_nid" value=<?php echo "$n_mother_nid" ?>></td>
                    <td><?php echo $n_mother_nid_error ?></td>
                </tr>
                <tr>
				    <td></td>
				    <td colspan="2" id="n_mother_nid_err"></td>
				</tr>
                <tr>
                    <td>Nominee's Address</td>
                    <td>:<input onfocusout="checkA(this)" type="text" name="n_address" id="n_address" value=<?php echo "$n_address" ?>></td>
                    <td><?php echo $n_address_error ?></td>
                </tr>
                <tr>
				    <td></td>
				    <td colspan="2" id="n_addr_err"></td>
				</tr>
                <tr>
                    <td>Nominee's Phone Number</td>
                    <td>:<input onfocusout="checkP(this)" type="text" name="n_phone" id="n_phone" value=<?php echo "$n_phone" ?>></td>
                    <td><?php echo $n_phone_error ?></td>
                </tr>
                <tr>
				    <td></td>
				    <td colspan="2" id="phone_err"></td>
				</tr>
                <tr>
                    <td>Nominee's Occupation</td>
                    <td>:<input onfocusout="regStep5(this)" type="text" name="n_occupation" id="n_occupation" value=<?php echo "$n_occupation" ?>></td>
                    <td><?php echo $n_occupation_error ?></td>
                </tr>
                <tr>
				    <td></td>
				    <td colspan="2" id="n_occu_err"></td>
				</tr>
                <tr>
                    <td></td>
                    <td>
                        <input class="btn" id="sub5" name="reg5" type="submit" value="Next">
                    </td>
                </tr>
            </table>
        </form>
    </div>
    </body>
</html>