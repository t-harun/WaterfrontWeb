<?php
//start session
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "waterfrontdb";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    echo 'Hello, world fail.';
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

if(isset($_POST['submit']) || !empty($_POST['submit'])){
    $product_id = $_POST['product_id'];
    $sql = "INSERT INTO shopping_cart SET
        product_id = '$product_id'
    ";
    $conn = mysqli_connect($servername, $username, $password, $dbname) or die(mysqli_error());
    $res = mysqli_query($conn,$sql)or die(mysqli_error());
}
?>
<!doctype html>
<html>

<head>
    <title> Test Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
<div class = "col-md">
    <div class="row">
        <h2 class = "text-center">Top Products</h2><br><br>
        <a href="cart.php" class="btn btn-white">Buy</a>
        <?php
            while($row = mysqli_fetch_array($result)):
        ?>
        <form action="connect.php" method="POST">
        <div class="col-md">
                <h4><?= $row['name'];?></h4>
                <img class="img-fluid img-thumbnail" src="<?= $row['image'];?>" alt="<?= $row['image'];?>">
                <p>$<?= $row['price'];?></p>
                <p><?= $row['description'];?></p>
                <input type="submit" name="submit" class="btn btn-success" value="Add to Cart" />
                <input type="hidden" name="product_id" value="<?= $row['id'];?>">
        </div>
        </form>
        <?php endwhile;?>
    </div>
</div>
</body>
</html>