<?php

$link = mysqli_connect("127.0.0.1", "root", "", "register");
GLOBAL$_SESSION,$_active;
 
// Check connection
if(!$link){
    echo 'Not Connected To Server';
}
if(!mysqli_select_db($link,'register')){
    echo 'Database not selected';
}
session_start();
ob_start();
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($link,$_POST['email']);
      $mypassword = mysqli_real_escape_string($link,$_POST['pass']); 
      
   $sql = "SELECT email FROM register WHERE email = '$myusername' and password = '$mypassword'";
   
	  $result = mysqli_query($link,$sql);
	  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
		// session_register("email");
         $_SESSION['login_user'] = $myusername;
         
         header("location: ahome.php");
      }else {
	  $error = "Your Login Name or Password is invalid";}
      }
   
?>