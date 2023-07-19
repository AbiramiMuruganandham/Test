<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            * {
  	box-sizing: border-box;
  	font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial, sans-serif;
  	font-size: 16px;
}
/* body {
  	background-color: #435165;
} */
.login {
  	width: 500px;
  	background-color: #ffffff;
  	box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
  	margin: 100px auto;
}
.login h3 {
  	/* text-align: center;
  	color: #5b6574; */
  	font-size: 35px;
  	padding: 20px 0 20px 0;
  	border-bottom: 1px solid #dee0e4;
	  font-family: auto;
}
.login form {
  	display: flex;
  	flex-wrap: wrap;
  	justify-content: center;
  	padding: 20px;
}
/* .login form label {
  	display: flex;
  	justify-content: center;
  	align-items: center;
  	width: 50px;
  	height: 50px;
  	background-color: #3274d6;
  	color: #ffffff;
} */
.login form input[type="password"], .login form input[type="text"] {
  	width: 310px;
  	height: 50px;
  	border: 1px solid #dee0e4;
  	margin-bottom: 20px;
  	padding: 0 15px;
}
.login form input[type="submit"] {
  	width: 310px;
  	padding: 15px;
 	margin-top: 20px;
  	background-color: forestgreen;
  	border: 0;
    border-radius: 15px;
  	cursor: pointer;
  	font-weight: bold;
  	color: #ffffff;
  	transition: background-color 0.2s;
    margin-bottom: 20px;
  	
}
.login form input[type="submit"]:hover {
	background-color: green;
  	transition: background-color 0.2s;
}
.message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 18px;
}

</style>
	</head>
	<body>
		<div class="login">
			<h3 class="text-center">Login</h3>
			<form action="confic.php" method="post">
				<!-- <label for="username">
					<i class="fas fa-user"></i>
				</label> -->
				<input type="text" name="UserName" class="form-control" placeholder="Username" id="UserName" required>
				<!-- <label for="password">
					<i class="fas fa-lock"></i>
				</label> -->
				<input type="password" name="UserPassword" class="form-control" placeholder="Password" id="UserPassword" required>
				<input type="submit"  value="Login">
				<p class="message">Not registered? <a href="#">Create an account</a></p>
			</form>
		</div>
	</body>
</html>
