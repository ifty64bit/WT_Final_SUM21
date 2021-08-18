<?php
    include('./Controller/Transaction.php');
?>
<!DOCTYPE html>
<html> 
    <head>
        <script src="./Controller/js/transaction.js"></script>
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
            elseif($status=="u_n_f")
            {
                echo "<div class='err'>Reciever Name or Account Number Missmatch</div>";
            }
            elseif($status=="sent")
            {
                echo "<div class='pass'>Money Sent. GO <a href='./_home.php'>Home</a></div>";
            }
        ?>
        <div class="form_container">
            <form action="" method="post">
                <h2>Transfer Money</h2>
                <table align="center" >
                    <tr> 
                        <td>Receiver Name:</td> 
                        <td><input onfocusout="checkName(this)" type="text" name="acc_name" value="<?php echo $acc_name ?>"></td>
                        <td><?php echo $acc_name_error ?></td>
                    </tr>
                    <tr>
						<td></td>
						<td colspan="2" id="acc_name_err"></td>
					</tr>
                    <tr>
                        <td>Accound Number:</td> 
                        <td><input onfocusout="checkNumber(this)" type="text" name="acc_number" value="<?php echo $acc_number ?>"></td> 
                        <td><?php echo $acc_number_error ?></td>
                    </tr>
                    <tr>
						<td></td>
						<td colspan="2" id="acc_number_err"></td>
					</tr>
                    <tr>
                        <td>Transaction Amount:</td> 
                        <td><input onfocusout="checkTrans(this)" type="text" name="transc_amount" value="<?php echo $transc_amount ?>" ></td>
                        <td><?php echo $transc_amount_error ?></td>
                    </tr>
                    <tr>
						<td></td>
						<td colspan="2" id="trans_err"></td>
					</tr>
                    <tr>
                        <td>Password:</td> 
                        <td><input onfocusout="checkP(this)" type="Password" name="password" value="<?php echo $password ?>"></td>
                        <td><?php echo $password_error ?></td> 
                    </tr>

                    <tr>
						<td></td>
						<td colspan="2" id="password_err"></td>
					</tr>

                    <tr> 
                        <td> 
                            <input class="btn" id="btn" name="transaction" type="submit" value="Send Money">
                        </td> 
                    </tr> 
                </table>
            </form>
        </div>
    </body>
</html>