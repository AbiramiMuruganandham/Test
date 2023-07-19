<?php
// session_start();
if (isset($_SESSION['name'])) {
    $username = $_SESSION['name'];
    $user_id = $_SESSION['id'];
    $userroll = $_SESSION['roll'];

    //   echo $userroll;die;
} else {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <style>
        .navtop {
            background-color: #376e52;
            height: 60px;
            width: 100%;
            border: 0;
        }

        .navtop div {
            display: flex;
            margin: 0 auto;
            width: 95%;
            height: 100%;
        }

        .navtop div h1,
        .navtop div a {
            display: inline-flex;
            align-items: center;
        }

        .navtop div h1 {
            flex: 1;
            font-size: 24px;
            padding: 0;
            margin: 0;
            color: #eaebed;
            font-weight: normal;
        }

        .navtop div a {
            padding: 0 20px;
            text-decoration: none;
            color: #c1c4c8;
            font-weight: bold;
        }

        .navtop div a i {
            padding: 2px 8px 0 0;
        }

        .navtop div a:hover {
            color: #eaebed;
        }

        body.loggedin {
            background-color: #f3f4f7;
        }

        .content {
            width: 1000px;
            margin: 0 auto;
        }

        .content h2 {
            margin: 0;
            padding: 25px 0;
            font-size: 22px;
            border-bottom: 1px solid #e0e0e3;
            color: #4a536e;
        }

        .content>p,
        .content>div {
            box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.1);
            margin: 25px 0;
            padding: 25px;
            background-color: #fff;
        }

        .content>p table td,
        .content>div table td {
            padding: 5px;
        }

        .content>p table td:first-child,
        .content>div table td:first-child {
            font-weight: bold;
            color: #4a536e;
            padding-right: 15px;
        }

        .content>div p {
            padding: 5px;
            margin: 0 0 10px 0;
        }
    </style>
</head>

<body class="loggedin">
    <nav class="navtop">
        <div>
            <h1>Welcome <?php echo $username; ?>!</h1>
            <?php if ($userroll == '0') { ?>
                <a href="index.php"><i class="fa-solid fa-house-user"></i>Home</a>
            <?php } ?>
            <?php if ($userroll == '1') { ?>
                <a href="aindex.php"><i class="fa-solid fa-house-user"></i>Home</a>

            <?php } ?>
            <!-- <a href="index.php"><i class="fa-solid fa-house-user"></i>Home</a> -->
            <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </div>
    </nav>
</body>

</html>