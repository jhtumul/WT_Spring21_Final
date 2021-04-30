<?php 
// require_once "CONTROLLER/UserController.php";
require_once "CONTROLLER/AppointmentController.php";
$categories = getAllDoctorsFromAC();
?>
<html>
    <head>
        <link rel="stylesheet" href="styles/basicLayout.css">
    </head>
    <body>
        <div class=""></div>
        <div class="login-div" align="center">
            <table>
                <tr>
                    <td colspan="2" align="center"><h1 style="font-family: cambria; font-size: 20px">Appoinment Form</h1></td>
                </tr>
            </table>
            <form action=""  method="POST">
            <table align="center">
                <tr>
                    <td colspan="2"><input type="text" name="name" id="name" value="<?php echo $_SESSION["name"];?>" placeholder="Enter Name" class="my-font my-textfield">
                    <br><span class="err-msg"><?php echo $err_name;?></span><span id="err_name"></span></td>
                    <td></td>
                </tr>
                
                <tr>
                <td colspan="2">
                    <select name="doctor_name" class="my-font my-textfield">
                        <option selected disabled>Select Doctor</option>
                        <?php
                            foreach($categories as $category)
                            {
                                echo "<option>".$category["name"]."</option>";
                            }
                        ?>
                    </select>
                    <br><span class="err-msg"><?php echo $err_doctor_name;?></span></td>
                    <td></td>
                </tr>

                <tr>
                    <td colspan="2"><input type="text" name="timeslot" value="<?php echo $timeslot;?>" placeholder="Enter time slot" class="my-font my-textfield">
                    <br><span class="err-msg"></td>
                    <td></td>
                </tr>

                <tr>
                    <td colspan="2"><input type="submit" name="confirm" id="" value="Confirm" class="btn-mine"></td>
                    <td></td>
                </tr>
            </table>
            <a href="index.php">Go To HOME</a>
            </form>
        </div>
    </body>
    <div class="footer"></div>
</html>

        