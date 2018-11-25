	<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>sign up</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<script src="buy_signup.js"></script>
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Buyer SignUp</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form name="SignUpForm" method="post" onsubmit="return isValid()" action="bsignserver.php">
					<input class="text" type="text" id="firstname" name="firstname1" placeholder="Firstname" required="">
					<input class="text email" type="text" id="lastname" name="lastname1" placeholder="Lastname" required="">
					<input class="text email" type="email" id="email" name="email1" placeholder="Email" required="">
					<input class="text email" type="text" id="phone" name="phone1" placeholder="Phone number" required="">
					<input class="text email" type="text" id="address" name="address1" placeholder="Address" required="">
					<input class="text email" type="text" id="pan" name="pan1" placeholder="PAN Number" required="">
					<input class="text" type="password" id="password" name="password1" placeholder="Password" required="">
					<input class="text w3lpass" type="password" id="confirm_password1" name="confirm_password" placeholder="Confirm Password" required="">
					<input type="submit" value="SIGNUP">
				</form>
				<p>Don't have an Account? <a href="buy_login.php"> Login Now!</a></p>
			</div>
		</div>
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>