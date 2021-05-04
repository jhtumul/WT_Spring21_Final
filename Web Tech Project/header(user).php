<!-- Header(user) starts -->
<?php
    require_once "CONTROLLER/ProductController.php";
    session_start();
    require_once "CONTROLLER/registrationController.php";
    if(isset($_SESSION["user"]))
    {
        if(checkUsername($_SESSION['user']))
        {
            session_destroy();
        }
    }
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
                    <div align="center" style="background-color: black;">
                        <form method="post" action="SearchedProduct.php">
                            <input type="text" name="item" id="search_text" onkeyup="suggest(this)" placeholder="Serach.." value="<?php $item;?>" class=""><input type="submit" name="search" value="Search" class="button">
                        </form>
                        <!-- <p id="suggestion" align="center">
			
                        </p> -->
                        <ul class="list-group" id="suggestion" style="position: relative; margin-top: -38px; margin-left: 215px"></ul>
                        <br>
                    </div>
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
        <script src="JavaScript/ProductController.js"></script>
        <!-- Header(user) starts -->

