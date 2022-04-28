<?php
	session_start();
	include 'NEWENTRY_action.php';
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$_SESSION['email'] = $email;
		$_SESSION['password'] = $password;
		echo "USERNAME: . $email";
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





$username = $_POST['FIRSTNAME'];
$email = $_POST['EMAIL'];
$_SESSION['email'] = $email;
$password = $_POST['PASSWORD'];
$_SESSION['password'] = $password;
$usermail = $_POST['EMAIL'];
$_SESSION['FIRSTNAME'] = $username;
$_SESSION['PASSWORD'] = $password;

    $user = new stdClass();
	
	$user->email = $email;
	$email = $user->email;
	$user->PASSWORD = $password;
	$password = md5($user->PASSWORD);
  
	
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
	   
function selectDataFromDb($sql, $asObject) {
	   
	   
		$email = $_POST["email"];
		$_SESSION['email'] = $email;
		$password = $_POST["password"];
		$_SESSION['password'] = $password;
		
		$conn = connectToDB();

		$sql = "SELECT  FROM user";
		$result = $conn->query($sql);
		$tempArray = [$_SESSION['email'] = $email];

		if ($result->num_rows > 0) {
			if ($asObject === true) {			
				while($row = $result->fetch_object()) {
					array_push($tempArray,$row);
				}	
			} else {
				while($row = $result->fetch_assoc()) {
					array_push($tempArray,$row);
				}
			}
		}
		return $tempArray;	
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



$email = $_POST["EMAIL"];
$password = $_POST["PASSWORD"];
	
$sql = "SELECT * FROM user WHERE EMAIL='$email' AND PASSWORD='$password'";

$userLoggedIn = selectDataFromDb($sql, true);
		
echo "<pre>";
var_dump($userLoggedIn);
echo "</pre>";

/*$userspassword = $userLoggedIn->password;
$password = $_POST["password"];
$userLoggedIn->password = $userspassword;*/

		/*if (count($userLoggedIn) > 0) {
			if (isset($userLoggedIn[0]) && $userLoggedIn[0]-> password !== null) {
				$userLoggedIn[0]-> password = null;
			}
			
			$_SESSION["loggedIn"]= true;
			$_SESSION["loggedInUser"] = $userLoggedIn[0];
		}*/



$conn->close();


    $servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'dbtodolist';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";


		
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }else{
	  echo "Connected sussefully";
  }


/*echo $_POST['FIRSTNAME'];
echo $_POST['LASTNAME'];
echo $_POST['EMAIL'];
echo $_POST['EMAIL'];
echo $_POST['PASSWORD'];
echo $_POST['CONFIRMPASSWORD'];
$username = $_POST['FIRSTNAME'] && $_POST['LASTNAME'];*/

/*ΕΛΕΓΧΟΣ ΜΕΘΟΔΟΥ POST/GET ΚΑΙ ΔΗΛΩΣΗ ΜΕΤΑΒΛΗΤΩΝ*/


/*ΔΗΛΩΣΗ OBJECT ΚΑΙ LOGIN USER*/

$user = new stdClass();
$user->email = $email;
$email = $user->email;


$user->PASSWORD = $password;
$_SESSION["loggedInUser"] = $user;



function login($user) {
		$email = md5($user->EMAIL);
		$password =($user->PASSWORD);
}


	
	

if (empty($_POST["email"])){
	echo "ΠΑΡΑΚΑΛΩ ΕΙΣΑΓΕΤΕ ΣΤΟΙΧΕΙΑ ΣΤΟ ΠΕΔΙΟ EMAIL ";
}
if (empty($_POST["password"])){
	echo "ΠΑΡΑΚΑΛΩ ΕΙΣΑΓΕΤΕ ΣΤΟΙΧΕΙΑ ΣΤΟ ΠΕΔΙΟ ΚΩΔΙΚΟΣ ";	
}
/*if ($_POST["email"] === "" && $_POST["password"] === ""){
	echo "ΦΙΛΕ ΕΙΣΑΙ ΟΚ";
}
elseif(!($_POST["email"] === "admin@admin.gr" && !$_POST["password"] === "1234")){
	echo "ΦΙΛΕ ΚΑΝΕ LOGGIN";
}*/

$user = new stdClass();
$user->email = $email;
$email = $user->email;
$password = $_POST['password'];
$user->password = $password;



	
	//no 2 tropos na dilwseis object
	// $user = (object)[];

if (isset($_POST["login"]) && $_POST["login"]== true) {
		login($user);
		// header("location:newentry.php");
	} 


if (($user->email != $email && $user->password != $password)) {
echo "Δεν έχετε συνδεθεί";
} else{
echo "Σύνδεση επιτυχής";
}



$conn->close();
	$loggedIN;
	?>   
	
	
