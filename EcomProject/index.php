<?php
session_start();
if (isset($_SESSION['name'])) {
    $username = $_SESSION['name'];
    $user_id = $_SESSION['id'];
    $userroll = $_SESSION['roll'];
    $user_phone = $_SESSION['phone'];
    //   echo $user_phone;die;

} else {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <?php include('nav.php'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <style>
        .price {
            font-size: 35px;
        }
    </style>
</head>

<body class="loggedin">
    <h1 class="text-center" style="font-style:bold;font-family: emoji;padding: 40px;">TRENDING COLLECTIONS</h1>
    <div class="card-deck">
        <div class="card">
            <img class="card-img-top" src="\EcomProject\image\maxi.jpeg" alt="Card image cap">
            <div class="card-body">
                <form action="insert.php" method="POST">
                    <input type="hidden" name="price" id="womenmaxi" value="550">
                    <h5 class="card-title">Women Maxi Dress</h5>
                    <input type="hidden" name="dress" id="dressname" value="MaxiDress">
                    <p class="card-text price">RS.550</p>
                    <button type="button" class="btn btn-dark">Add to Cart</button>
                    <input id=quelity2 name="quelity" type=number min=1 value=1 style="width:10%;">
                    <button type="button" onclick="increment2()">+</button>
                    <button type="button" onclick="decrement2()">-</button>
                    <select name="size" id="size2" name="size">
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    </select>
                    <input type="hidden" name="name" value="<?php echo $username; ?>">
                    <input type="hidden" name="id" value="<?php echo $user_id; ?>">
                    <input type="hidden" name="roll" value="<?php echo $userroll; ?>">
                    <input type="hidden" name="phone" value="<?php echo $user_phone; ?>">
            </div>
            <div class="card-footer bg-transparent ">
                <button class="btn btn-success" type="submit" name="submit">Buy Now</button>
            </div>
            </form>
        </div>
        <div class="card">
            <img class="card-img-top" src="\EcomProject\image\women.jpeg" alt="Card image cap">
            <div class="card-body">
                <form action="insert.php" method="POST">
                    <h5 class="card-title">Women Dress</h5>
                    <input type="hidden" id="women" name="price" value="709">
                    <input type="hidden" name="dress" id="dressname2" value="womendress">
                    <p class="card-text price">RS.709</p>
                    <button type="button" class="btn btn-dark">Add to Cart</button>
                    <input id=quelity1 name="quelity" type=number min=1 value=1 style="width:10%;">
                    <button type="button" onclick="increment1()">+</button>
                    <button type="button" onclick="decrement1()">-</button>
                    <select name="size" id="size1">
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    </select>
                    <input type="hidden" name="name" value="<?php echo $username; ?>">
                    <input type="hidden" name="id" value="<?php echo $user_id; ?>">
                    <input type="hidden" name="roll" value="<?php echo $userroll; ?>">
                    <input type="hidden" name="phone" value="<?php echo $user_phone; ?>">
            </div>
            <div class="card-footer bg-transparent ">
                <button class="btn btn-success" type="submit" name="submit">Buy Now</button>
            </div>
            </form>
        </div>
        <div class="card">
            <img class="card-img-top" src="\EcomProject\image\men.jpeg" alt="Card image cap">
            <form action="insert.php" method="POST">
                <div class="card-body">
                    <h5 class="card-title">Mens Dress</h5>
                    <input type="hidden" name="price" id="mrndress" value="987">
                    <input type="hidden" name="dress" id="dressname1" value="mendress">
                    <p class="card-text price" id="price"> RS.987</p>
                    <button type="button" class="btn btn-dark">Add to Cart</button>
                    <input id=quelity type=number name="quelity" min=1 value=1 style="width:10%;">
                    <button type="button" onclick="increment()">+</button>
                    <button type="button" onclick="decrement()">-</button>
                    <select name="size" id="size">
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    </select>
                </div>
                <input type="hidden" name="name" value="<?php echo $username; ?>">
                <input type="hidden" name="id" value="<?php echo $user_id; ?>">
                <input type="hidden" name="roll" value="<?php echo $userroll; ?>">
                <input type="hidden" name="phone" value="<?php echo $user_phone; ?>">
                <div class="card-footer bg-transparent ">
                    <button class="btn btn-success" type="submit" name="submit">Buy Now</button>
                </div>
            </form>
        </div>
    </div>

</body>
<script>
    function increment() {
        document.getElementById('quelity').stepUp();
    }

    function decrement() {
        document.getElementById('quelity').stepDown();
    }

    function increment1() {
        document.getElementById('quelity1').stepUp();
    }

    function decrement1() {
        document.getElementById('quelity1').stepDown();
    }

    function increment2() {
        document.getElementById('quelity2').stepUp();
    }

    function decrement2() {
        document.getElementById('quelity2').stepDown();
    }
</script>

</html>