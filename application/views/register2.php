<html>
	<head>
	<title>Form Register</title>
	<center>
	<h1>Register</h1>
	</head>
	<body bgcolor="azure">
		<form action='<?php echo site_url('auth/insert');?>' method='POST'>
		<input type="text" name="username" placeholder="username" required>
			<br/><br/>
		<input type="password" name="password" placeholder="password" minlength="8" required>
			<br/> <br/>
		<input type="submit" value="Submit"> &nbsp;
		<input type="reset" value="Reset">
		</form>
	</body>
	</center>
</html>