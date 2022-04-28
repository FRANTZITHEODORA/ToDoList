<?php include "footer.php";?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>To Do List</title>
  <link rel='stylesheet' href='css/bootstrap.min.css'>
		  <link rel='stylesheet' href='css/style.css'>
		  <script src'js/jquery-3.6.0.min.js'></script>
		  <script src'js/bootstrap.min.js'></script>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

					<!--BOOTSTRAP CARD / ΣΤΟΙΧΕΙΑ ΚΑΙ IMAGE USER-->
					 
						
						<div class="container">
							 <div class="row">
							   <div class="col-sm col-md mt-5">
									<p align="center">
									<button onclick="window.location.href='newentry.php'" name="newentry" class="buttonNewEntry" style="width: 12rem;">ΕΠΕΙΓΟΝ ΚΑΤΑΧΩΡΗΣΗ</button>
									<br>
									<button onclick="window.location.href='newentry.php'" name="newentry" class="buttonNewEntry" style="width: 8rem;">ΚΑΤΑΧΩΡΗΣΗ</button>
									</p>
								</div>
								<div class="card col-sm col-md usercard mt-5 container" style="width: 18rem;">
							   <img class="card-img-top" src="..." alt="Card image cap">
							   <div class="card-body col-sm col-md">
							   <h5 class="card-title">ΣΤΟΙΧΕΙΑ ΧΡΗΣΤΗ</h5>
									<p class="card-text">ΟΝΟΜΑ:<br>
														 ΕΠΙΘΕΤΟ:<br>
														 ΤΗΛΕΦΩΝΟ ΕΠΙΚΟΙΝΩΝΙΑΣ:<br>
														 ΕΜΑΙL ΕΠΙΚΟΙΝΩΝΙΑΣ:<br></p>
									<a href="#" class="btn btn-primary">ΝΑ ΒΑΛΩ LINK ΓΙΑ ΤΗΝ ΣΕΛΙΔΑ LOGIN</a>
									<a href="#" class="card-link">ΝΑ ΒΑΛΩ LINK ΓΙΑ ΤΗΝ ΣΕΛΙΔΑ LOGOUT</a> 
								</div>	
							   </div>
								 <div class="col-sm col-md mt-5">
									<p align="center">
									</br>
									<button onclick="window.location.href='notes.php'" class="buttonNewEntry">ΣΗΜΕΙΩΣΕΙΣ</button>
									</p>
								</div>
							 </div>
						</div> 
					</div>	
					<?php include "notes.php";?>