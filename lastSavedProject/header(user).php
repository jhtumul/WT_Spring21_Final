<!-- Header(user) starts -->
<?php
    session_start();
?>
<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="styles/basicLayout.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <header class="header">
            <ul class="plain-bullet">
                <?php
                    if(isset($_SESSION["user"]) && $_SESSION["type"] == "user")
                    {
                        include_once "loggedInButton.php";
                    }
                    else
                    {
                        include_once "loggedOutButton.php";
                    }
                ?>
                <li><a href="index.php" class="left"><img src="images/home.png" width="20" height="20" alt="HOME"></a></li>
                <li>
                    <form method="post">
                    <input type="text" placeholder="Serach.." class=""><button class="button">Search</button>
                    </form>
                </li>
            </ul>
        </header>
        <div class="topnav" align="center">
            <ul class="plain-bullet">
                <li><a href="#">LAPTOP</a></li>
                <li><a href="#">DESKTOP</a></li>
                <li><a href="#">ALL IN ONE</a></li>
                <li><a href="#">MONITOR</a></li>
                <li><a href="#">SERVER</a></li>
                <li><a href="#">WORKSTATION</a></li>
                <li><a href="#">PRINTERS</a></li>
                <li><a href="#">PHOTOCOPIER</a></li>
                <li><a href="#">ACCESSORIES</a></li>
                
            </ul>
        </div>
        <!-- Header(user) starts -->

