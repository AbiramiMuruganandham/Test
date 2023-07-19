<?php
$servername = "localhost";
$username = "root";
$password = "";
$DATABASE_NAME = 'ecommerce';


$conn = new mysqli($servername, $username, $password, $DATABASE_NAME);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
if (!isset($_POST['UserName'], $_POST['UserPassword'])) {
  exit('Please fill both the username and password fields!');
}
if ($stmt = $conn->prepare('SELECT Id, UserPassword, Roll, Phone FROM UserTable WHERE UserName = ?')) {
  session_start();
  $stmt->bind_param('s', $_POST['UserName']);
  $stmt->execute();
  $stmt->store_result();
  if ($stmt->num_rows > 0) {
    $stmt->bind_result($id, $password,$roll,$phone);
    $stmt->fetch();
    // if (password_verify($_POST['UserPassword'], $password)) {
      if (($_POST['UserPassword'] === $password) && ($roll === 0)) {
      $_SESSION['loggedin'] = TRUE;
      $_SESSION['name'] = $_POST['UserName'];
      $_SESSION['id'] = $id;
      $_SESSION['roll'] = $roll;
      $_SESSION['phone'] = $phone;
      // echo $_SESSION['phone'];die;
      // echo 'Welcome ' . $_SESSION['name'] . '!';
      header('Location: index.php');
  } if (($_POST['UserPassword'] === $password) && ($roll === 1)) {
    $_SESSION['loggedin'] = TRUE;
    $_SESSION['roll'] = $roll;
    $_SESSION['name'] = $_POST['UserName'];
    $_SESSION['id'] = $id;
    //   echo $_SESSION['roll'];die;
      $_SESSION['roll'] = $roll;
    header('Location: aindex.php');
  }
      else {
        echo 'Incorrect username and/or password!';
      }
    } 
  }
