<?php 
session_start();
/*echo $_POST['FIRSTNAME'];
echo $_POST['LASTNAME'];
echo $_POST['EMAIL'];
echo $_POST['EMAIL'];
echo $_POST['PASSWORD'];
echo $_POST['CONFIRMPASSWORD'];
$username = $_POST['FIRSTNAME'] && $_POST['LASTNAME'];*/

/*ΕΛΕΓΧΟΣ ΜΕΘΟΔΟΥ POST/GET ΚΑΙ ΔΗΛΩΣΗ ΜΕΤΑΒΛΗΤΩΝ*/



if ($_SERVER['REQUEST_METHOD'] == 'POST'){



$username = $_POST['FIRSTNAME'];
$email = $_POST['EMAIL'];
$_SESSION['email'] = $email;
$password = $_POST['PASSWORD'];
$_SESSION['password'] = $password;
$usermail = $_POST['EMAIL'];
$_SESSION['FIRSTNAME'] = $username;
$_SESSION['PASSWORD'] = $password;



if(isset($_SESSION['FIRSTNAME']) && ($username = $_POST['FIRSTNAME'] == true)) {
	echo 'ΚΑΛΩΣ ΗΡΘΕΣ '.$username = $_POST['FIRSTNAME'];
}
else{
	echo 'Δεν έχετε εγγραφεί επιτυχώς';
}
}
/*ΔΗΛΩΣΗ OBJECT ΚΑΙ LOGIN USER*/

$user = new stdClass();
$user->EMAIL = $usermail;
$user->PASSWORD = $password;
$_SESSION["loggedInUser"] = $user;


function isLoggedIn() {
	
		if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] === true) {
			return true;
		}
		return false;
	}
	
function login($user) {
		$email = md5($user->EMAIL);
		$password =($user->PASSWORD);
}


	
	

if (empty($_POST["EMAIL"])){
	echo "ΠΑΡΑΚΑΛΩ ΕΙΣΑΓΕΤΕ ΣΤΟΙΧΕΙΑ ΣΤΟ ΠΕΔΙΟ EMAIL ";
}
if (empty($_POST["PASSWORD"])){
	echo "ΠΑΡΑΚΑΛΩ ΕΙΣΑΓΕΤΕ ΣΤΟΙΧΕΙΑ ΣΤΟ ΠΕΔΙΟ ΚΩΔΙΚΟΣ ";	
}
/*if ($_POST["email"] === "" && $_POST["password"] === ""){
	echo "ΦΙΛΕ ΕΙΣΑΙ ΟΚ";
}
elseif(!($_POST["email"] === "admin@admin.gr" && !$_POST["password"] === "1234")){
	echo "ΦΙΛΕ ΚΑΝΕ LOGGIN";
}*/
$firstname = $_POST['FIRSTNAME'];
$password = $_POST['PASSWORD'];
$email = $_POST['EMAIL'];
$lastname = $_POST['LASTNAME'];
$phone = $_POST['PHONE'];
$corfirmpass = $_POST['CONFIRMPASSWORD'];// Check connection
$email = $_POST['EMAIL'];
$password = $_POST['PASSWORD'];
$user = new stdClass();
$user->EMAIL = $email;
$user->PASSWORD = $password;
	
	//no 2 tropos na dilwseis object
	// $user = (object)[];

if (isset($_POST["login"]) && $_POST["login"]== true) {
		login($user);
		// header("location:newentry.php");
	} 
	





$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'dbtodolist';

$conn = new mysqli($servername, $username, $password, $dbname);
// Create connection
/*$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM user;";


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connection created sussefully";*/




	$name = $_POST['FIRSTNAME'];
    $password = $_POST['PASSWORD'];
    $email = $_POST['EMAIL'];
    $lastname = $_POST['LASTNAME'];
    $phone = $_POST['PHONE'];
    $corfirmpass = $_POST['CONFIRMPASSWORD'];
    $user = new stdClass();
	
	$user->email = $email;
	$email = $user->email;
	$user->PASSWORD = $password;
	$password = md5($user->PASSWORD);
    $user->FIRSTNAME = $name;
	$name = $user->FIRSTNAME;
	$user->LASTNAME = $lastname;
	$lastname = $user->LASTNAME;
	
		function connectToDB() {
		$servername = "localhost"; // panta localhost
		$username = "root";
		$password = "";
		$dbname = "dbtodolist";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}
		
		return $conn;
	}
	
	
    function insertDataToDb($sql) {
	$conn = connectToDB();	
	

	if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
	} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	}
	

	function register($user) {
	$name = $_POST['FIRSTNAME'];
    $password = $_POST['PASSWORD'];
    $email = $_POST['EMAIL'];
    $lastname = $_POST['LASTNAME'];
    $phone = $_POST['PHONE'];
    $corfirmpass = $_POST['CONFIRMPASSWORD'];
	$user->email = $email;
	$email = $user->email;
	$user->PASSWORD = $password;
	$password = md5($user->PASSWORD);
    $user->FIRSTNAME = $name;
	$name = $user->FIRSTNAME;
	$user->LASTNAME = $lastname;
	$lastname = $user->LASTNAME;
    $sql = "INSERT INTO user(ID, NAME, LASTNAME, EMAIL, PHONE, PASSWORD, CONFIRMPASSWORD)
    VALUES('','$name','$lastname','$email','$phone','$password','$corfirmpass')";
    insertDataToDb($sql);
	}
    register($user);


if (($conn == TRUE && $user->email = $email && $user->password = $password) === true) {
 register($user);
}
if (($user->email != $email && $user->password != $password)!== true) {
echo "please κανε login";
} 



$conn->close();
	$loggedIN;
	?>   
	
	