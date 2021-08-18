<div class="h_container">
    <div>
        <h2>BANK</h2>
    </div>
    <div>
        <ul>
            <a href=<?php echo isset($_SESSION['id'])?"./_home.php":"index.php" ?>><li>Home</li></a>
            <a href="./about.php"><li>About us</li></a>
            <a href="./privacy.php"><li>Privacy Policy</li></a>
            <a href="#"><li>Support</li></a>
        </ul>
    </div>
    <div>
        <?php 
            
                echo isset($_SESSION['id']) ? "<p>".$_SESSION['uname']." <a href='./Controller/logout.php' style='color: #FF6700;'>Logout</a></p>" : "";
        ?>
    </div>
</div>