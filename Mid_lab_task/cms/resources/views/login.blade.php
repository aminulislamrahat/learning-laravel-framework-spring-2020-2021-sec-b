<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1>Login Page</h1>

	<form method="POST" >
			<table>
				<tr>
					<td><label for="E-mail">E-mail : </label><br></td>
					<td><input placeholder="example@gmail.com" type="email" required  name="mail" id="mail"><br></td>
				</tr>
				<tr>
					<td><label for="password">Password : </label><br></td>
					<td><input type="password" required name="password" id="password"><br></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit_bt" value="login" id="submit_bt"></td>
					<td><a href="signup"> Don't have any account? Create one </a></td>
				</tr>
			
			
			</table>
		</form>
</body>
</html>