<!DOCTYPE html>
<html>
<?php
include('session.php');
?>
<title>SMART EDUCATION</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container w3-pale-red ">
  <h1>Newton's First law</h1>
</div>

<div class="w3-container  w3-padding-large w3-margin" >
  <p><h2>Sir Isaac Newton published three laws in the 17th century. In this article, we are going to talk about Newton’s 1st law. This law does an introduction of motion of the object and the force acting on it. In other words, it deals with the motion of an object and its relation to force.</h2></p>

</div>


<div class="w3-container  w3-padding-large w3-margin" >
<h2>Newton's First law:</h2><br>
  <p><?php                  $link = mysqli_connect("127.0.0.1", "root", "", "register");
							$n= mysqli_query($link,"select past_academic_progress from register where email = '$user_check'");
							$n = implode(mysqli_fetch_array($n,MYSQLI_ASSOC));
							if($n>'80')
								$l=3;
							else if($n>'50' && $n<='80')
								$l=2;
							else
								$l=1;
							$link = mysqli_connect("127.0.0.1", "root", "", "n1");
							$n= mysqli_query($link,"select des from n1 where level = '$l'");
							$n = implode(mysqli_fetch_array($n,MYSQLI_ASSOC));
							 echo  "<h3>  $n   </h3>";
							?></p>
</div>
<div class="w3-container  w3-padding-items-center w3-margin" >
<h2>Example:</h2><br>
<?php 
							$link = mysqli_connect("127.0.0.1", "root", "", "register");
							$n= mysqli_query($link,"select interested_in from register where email = '$user_check'");
							$n = implode(mysqli_fetch_array($n,MYSQLI_ASSOC));
							if($n=='Food')
								echo '<img src="images/f.jpg">';
							else if($n=='Technology')
								echo '<img src="images/t.jpg">';
							else if($n=='Riding')
								echo '<img src="images/r.jpg">';
							else if($n=='Sports')
								echo '<img src="images/s.jpg">';
?>
</div>
</body>
</html> 
