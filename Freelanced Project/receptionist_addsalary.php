<?php include 'receptionist_header.php';
    require_once "CONTROLLER/AppointmentController.php";
    $id = $_GET["id"];
    $worker = getWorker($id);
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
                    <td colspan="2" align="center"><h1 style="font-family: cambria; font-size: 20px">Add Salary</h1></td>
                </tr>
            </table>
            <form action=""  method="POST">
            <input type="hidden" name="id" value="<?php echo $worker["id"]; ?>">
            <table align="center">
                <tr>
                    <td colspan="2"><input type="text" name="salary" id="salary" value="<?php echo $worker["salary"];?>" placeholder="Enter Salary" class="my-font my-textfield">
                    <br><span class="err-msg"><?php echo $err_salary;?></span><span id="err_salary"></span></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="edit_salary" id="" value="Continue" class="btn-mine"></td>
                    <td></td>
                </tr>
            </table>
            </form>
        </div>
    </body>
    <div class="admin_footer"></div>
</html>

        
<?php include 'admin_footer.php';?>