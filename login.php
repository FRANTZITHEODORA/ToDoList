		<!DOCKTYPE HTML>
		<html>
		<head>
		<meta charset="utf-8">
	<title>ΣΥΝΔΕΣΗ ΧΡΗΣΤΗ</title>
	 <link rel='stylesheet' href='css/bootstrap.min.css'>
		  <link rel='stylesheet' href='css/style.css'>
		  <script src'js/jquery-3.6.0.min.js'></script>
		  <script src'js/bootstrap.min.js'></script>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	</head>
		<body style="background-color: #6A5ACD; color: #9370DB;">
		<div>
		  <h1 class="h1css" style="text-align: center; background-color: white; height: 15%; width: 30%; border-radius: 50px; margin-left:32%; padding-top:1.5%;">To Do List</h1><h4 class="h4css" style="font-size: 50px; padding-top: 0.45rem padding-bottom: 1rem;">LOGIN<h4>
		   </div>
		   <div class="row">
				<div class="container col-sm col-md">
 <form class="newentryForm" action="userspage.php" method="POST" id="loginform" style="height: 80%; width: 65%; margin-top:1%; margin-left:15%; border-radius: 5px;">
       <div class="row">
	    <div class="container col-sm col-md">
         <label class="labelcss" style="margin-top: 150px;">EMAIL</label></br>
	   <div>
	   
         <input type="email" name="email" id="EMAIL" class="inputcss" placeholder="π.χ. frantzi@hotmail.gr" method="POST" style="background-color: #EFEFFB; color: #9370DB; margin-top: 2px;">
	  </div>
	  </div>
	  </div>
	  <div class="row">
	  <div class="container col-sm col-md">
      <div>
	  
	 <label class="labelcss">PASSWORD</label></br>
	   <div>
        <input type="password" name="password" id="PASSWORD" class="inputcss"  placeholder="π.χ. 1234" method="POST">
	   </div>.
	  </div>
	  </div>
	  <div class="row">
	  <div class="container col-sm col-md">
       <div>
	    <button type="submit" onclick="checkData();" class="buttonSubmit" style="width: 25%; height: 100px;">SUBMIT</button>
		  <h6 align="left" style="color: #40E0D0; width: 95%; margin-top: 20%; margin-left: 15px; font-size: 25px;">If you already have an account, you can edit it <a href="update_user.php" style="text-decoration: none; color: white;">here.</a></h6>
	   
	   </div>
	   </div>
	   </div>
	 </div>
 </form>
 <script>
function checkData(){
	var email = document.getElementById("EMAIL").value;
	var pass = document.getElementById("PASSWORD").value;
	if (email == ""){
	alert("βάλε το email σου ρε μπαγλαμά");
	}
	else if(pass == ""){
    alert("βάλε τον κωδικό σου ρε μπαγλαμά");
	}
</script>
 </body>
 <?php include 'footer.php'?>