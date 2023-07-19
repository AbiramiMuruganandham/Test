<?php
session_start();
if(isset($_SESSION['name'])) {
  $username = $_SESSION['name'];
  $userroll = $_SESSION['roll'];
//   $userphone = $_SESSION['phone'];
//   echo $userphone;die;
  $user_id = $_SESSION['id'];
} else {
  header("Location: login.php");
  exit();
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profile Page</title>
        <?php include('nav.php'); ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
	</head>
	<body class="loggedin">
		<div class="content">
			<h2>Profile Page</h2>
			<div>
				<p>Your account details are below:</p>
				<table>
					<tr>
						<td>User Name:</td>
						<td><?php echo $username;?></td>
					</tr>
					<tr>
						<td>User ID:</td>
						<td><?php echo $user_id;?></td>
					</tr>
					<tr>
						<td>Roll:</td>
						<td><?php echo $userroll;?></td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>