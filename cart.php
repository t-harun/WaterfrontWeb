<?php
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

$sql = "SELECT * FROM shopping_cart";
$result = mysqli_query($conn, $sql);
?>
<!doctype html>
<html>

<head>
    <title>Cart</title>
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
            <div class="col-md">
                <h4><?= $row['product_id'];?></h4>
                <button class="btn btn-success">Add to Cart</button>
            </div>
        <?php endwhile;?>
    </div>
</div>
<?php
// Free result set
mysqli_free_result($result);
mysqli_close($conn);
?>
</body>
</html>
