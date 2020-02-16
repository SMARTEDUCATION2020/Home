<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("127.0.0.1", "root", "", "register");
 
// Check connection
if(!$link){
    echo 'Not Connected To Server';
}
if(!mysqli_select_db($link,'register')){
    echo 'Database not selected';
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
$c_password = mysqli_real_escape_string($link, $_REQUEST['c_password']);
$Nick_Name = mysqli_real_escape_string($link, $_REQUEST['Nick_Name']);
$Profession = mysqli_real_escape_string($link, $_REQUEST['Profession']);
$interested_in = mysqli_real_escape_string($link, $_REQUEST['interested_in']);
$past_academic_progress = mysqli_real_escape_string($link, $_REQUEST['past_academic_progress']);
$additional = mysqli_real_escape_string($link, $_REQUEST['additional']);

 if($password == $c_password)
 {
// attempt insert query execution
$sql = "INSERT INTO register(first_name, last_name, email, phone, password, c_password, Nick_Name, Profession, interested_in, past_academic_progress,additional) VALUES ('$first_name', '$last_name', '$email','$phone','$password','$c_password','$Nick_Name','$Profession','$interested_in','$past_academic_progress','$additional')";
if(mysqli_query($link, $sql)){
		header("Refresh: 1.5; url=login.php");
echo "Registration is successful you will be redirected to login page...";
}		
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	
}
 
// close connection
mysqli_close($link);
 }
 else{
	 echo "Password Mismatch";
 }
?>