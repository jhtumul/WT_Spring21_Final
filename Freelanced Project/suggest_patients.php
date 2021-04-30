<?php
    require_once "CONTROLLER/AppointmentController.php";
    include_once "doctor_header.php";
    $id = $_GET["id"];
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
                    <td colspan="2" align="center"><h1 style="font-family: cambria; font-size: 20px">Suggest</h1></td>
                </tr>
            </table>
            <form action=""  method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table align="center">
                <tr>
                    <td colspan="2"><input type="text" name="suggest" id="suggest" value="<?php echo $suggest;?>" placeholder="Enter Suggestion" class="my-font my-textfield">
                    <br><span class="err-msg"><?php echo $err_suggest;?></span><span id="err_name"></span></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="suggest_patient" id="" value="Suggest" class="btn-mine"></td>
                    <td></td>
                </tr>
            </table>
            </form>
        </div>
    </body>
    <div class="admin_footer"></div>
</html>

        