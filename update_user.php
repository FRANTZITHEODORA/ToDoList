<?php 
session_start();
include 'newentry.php';

function isLoggedIn() {
		if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] === true) 
		echo "μπορείτε να αλλάξετε τα στοιχεία σας";
		}
			
include "footer.php";?>