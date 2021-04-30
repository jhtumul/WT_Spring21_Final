<?php
    require_once "MODEL/db_config.php";
//**********************************************************************
//Doctor Block///////////////////////////////////////
    //Delete Doctor
    function deleteDoctor($id)
    {
        $query = "delete from users where id=$id";
        execute($query);
    }
    if(isset($_POST["delete_doctor"]))
    {
        deleteDoctor($_POST['id']);
    }
    //
    function getAllDoctors()
    {
        //$query = "SELECT p.*, c.name as 'c_name' from products p left join categories c on p.category_id = c.id";
        $query = "select * from users where type='doctor'";
        $result = get($query);
        return $result;
    }
    function getDoctor($id)
    {
        $query = "select * from users where id=$id";
        //$query = "SELECT p.*, c.name as 'c_name' from products p left join categories c on p.category_id = c.id where p.id=$id";
        $result = get($query);
        if(count($result) > 0)
        {
            return $result[0]; 
        }
        return false; 
    }
///////////////////////////////////////////////////////

//Pending Doctors Block////////////////////////////////
    //Delete Doctor Patient
    if(isset($_POST["decline_doctor"]))
    {
        deletePatient($_POST['id']);
    }
    //get All Pending Doctor
    function getAllPendingDoctors()
    {
        //$query = "SELECT p.*, c.name as 'c_name' from products p left join categories c on p.category_id = c.id";
        $query = "select * from users where type='nondoctor'";
        $result = get($query);
        return $result;
    }
    //Approve Pending Doctor
    function approveDoctor($id)
    {
        $query = "update users set type='doctor' where id=$id";
        execute($query);
    }
    if(isset($_POST["approve_doctor"]))
    {
        approveDoctor($_POST['id']);
    }
//////////////////////////////////////////////////////////
//**********************************************************************

//**********************************************************************
//Patients Block//////////////////////////////////////////
    //Delete Patients
    function deletePatient($id)
    {
        $query = "delete from users where id=$id";
        execute($query);
    }
    if(isset($_POST["delete_patient"]))
    {
        deletePatient($_POST['id']);
    }
    //get All Products
    function getAllPatients()
    {
        //$query = "SELECT p.*, c.name as 'c_name' from products p left join categories c on p.category_id = c.id";
        $query = "select * from users where type='user'";
        $result = get($query);
        return $result;
    }
    //get specific product
    function getPatient($id)
    {
        $query = "select * from users where id=$id";
        //$query = "SELECT p.*, c.name as 'c_name' from products p left join categories c on p.category_id = c.id where p.id=$id";
        $result = get($query);
        if(count($result) > 0)
        {
            return $result[0]; 
        }
        return false; 
    }
///////////////////////////////////////////////////////////

//Pending Patient Block///////////////////////////////////
    //Delete Pending Patients
    if(isset($_POST["decline_patient"]))
    {
        deletePatient($_POST['id']);
    }//Ends Delete Pending Patients

    //get All Pending Patient
    function getAllPendingPatients()
    {
        //$query = "SELECT p.*, c.name as 'c_name' from products p left join categories c on p.category_id = c.id";
        $query = "select * from users where type='nonuser'";
        $result = get($query);
        return $result;
    }//Ends get All Pending Patient

    //Approve Pending Patients
    function approvePatient($id)
    {
        $query = "update users set type='user' where id=$id";
        execute($query);
    }
    if(isset($_POST["approve_patient"]))
    {
        approvePatient($_POST['id']);
    }//Ends Approve Pending Patients
/////////////////////////////////////////////////////////////
//**********************************************************************

/////////////////////////////////////////////////////////////
    //Search Controller
    if(isset($_POST['search']) || isset($_POST['search_all']))
    {
        if(!empty($_POST['id']))
        {
            $id = $_POST['id'];
            $query = "SELECT * FROM users where name like '%$id%'";
            $results = get($query);
        }
    }
/////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////
    //Search Controller
    if(isset($_POST['search_worker']))
    {
        if(!empty($_POST['id']))
        {
            $id = $_POST['id'];
            $query = "SELECT * FROM users where name like '%$id%'";
            $results = get($query);
        }
    }
/////////////////////////////////////////////////////////////
//Delete Doctor Timeslot
if(isset($_POST["delete_dslot"]))
{
    deletePatient($_POST['id']);
}//Ends Delete Pending Patients

function getAllWorkers()
    {
        //$query = "SELECT p.*, c.name as 'c_name' from products p left join categories c on p.category_id = c.id";
        $query = "select * from users where type='doctor' or type='receptionist' or type='admin'";
        $result = get($query);
        return $result;
    }

?>