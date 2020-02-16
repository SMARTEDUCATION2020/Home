<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SMART EDUCATION</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style1.css"/>
</head>
<body class="form-v10">
	<div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="insert.php" method="post" id="myform" enctype="multipart/form-data">
				<div class="form-left">
					<h2>LOGIN INFORMATION</h2>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="first_name" id="first_name" class="input-text" placeholder="First Name" value="" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="last_name" id="last_name" class="input-text" placeholder="Last Name" value="" required>
						</div>
					</div>
					<div class="form-row">
						<input type="text" name="email" id="your_email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Your Email" value="" >
					</div>
					<div class="form-row">
							<input type="text" name="phone" class="phone" id="phone" placeholder="Phone Number" value="" required>
						</div>					
						<div class="form-group">
						<div class="form-row form-row-1">
							<input class="text" type="password" name="password" placeholder="Password" value="" required="">
						</div>
						<div class="form-row form-row-2">
							<input class="text" type="password" name="c_password"  placeholder="Confirm Password" value=""  required="">	
						</div>
						</div>
					
				</div>
				<div class="form-right">
					<h2>PERSONAL INFORMATION</h2>
					<div class="form-row">
						<input type="text" name="Nick Name" class="Nick Name" id="Nick Name" placeholder=" Nick Name" required>
					</div>
					
					<div class="form-group">
							<div class="form-row form-row-1">
							<select name="Profession">
							    <option value="Profession">Profession</option>
							    <option value="Student">Student</option>
							    <option value="Faculty">Faculty</option>
							    <option value="Employee">Employee</option>
							</select>
							<span class="select-btn">
							  	<i class="zmdi zmdi-chevron-down"></i>
							</span>
						   </div>
							<div class="form-row form-row-2">
							<select name="interested_in">
							    <option value="Your Interest">Your Interest</option>
							    <option value="Food">Food</option>
							    <option value="Technology">Technology</option>
							    <option value="Riding">Riding</option>
                                <option value="Sports">Sports</option>
							</select>
							<span class="select-btn">
							  	<i class="zmdi zmdi-chevron-down"></i>
							</span>
						   </div>
					        </div>
					<div class="form-row">
						<select name="past_academic_progress">
					            <option value="Past Academic Progress"> Select Your Past Academic Progress</option>
						    <option value= 90%-100%>90%-100%</option>
						    <option value= 80%-90%>80%-90%</option>
						    <option value= 70%-80%>70%-80%</option>
						    <option value= 60%-70%>60%-70%</option>
						    <option value= 50%-60%>50%-60%</option>
						    <option value= 40%-50%>40%-50%</option>
						    <option value="Below 40%">Below 40%</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<div class="form-row">
						<input type="text" name="additional" class="additional" id="additional" placeholder="Additional Information" required>
					</div>
					<div class="form-checkbox">
						<label class="container"><p>I do accept the <a href="#" class="text">Terms and Conditions</a> of your site.</p>
						  	<input type="checkbox" name="checkbox">
						  	<span class="checkmark"></span>
						</label>
					</div>
					<div class="form-row-last">
						<input type="submit" name="register" class="register" value="Register">
						
					</div>
				</div>
			</form>
		</div>
	</div>
</body>

</html>