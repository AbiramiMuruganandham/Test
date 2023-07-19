<?php
session_start();
include "dbconnection.php";
if (isset($_SESSION['name'])) {
    $username = $_SESSION['name'];
    $user_id = $_SESSION['id'];
} else {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="vendor/jquery/jquery-1.11.2.min.js" type="text/javascript"></script>
    <script src="vendor/DataTables/datatables.min.js" type="text/javascript"></script>
    <?php include('nav.php'); ?>
    <title>Document</title>
</head>

<body>
    <h1 class="text-center" style="font-style:bold;font-family: emoji;padding: 20px">ORDER DETAILS</h1>
    <div class="container">
        <table class="display" id="order_details" >
            <thead>
                <tr>
                    <th> customer Name</th>
                    <th> Id</th>
                    <th> Mobile Number</th>
                    <th>Roll</th>
                    <th>order dress</th>
                    <th>Quantity</th>
                    <th>Dress size</th>
                    <th>Dress price</th>
                    <th>Order Date</th>
                    <!-- <th>Action</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                $ret = mysqli_query($conn, "select * from ordertable");
                $cnt = 1;
                $row = mysqli_num_rows($ret);
                if ($row > 0) {
                    while ($row = mysqli_fetch_array($ret)) {

                ?>
                        <!--Fetch the Records -->
                        <tr>
                            <!-- <td><?php echo $cnt; ?></td> -->
                            <td><?php echo $row['cname']; ?></td>
                            <td><?php echo $row['cid']; ?></td>
                            <td><?php echo $row['cphone']; ?></td>
                            <td> <?php echo $row['croll']; ?></td>
                            <td> <?php echo $row['orderdress']; ?></td>
                            <td> <?php echo $row['dquantity']; ?></td>
                            <td> <?php echo $row['dsize']; ?></td>
                            <td> <?php echo $row['dprice']; ?></td>
                            <td> <?php echo $row['created_at']; ?></td>


                            <!-- <td>
                            <a href="read.php?viewid=<?php echo htmlentities($row['ID']); ?>" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                            <a href="edit.php?editid=<?php echo htmlentities($row['ID']); ?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a> <a href="index.php?delid=<?php echo ($row['ID']); ?>" class="delete" title="Delete" data-toggle="tooltip" onclick="return confirm('Do you really want to Delete ?');"><i class="material-icons">&#xE872;</i></a>
                        </td> -->
                        </tr>
                <?php
                        // $cnt = $cnt + 1;
                    }
                }  ?>

            </tbody>
        </table>
    </div>
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#order_details").DataTable({

            });
        });
    </script>
</body>

</html>