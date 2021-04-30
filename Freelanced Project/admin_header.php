<?php
	session_start();
	if($_SESSION["type"] != "admin")
	{
		header("Location: index.php");
	}
	require_once "CONTROLLER/UserController.php";
                
?>
<html>

	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="styles/mystyle.css">
	</head>
	<body>
		<div class="text-center">
			<h1 class="header">Admin</h1>
		</div>
		<!--menu starts-->
		<div class="text-center">
			<a href="dashboard.php" class="btn btn-primary">Dashboard</a>
			<a href="AllAppointments.php" class="btn btn-success">All Appointments</a>
			<a href="allDoctors.php" class="btn btn-warning">All Doctors</a>
			<a href="pendingDoctors.php" class="btn btn-primary">Pending Doctors</a>
			<a href="allPatients.php" class="btn btn-warning">All Patients</a>
			<a href="pendingPatient.php" class="btn btn-primary">Pending Patients</a>
			<a href="editAccount(admin).php" class="btn btn-info">Edit Account</a>
			<a href="logout.php" class="btn btn-danger">Logout</a>		
		</div>
		<!--menu ends-->