<?php
if(isset($_POST['submit5']))
 {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "disability";
$name = $_POST['username'];
	
    $pass = ($_POST['password']);
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT usern,passwrd from doc where passwrd='$pass' AND usern='$name'";

$result = $conn->query($sql);
$name1="user";
$passw="akkk";
while ($row = $result->fetch_assoc())
{
	$name1=$row["usern"];
	$passw=$row["passwrd"];
}

if($name1==$name && $passw==$pass)
{  session_start();
    $_SESSION["username"] = $name1;
    header('Location: docdisplay.php');
  
    //echo $_SESSION["username"];
}
else
{
     header('Location: doclogin.php');
}
 $conn->close();
}
 ?>