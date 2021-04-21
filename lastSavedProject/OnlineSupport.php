<?php 
    include_once "header(user).php";
    require_once "CONTROLLER/contactUsController.php";
?>

        <div class="main-content">
            <form action="" method="post" onsubmit="return validate()" class=>
                <table>
                    <tr>
                        <th><h3>Online Support Form</h3></th>
                    </tr>
                    <tr>
                        <td><span>Your Name*</span></td>
                        <td><input type="text" name="name" id="name" placeholder="Your Name"><br>
                        <span class="err-msg"><?php echo $err_name;?></span><span id="err_name"></span></td>
                    </tr>
                    <tr>
                        <td><span>Your Email*</span></td>
                        <td><input type="text" name="email" id="email" placeholder="Your Email"><br>
                        <span class="err-msg"><?php echo $err_email;?></span><span id="err_email"></span></td>
                    </tr>
                    <tr>
                        <td><span>Topic</span></td>
                        <td>
                            <select name="topic" id="topic">
                            <option selected>---Please Select---</option>
                                <option>Servicing</option>
                                <option>Warranty</option>
                                <option>Insurance</option>
                            </select><br> <span id="err_topic"></span>
                        </td>
                    </tr>
                    <tr>
                        <td><span>Message*</span></td>
                        <td><textarea name="message" id="message" placeholder="Message"></textarea><br>
                        <span class="err-msg"><?php echo $err_message;?></span><span id="err_message"></span></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="contact_us" onclick="formSubmission()" value="Submit" ></td>
                    </tr>
                </table>
            </form>
        </div>
        <script src="JavaScript/OnlineSupporController.js"></script>
    <?php include_once "footer.php";?>


    