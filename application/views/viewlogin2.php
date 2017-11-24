<html>
	<head>
	<title>Form Login</title>
	<center>
	<h1>LOGIN</h1>
	</head>
	<body bgcolor="azure">
		<form action='<?php echo site_url('auth/verify');?>' method='POST'>
		<input type="text" name="username" placeholder="username">
			<br><br><br>
		<input type="password" name="password" placeholder="password">
			<br><br><br>
		<input type="submit"> &nbsp;
		<input type="reset">
		</form>
	</body>
	</center>
</html>