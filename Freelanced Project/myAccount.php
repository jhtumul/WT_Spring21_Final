<?php 
    session_start();
    if(!isset($_SESSION["user"]))
    {
        header("Location: login.php");
    }
    include_once "Header(user).php";
?>
        <div class="main-content">
            <h2>My Account</h2>
            <span><a href="editAccount.php">Edit Account</a></span><br>
            <span><a href="changePassword.php">Change Password</a></span><br>
            <span><a href="#">Update Address</a></span><br>
            
        </div>
        <div class="main-content">
            <h2>My Medical Info</h2>
            <span><a href="#">My Prescription</a></span><br>
            <span><a href="affiliate.php">Treatment History</a></span><br>
            <span><a href="#">Diagonistic</a></span><br>
            <span><a href="#">Food Suggestions</a></span><br>
        </div>
        <?php include_once "footer.php";?>