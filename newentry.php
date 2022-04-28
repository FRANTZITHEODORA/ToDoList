<?php

function showTitle() {
	// kwdika 
	$result;
	if (isset($_GET["login"]) && $_GET["login"]== true) {
		$result = returnLogin("timi tou orismatos");
	} else {
		$result = returnRegister();
	}
	
	$result . " vale kai parapanw keimeno";
	return $result;
}

function returnLogin($orisma) {
	return "login" . $orisma;
}

function returnRegister() {
	return "Register";
}



?>
		<!DOCKTYPE HTML>
		<html>
		<head>
		<meta charset="utf-8">
	<title>ΕΓΓΡΑΦΗ</title>
	 <link rel='stylesheet' href='css/bootstrap.min.css'>
		  <link rel='stylesheet' href='css/style.css'>
		  <script src'js/jquery-3.6.0.min.js'></script>
		  <script src'js/bootstrap.min.js'></script>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	</head>
		<body class="bodycss">
			<h1 class="h1css">To Do List</h1>	
            <h4 class="h4css" style="padding-top: 0.25rem padding-bottom: 4rem;">REGISTRARSE<h4>			
			<?php if (isset($_GET["login"]) && $_GET["login"]== true);?>
					<!--FORM-->
				<div class="row">
				<div class="container col-sm col-md">
				<?php if (isset($_GET["login"]) && $_GET["login"]== true)?>
				<form class="newentryForm" action="NEWENTRY_action.php" method="POST" style="height: 100%;">
				 <h1 class="h4css" style="text-align: left ; margin-left: 130px; margin-top: 2px; margin-bottom:2px; font-size: 80px;">Login</h1>
					<label>
						
						<input type="text" id="FIRSTNAME" name="FIRSTNAME" method="POST" class="inputcss" placeholder="Firstname" style="background-color: #EFEFFB; color: #9370DB;"><label><input type="text" id="LASTNAME" name="LASTNAME" class="inputcss" placeholder="Lastname" style="background-color: #EFEFFB; color: #9370DB;">
					</label>	
					</label>
					    <div>
						<input type="text" id="PHONE" name="PHONE" class="inputcss" placeholder="Phone Number" style="background-color: #d6d6f5; color: #9370DB;"><input type="email" id="EMAIL" name="EMAIL" class="inputcss" placeholder="Email" style="background-color: #d6d6f5; color: #9370DB;">
						</div>
						<label class="labelcss">Password</label><label class="labelcss">Confirm Password</label></br>
						<input type="password" id="PASSWORD" name="PASSWORD" class="inputcss" placeholder="1234" style="background-color: #b3b3ff;"><input type="password" id="CONFIRMPASSWORD" name="CONFIRMPASSWORD" class="inputcss" placeholder="1234" style="background-color: #b3b3ff;">
					<!--FORM BUTTON-->
					<div>
					<button type="submit" class="buttonSubmit">SUBMIT</button>
					</div>
					<div>
					<h6 align="left" style="color: #40E0D0; margin-top: 60px; margin-left: 15px; font-size: 25px;">Already have an account? Loggin <a href="login.php" style="text-decoration: none; color: pink;">here.</a></h6>
					</div>
				</form>
			
<?php include "footer.php";?>