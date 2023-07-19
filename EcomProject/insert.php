<?php 
//Databse Connection file

$servername = "localhost";
$username = "root";
$password = "";
$DATABASE_NAME = 'ecommerce';


$conn = new mysqli($servername, $username, $password, $DATABASE_NAME);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit']))
  {
    
  	//getting the post values
    $cusname=$_POST['name'];
    $cusid=$_POST['id'];
    $cusphone=$_POST['phone'];
    $cusroll=$_POST['roll'];
    $cusdress=$_POST['dress'];
    $dressquantity=$_POST['quelity'];
    $dresssize=$_POST['size'];
    $dressprice=$_POST['price'];
    $totalamount=$dressquantity*$dressprice;  
    // echo $totalamount; die; 
   
  // Query for data insertion
     $query=mysqli_query($conn, "insert into ordertable(cname,cid, cphone, croll, orderdress,dquantity,dsize,dprice) value ('$cusname','$cusid', '$cusphone', '$cusroll', '$cusdress', '$dressquantity', '$dresssize', '$totalamount' )");
    if ($query) {
    echo "<script>alert('Your Order is successfully Placed');</script>";
    echo "<script type='text/javascript'> document.location ='index.php'; </script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>