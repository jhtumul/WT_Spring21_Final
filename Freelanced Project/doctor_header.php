<?php
	session_start();
	if($_SESSION["type"] != "doctor")
	{
		header("Location: index.php");
	}            
?>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/mystyle.css">
</head>
<body>
    <div class="text-center">
        <h1 class="header">Doctor</h1>
    </div>
    <!--menu starts-->
    <div class="text-center">
        <a href="dashboard(doctor).php" class="btn btn-primary">Dashboard</a>
        <a href="doctorAppointments.php" class="btn btn-success">Appointments</a>
        <a href="D_allPatients.php" class="btn btn-danger">All Patients</a>
        <a href="PendingDoctorAppointments.php" class="btn btn-success">Pending Appointments</a>
        <a href="DoctorTimeslots.php" class="btn btn-warning">TimeSlots</a>
        <a href="doctor_addtimeslot.php" class="btn btn-warning">Add TimeSlots</a>
        <a href="editAccount(doctor).php" class="btn btn-info">Edit Account</a>
        <a href="logout.php" class="btn btn-danger">Logout</a>
        
    </div>
    <!--menu ends-->