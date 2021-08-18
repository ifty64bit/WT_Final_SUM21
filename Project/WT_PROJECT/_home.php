<?php
    session_start();
    if(!isset($_SESSION['id']))
    {
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
</html>
<html>
    <head>
        <link rel="stylesheet" href="./css/style.css">
        <title>Home</title>
    </head>
    <body>
        <?php
            include('./header.php');
            if($_SESSION['status']=='Pending')
            {
                echo "<div class='wrn'>Please Wait While Our Employee Verify Your Documents</div>";
                
            }
        ?>

        <div class="home_container">

            <?php
                echo "<a href=",$_SESSION['status']=='Pending'?'':'./makeDeposit.php',">";
                echo "<div class='card ",$_SESSION['status']=='Pending'?'gray':'',"'>";
                echo    "Create Deposit";
                echo "</div>";
                echo "</a>";
            ?>
            
            
            <a href="<?php echo $_SESSION['status']=='Pending'?'':'./Transaction.php' ?>">
                <div class="card <?php echo $_SESSION['status']=='Pending'?'gray':'' ?>">
                    Transfer Money
                </div>
            </a>

            <a href="<?php echo $_SESSION['status']=='Pending'?'':'./atm.php' ?>">
                <div class="card <?php echo $_SESSION['status']=='Pending'?'gray':'' ?>">
                    Withdraw from ATM
                </div>
            </a>

            <a href="<?php echo $_SESSION['status']=='Pending'?'':'./mobileBanking.php' ?>">
                <div class="card <?php echo $_SESSION['status']=='Pending'?'gray':'' ?>">
                    Send Money to Monile
                </div>
            </a>

            <a href="<?php echo $_SESSION['status']=='Pending'?'':'./requestLoan.php' ?>">
                <div class="card <?php echo $_SESSION['status']=='Pending'?'gray':'' ?>">
                    Apply For Loan
                </div>
            </a>

            <a href="<?php echo $_SESSION['status']=='Pending'?'':'./requestCheque.php' ?>">
                <div class="card <?php echo $_SESSION['status']=='Pending'?'gray':'' ?>">
                    Request Cheque
                </div>
            </a>

            <a href="./accDetails.php">
                <div class="card">
                    Account Details
                </div>
            </a>

            <a href="./transactionHistory.php">
                <div class="card">
                    Transaction History
                </div>
            </a>

            <a href="./editAddressInfo.php">
                <div class="card">
                    Change Address
                </div>
            </a>
            <a href="./editFamilyInfo.php">
                <div class="card">
                    Change Family Information
                </div>
            </a>

            <a href="./passwordchange.php">
                <div class="card">
                    Change Password
                </div>
            </a>
            
        </div>
    </body>
</html>
