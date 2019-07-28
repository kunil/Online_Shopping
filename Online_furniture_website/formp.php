<?php
$email = "";
$name = "";
$website = "";
$email = test_input($_POST["email"]);
$name = test_input($_POST["username"]);
$website = test_input($_POST["url"]);



 



 if (empty($_POST["username"])) 
{
echo "<script> alert('Username is required');</script>";
echo "<script> location.href='form_ass4.html';</script>";
}

else if (empty($_POST["email"])) 
{
echo "<script> alert('Email is required');</script>";
echo "<script> location.href='form_ass4.html';</script>";
}
else if (empty($_POST["password"])) 
{
echo "<script> alert('password is required');</script>";
echo "<script> location.href='form_ass4.html';</script>";
}

else if (empty($_POST["passwordRepeat"])) 
{
echo "<script> alert('Confirm password is required');</script>";
echo "<script> location.href='form_ass4.html';</script>";
}

else if (empty($_POST["mobile"])) 
{
echo "<script> alert('Mobile  is required');</script>";
echo "<script> location.href='form_ass4.html';</script>";
}



else if (empty($_POST["url"])) 
{
echo "<script> alert('Website is required');</script>";
echo "<script> location.href='form_ass4.html';</script>";
}



else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "<script> alert('Invalid email format');</script>";
  echo "<script> location.href='form_ass4.html';</script>";
  
  
}

else if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
  echo "<script> alert('Invalid URL');</script>";
  echo "<script> location.href='form_ass4.html';</script>";
}

else if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
   echo "<script>alert('Only letters and white space allowed')</script>"; 
   echo "<script> location.href='form_ass4.html';</script>";
}


else
{
	echo "<script> alert('Data Retrieved Successfully');</script>";
	echo "<script> location.href='form_ass4.html';</script>";
}



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "new123";
$x=$_POST["username"];
$y=$_POST["email"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$conn->close();

//echo "<script> window.location.href='form_ass4.html';</script>";
?>