<?php
 if(isset($_POST['submit2']))
 {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username1 = $_POST['username'];
	
    $password1 = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    if(strlen($password1) < 6)
    {
        $error[] = 'Password is too short.';
    }
    if(strlen($cpassword) < 6)
    {
        $error[] = 'Password is too short.';
    }
    
    if($password1 != $cpassword )
    {
        $error[] = 'Passwords do not match.';
    }

    $gender = $_POST['gender'];
    $email = $_POST['email'];
   
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    {
    $error[] = 'Please enter a valid email address';
    } 
    $mobilenumber = $_POST['mobilenumber'];
    $dates = $_POST['date'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "disability";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$password2=$password1;
 $sql = "INSERT INTO user (firstn,lastn,usern,pswrd,gndr,email,dates,mobilen,street,city,state)
VALUES ('$firstname','$lastname','$username1','$password2','$gender','$email','$dates','$mobilenumber','$street','$city','$state')";

       if ($conn->query($sql) === TRUE) 
        { 
             header('Location: login.html');
        } 
        else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
        $conn->close();

}
    ?>