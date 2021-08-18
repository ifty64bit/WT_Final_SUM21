<?php
    require './Controller/requestLoan.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="./Controller/js/requestLoan.js"></script>
        <link rel="stylesheet" href="./css/style.css">
        <title>Request Cheque Book</title>
    </head>
    <body>
        <?Php 
            require('./header.php');
            if($staus=="sent")
            {
                echo "<div class='pass'>Request Sent</div>";
            }
            
        ?>
        <div class="form_container">
            <form action="" method="post">
                <p>Amount</p>
                <input onfocusout="checkA(this)" type="text" name="amount" id="">
                <div id="a_err"></div>
                <input class="pass btn" id='btn' style="width: 500px; display:block; margin: 50px auto" name="apply_loan" type="submit" value="Apply for A Personal Loan">
            </form>
        </div>
        <div class="form_container">
            <?php
                if(empty($res))
                {
                    echo "You Dont Have Any Loan Record";
                }
                else{
                    echo "<table class='tab' style='width: 100%;'>";
                    echo "<tr>";
                    echo "<th>Loan Type</th>";
                    echo "<th>Issued By</th>";
                    echo "<th>Amount</th>";
                    echo "<th>Time</th>";
                    echo "</tr>";
                    foreach($res as $r)
                    {
                        echo "<tr>";
                        echo "<td>",$r['type'],"</td>";
                        echo "<td>",$r['issued_by'],"</td>";
                        echo "<td>",$r['amount'],"</td>";
                        echo "<td>",$r['t'],"</td>";
                        echo "</tr>";
                    }
                }
            ?>
        </div>
    </body>
</html>