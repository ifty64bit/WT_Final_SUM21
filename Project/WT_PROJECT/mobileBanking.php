<?php
    require './Controller/mobileBanking.php';
?>
<!DOCTYPE html>
<html> 
    <head>
        <script src="./Controller/js/mobileBanking.js"></script>
        <link rel="stylesheet" href="./css/style.css">
        <title>Send Money</title>
    </head>
    <body>
        <?php
            include('./header.php');
            if($status=="w_p")
            {
                echo "<div class='err'>Wrong Password!!!</div>";
            }
            elseif($status=="e_l")
            {
                echo "<div class='err'>Amount Exceeds Transaction Limit</div>";
            }
            elseif($status=="e_b")
            {
                echo "<div class='err'>Amount Exceeds Balance</div>";
            }
            elseif($status=="sent")
            {
                echo "<div class='pass'>Money Sent Succesfully. GO <a href='./_home.php'>Home</a></div>";
            }
        ?>
        <div class="form_container">
            <form action="" method="post"> 
                <table align="center" >
                    <tr> 
                        <td>Phone Number:</td> 
                        <td><input onfocusout='checkPh(this)' type="text" name="p_number" id="ph" value="<?php echo $p_number ?>"></td>
                        <td><?php echo $p_number_error ?></td>
                    </tr>

                    <tr>
						<td></td>
						<td colspan="2" id="ph_err"></td>
					</tr>

                    <tr> 
                        <td>Enter Phone Number Again:</td> 
                        <td><input onfocusout='checkPh2(this)' type="text" name="p_number2" value="<?php echo $p_number2 ?>"></td>
                        <td><?php echo $p_number2_error ?></td>
                    </tr>

                    <tr>
						<td></td>
						<td colspan="2" id="ph2_err"></td>
					</tr>

                    <tr>
                        <td>Transaction Amount:</td> 
                        <td><input onfocusout='checkT(this)' type="text" name="transc_amount" value="<?php echo $transc_amount ?>" ></td>
                        <td><?php echo $transc_amount_error ?></td>
                    </tr>

                    <tr>
						<td></td>
						<td colspan="2" id="w_err"></td>
					</tr>

                    <tr>
                        <td>Password:</td> 
                        <td><input onfocusout='checkP(this)' type="Password" name="password" value="<?php echo $password ?>"></td>
                        <td><?php echo $password_error ?></td> 
                    </tr>

                    <tr>
						<td></td>
						<td colspan="2" id="p_err"></td>
					</tr>

                    <tr> 
                        <td> 
                            <input class="btn" id="btn" name="m_banking" type="submit" value="Cash Out">
                        </td> 
                    </tr> 
                </table>
            </form>
        </div>
    </body>
</html>