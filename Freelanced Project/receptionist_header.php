<?php
	session_start();
	if($_SESSION["type"] != "receptionist")
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
			<a href="dashboard(receptionist).php" class="btn btn-primary">Dashboard</a>
			<a href="receptionist_P_Payment.php" class="btn btn-success">Patient Payment</a>
			<a href="receptionist_allworkers.php" class="btn btn-warning">All Workers</a>
            <a href="editAccount(receptionist).php" class="btn btn-info">Edit Account</a>
			<a href="logout.php" class="btn btn-danger">Logout</a>		
		</div>
		<!--menu ends-->