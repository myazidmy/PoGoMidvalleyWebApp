<?php

include_once 'includes.php';

	//mysql real escape
	$first = mysqli_real_escape_string($conn, $_POST['first']); //the parameter takes the data from the
	$last = mysqli_real_escape_string($conn, $_POST['last']);	 //form in index.php
	$email = mysqli_real_escape_string($conn, $_POST['email']);


	//here til line to header(); we use prepared statements to secure our databate inserts

	$sql = "INSERT INTO users (user_first, user_last, user_email) 
	VALUES (?, ?, ?);";

	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt,$sql)){
		echo "SQL KYS";
	}else{
		mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email);
		header("Location: ../index.php?signup=success");
		mysqli_stmt_execute($stmt);
		exit();

	}	

	header("Location: ../index.html?signup=fail");


?>