<?php 


$host="localhost";
$username="root";
$password="";
$db="login";

$conn = mysqli_connect($host,$username,$password, $db);

if(!$conn){
	echo "Connection failed";
}

	$username=$_POST['user'];
	$password=$_POST['pass'];

	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysqli_real_escape_string($conn, $username);
	$password = mysqli_real_escape_string($conn, $password);

	
	$sql="SELECT * FROM users where username='$username' AND password='$password' ";
	$result=mysqli_query($conn, $sql);

	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$count = mysqli_num_rows($result);

	if($count==1){
		echo "<h1> <center>You have Successfully Logged in!!</center></h1>";
	}
	else {
		echo "<h1><center>You have Entered incorrect username and Password!!!</center></h1>";
		exit();
		}


?>
