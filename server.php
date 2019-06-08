<?php
session_start();
$errors = array();
//Connect the database
$db = mysqli_connect('localhost','root','','registration') OR DIE ("Unable to 
connect to database! Please try again later.");
//if registration button is clicked
error_reporting(0);
if (isset($_POST['register'])){
	$FirstName = mysqli_real_escape_string($db,$_POST['FirstName']);
	$MiddleName = mysqli_real_escape_string($db,$_POST['MiddleName']);
	$LastName = mysqli_real_escape_string($db,$_POST['LastName']);
	$MotherName = mysqli_real_escape_string($db,$_POST['MotherName']);
	$BranchName = mysqli_real_escape_string($db,$_POST['BranchName']);
	$DateOfBirth = mysqli_real_escape_string($db,$_POST['DateOfBirth']);
	$address = mysqli_real_escape_string($db,$_POST['address']);
	$pincode = mysqli_real_escape_string($db,$_POST['pincode']);
	$contact1 = mysqli_real_escape_string($db,$_POST['contact1']);
	$contact2 = mysqli_real_escape_string($db,$_POST['contact2']);
	$email = mysqli_real_escape_string($db,$_POST['email']);
	$SchoolName = mysqli_real_escape_string($db,$_POST['SchoolName']);
	$SchoolBoardName = mysqli_real_escape_string($db,$_POST['SchoolBoardName']);
	$Schoolpercentage = mysqli_real_escape_string($db,$_POST['Schoolpercentage']);
	$CollegeName = mysqli_real_escape_string($db,$_POST['CollegeName']);
	$CollegeBoardName = mysqli_real_escape_string($db,$_POST['CollegeBoardName']);
	$Collegepercentage = mysqli_real_escape_string($db,$_POST['Collegepercentage']);
	$seatno = mysqli_real_escape_string($db,$_POST['seatno']);
	$rollno = mysqli_real_escape_string($db,$_POST['rollno']);

	$sql = "INSERT INTO users(FirstName,MiddleName,LastName,MotherName,BranchName,DateOfBirth,address,pincode,contact1,contact2,email,SchoolName,SchoolBoardName,Schoolpercentage,CollegeName,CollegeBoardName,Collegepercentage,seatno,rollno)
			VALUES ('$FirstName','$MiddleName','$LastName','$MotherName','$BranchName','$DateOfBirth'
			,'$address','$pincode','$contact1','$contact2','$email','$SchoolName','$SchoolBoardName','$Schoolpercentage','$CollegeName','$CollegeBoardName','$Collegepercentage','$seatno','$rollno')";
	mysqli_query($db,$sql);		
	$_SESSION['FirstName'] = $FirstName;
	$_SESSION['rollno']=$rollno;
	$_SESSION['success'] = "You are now logged in";
	header('location: FormAutomation.php');
    
}
//log user from login page
if (isset($_POST['login_user'])) {
	$FirstName = mysqli_real_escape_string($db,$_POST['FirstName']);
	$rollno = mysqli_real_escape_string($db,$_POST['rollno']);

	if (empty($FirstName)) {
		array_push($errors, "First Name is required");
	}
	if (empty($rollno)) {
		array_push($errors, "Roll No is required");
	}

	if (count($errors) == 0) {
		$query = "SELECT * FROM users WHERE FirstName='$FirstName' AND rollno='$rollno'";
		$result = mysqli_query($db, $query);
            $_SESSION['rollno'] = $rollno;
		    header('location: admission.php');
		    $_SESSION['rollno'] = $rollno;
		    header('location: registration.php');
		    $_SESSION['rollno'] = $rollno;
		    header('location: concession.php');
		if (mysqli_num_rows($result) == 1) {
			$_SESSION['FirstName'] = $FirstName;
			header('location: FormAutomation.php');
		}
		
		
		else {
			array_push($errors, "Wrong FirstName/RollNO combination");
		}
	}
}

//Logout
if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: FormAutomation.php");
	}
?>