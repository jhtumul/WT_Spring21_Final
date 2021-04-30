
function get(id)
{
    return document.getElementById(id);
}
function validate()
{
    refresh();
    var hasError=false;
    var name = get('name');
    var uname = get('username');
    var pass = get('password')
    var conpass = get('conpassword');
    var email = get('email')
    var phone = get('phoneno');
    var type = get('type');

    //Name Validation
    if(name.value=="")
    {
        get('err_name').innerHTML="*Name Required*";
        get('err_name').style.color="red";
        hasError = true;
    }

    //Username Validation
    if(uname.value=="")
    {
        //get('username').focus();
        //get('username').style.border="1px solid red";
        get('err_username').innerHTML="*Username Required*";
        get('err_username').style.color="red";
        hasError = true;
    }
    else if(uname.value.length<6)
    {
        get('err_username').innerHTML="*Username must be 6 chars long*";
        get('err_username').style.color="red";
        hasError = true;
    }
    else if(uname.value.includes(" "))
    {
        get('err_username').innerHTML="*Username can't contain whitespaces*";
        get('err_username').style.color="red";
        hasError = true;
    }

    //Email Validation
    if(email.value == '')
    {
        get('err_email').innerHTML="*Email Required*";
        get('err_email').style.color="red";
        hasError = true;
    }
    else if(!email.value.includes("@"))
    {
        get('err_email').innerHTML="*@ sign required*";
        get('err_email').style.color="red";
        hasError = true;
    }
    else if(email.value.includes(" "))
    {
        get('err_email').innerHTML="*Username can't contain whitespaces*";
        get('err_email').style.color="red";
        hasError = true;
    }
    else if(!email.value.includes(".",email.value.indexOf("@")))
    {
        get('err_email').innerHTML="*dot(.) required after @*";
        get('err_email').style.color="red";
        hasError = true;
    }

    //Phone Number Validation
    if(phone.value == "")
    {
        get('err_phoneno').innerHTML="*Phone Number Required*";
        get('err_phoneno').style.color="red";
        hasError = true;
    }
    else if(isNaN(phone.value))
    {
        get('err_phoneno').innerHTML="*Enter only Numeric Values*";
        get('err_phoneno').style.color="red";
        hasError = true;
    }


    return !hasError;

}

function refresh()
{
get('err_name').innerHTML="";
get('err_username').innerHTML="";
get('err_password').innerHTML="";
get('err_conpassword').innerHTML="";
get('err_email').innerHTML="";
get('err_phoneno').innerHTML="";
}

function formSubmission(hasError)
{
    // if(!hasError)
    // {
    //     alert('Form Submission Complete through JS Validation');
    // }
    alert('JS Connection Enabled!');
}

//Check User For AJAX
function checkUsername(uname)
{
    //alert(uname.value);
    var name = uname.value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function()
    {
        if(this.readyState == 4 && this.status == 200)
        {
            var rs = this.responseText;
            if(rs == "true")
            {
                get('err_username').innerHTML = "";
            }
            else
            {
                get('err_username').innerHTML = "[username already taken]";
                get('err_username').style.color="blue";
            }
        }
    }
    xhttp.open("GET","checkUser.php?uname="+name,true);
    xhttp.send();
}