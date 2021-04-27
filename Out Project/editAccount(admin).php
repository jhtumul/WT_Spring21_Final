<?php 
    include_once "admin_header.php";
    if(!isset($_SESSION["user"]))
    {
        header("Location: index.php");
    }
    require_once "CONTROLLER/registrationController.php";
    require_once "CONTROLLER/loginController.php";
    checkUser();
    
?>
<div class="center-login">
<h1 class="text text-center">Eit Profile</h1>
    <form action="" method="POST" class="form-horizontal form-material">
        <table align="center">
            <tr>
                <td colspan="2"><div class="form-group"><input  type="text" name="name" value="<?php echo $_SESSION["name"];?>" placeholder="Enter Name" class="form-control">
                <br><span class="err-msg"><?php echo $err_name;?></span></div></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2"><div class="form-group"><input type="text" name="uname" value="<?php echo $_SESSION["user"];?>" onfocusout="checkUsername(this)" placeholder="Enter Username" class="form-control">
                <br><span class="err-msg"><?php echo $err_uname;?></span></span><span id="err_username"></span></div></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2"><div class="form-group"><input type="text" name="email" value="<?php echo $_SESSION["email"];?>" placeholder="Enter Email" class="form-control">
                <br><span class="err-msg"><?php echo $err_email;?></span></div></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2"><div class="form-group"><input type="text" name="phone" value="<?php echo $_SESSION["phoneNo"];?>" placeholder="Enter Phone Number" class="form-control">
                <br><span class="err-msg"><?php echo $err_number;?></span></div></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="updateDetails" id="" value="UPDATE" class="btn btn-success form-control"></td>
                <td></td>
            </tr>
        </table>
    </form>
</div>
<script src="JavaScript/RegistrationController.js"></script>
<?php include_once "admin_footer.php";?>