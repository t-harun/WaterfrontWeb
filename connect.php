<?php
$id = "id";
$name = "name";
$price = "price";
$description = "description";

// Create connection
$conn = mysqli_connect('localhost','root','','Waterfront');

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['price']) && isset($_POST['description'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
}
echo "Connected successfully";
?> 