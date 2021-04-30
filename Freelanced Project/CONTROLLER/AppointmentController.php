<?php
    require_once "MODEL/db_config.php";
    $name="";
    $err_name="";
    $doctor_name="";
    $err_doctor_name="";
    $timeslot="";
    $err_timeslot="";
    $dslot="";
    $err_dslot="";
    $suggest="";
    $err_suggest="";
    $salary="";
    $err_salary="";
    session_start();
    $n = $_SESSION["name"];
    $idd=$_SESSION['id'];
/////Make Appointment For User
    if(isset($_POST["confirm"]))
    {
        if(!empty($_POST["name"]))
        {
            $name = $_POST["name"];
        }
        if(isset($_POST["doctor_name"]))
        {
            $doctor_name=$_POST["doctor_name"];
        }
        if(!empty($_POST["timeslot"]))
        {
            $timeslot=$_POST["timeslot"];
        }

        $query = "insert into a values(null,'$name','$doctor_name','$timeslot','pending')";
        execute($query);
    }

/////Add TimeSlot for Doctors
    if(isset($_POST["add_time"]))
    {
        if(!empty($_POST["dslot"]))
        {
            $dslot = $_POST["dslot"];
        }
        else
        {
            $err_dslot="**field required**";
        }

        $query = "UPDATE users set time='$dslot' where id=$idd";
        execute($query);
    }

    /////Edit Worker Salary
    // if(isset($_POST["edit_salary"]))
    // {
    //     if(!empty($_POST["salary"]))
    //     {
    //         $salary = $_POST["salary"];
    //     }
    //     else
    //     {
    //         $err_salary="**field required**";
    //     }
    //     $tid= $_POST["id"];
    //     $query = "UPDATE users set salary='$salary' where id=$idd";
    //     execute($query);
    // }
    ///##########################################################
//Edit Worker Salary
function editSalary($id,$name)
{
    $query="update users set salary='$name' where id=$id";
    execute($query);
    header("Location: receptionist_allworkers.php");
}
if(isset($_POST["edit_salary"]))
{
    editSalary($_POST["id"],$_POST["salary"]);
}//
    //###########################################################

    /////Suggest Patients
    if(isset($_POST["suggest_patient"]))
    {
        if(!empty($_POST["suggest"]))
        {
            $suggest = $_POST["suggest"];
        }
        else
        {
            $err_suggest="**field required**";
        }

        $tid= $_POST["id"];

        $query = "UPDATE users set prescription='$suggest' where id=$tid";
        execute($query);
    }

    /////Suggest Patients
    if(isset($_POST["update_dhistory"]))
    {
        if(!empty($_POST["dhistory"]))
        {
            $suggest = $_POST["dhistory"];
        }
        else
        {
            $err_suggest="**field required**";
        }

        $tid= $_POST["id"];

        $query = "UPDATE users set dhistory='$suggest' where id=$tid";
        execute($query);
    }

    function getMyAppointments()
    {
        global $n;
        //$query = "SELECT p.*, c.name as 'c_name' from products p left join categories c on p.category_id = c.id";
        $query = "select * from a where patient='$n'";
        $result = get($query);
        return $result;
    }

    function getAllAppointments()
    {
        
        //$query = "SELECT p.*, c.name as 'c_name' from products p left join categories c on p.category_id = c.id";
        $query = "select * from a where status='approved'";
        $result = get($query);
        return $result;
    }
    //Search Controller
    if(isset($_POST['search_appo']))
    {
        if(!empty($_POST['id']))
        {
            $id = $_POST['id'];
            $query = "SELECT * FROM a where patient like '%$id%'";
            $results = get($query);
        }
    }

    function getAllDoctorsFromAC()
    {
        //$query = "SELECT p.*, c.name as 'c_name' from products p left join categories c on p.category_id = c.id";
        $query = "select * from users where type='doctor'";
        $result = get($query);
        return $result;
    }
//**********************************************************************
    //Appointments Block//////////////////////////////////////////
    //Delete Appointments
    function deleteAppointment($id)
    {
        global $n;
        $query = "delete from a where doctor='$n' and id=$id";
        execute($query);
    }
    if(isset($_POST["delete_appointment"]))
    {
        deleteAppointment($_POST['id']);
    }

    //Delete Pending Appointments
    if(isset($_POST["decline_appointment"]))
    {
        deleteAppointment($_POST['id']);
    }//Ends Delete Pending Appointments

    //get All Pending Patient
    function getAllPendingAppointments()
    {
        //$query = "SELECT p.*, c.name as 'c_name' from products p left join categories c on p.category_id = c.id";
        $query = "select * from a where status='pending'";
        $result = get($query);
        return $result;
    }//Ends get All Pending Patient

    //Approve appointment
    function approveAppointment($id)
    {   
        global $n;
        $query = "update a set status='approved' where doctor='$n' and id=$id";
        execute($query);
    }
    if(isset($_POST["approve_appointment"]))
    {
        approveAppointment($_POST['id']);
    }//Ends Approve Pending Patients
/////////////////////////////////////////////////////////////

function getWorker($id)
    {
        //$query = "select * from products where id=$id";
        $query = "SELECT * FROM users WHERE id=$id";
        $result = get($query);
        if(count($result) > 0)
        {
            return $result[0]; 
        }
        return false; 
    }
//**********************************************************************
?>