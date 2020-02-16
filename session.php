<?php
 $link = mysqli_connect("127.0.0.1", "root", "", "register");
 
// Check connection
if(!$link){
    echo 'Not Connected To Server';
}
if(!mysqli_select_db($link,'register')){
    echo 'Database not selected';
}
session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($link,"select email from register where email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   //$login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:home.php");
      die();
   }
?>