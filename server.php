<?php 
session_start();

if ($SERVER['REQUEST_METHOD'] == 'POST'){
	$firstname = $_POST['FIRSTNAME'];
	$lastname = $_POST['LASTNAME'];
	$email = $_POST["EMAIL"];
	$phone = $_POST["PHONE"];
	$pass = $_POST["PASSWORD"];
	$confirmpass = $_POST["CONFIRMPASSWORD"];

	if (isset{$_SESSION['FIRSTNAME']}) {
		echo 'ΚΑΛΩΣ ΗΡΘΕΣ ' . $_SESSION['username'];
		unset{$_SESSION['PASSWORD']};
		header("Location:index.php");
	}
} else {
	echo 010100110;
}
?>