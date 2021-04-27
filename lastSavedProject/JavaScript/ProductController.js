//Check User For AJAX
function suggest(control)
{
    //alert(uname.value);
    var key = control.value;
    if(key =="")
    {
        document.getElementById("suggestion").innerHTML ="";
        return;
    }
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function()
    {
        if(this.readyState == 4 && this.status == 200)
        {
            document.getElementById("suggestion").innerHTML = this.responseText;
        }
    }
    xhttp.open("GET","searchProduct.php?key="+key,true);
    xhttp.send();
} 