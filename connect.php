<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "waterfrontdb";
$id = "id";
$name = "name";
$price = "price";
$description = "description";

// Create connection
$conn = mysqli_connect($servername,$username, $password ,$dbname);

// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['price']) && isset($_POST['description'])){
//     $id = $_POST['id'];
//     $name = $_POST['name'];
//     $price = $_POST['price'];
//     $description = $_POST['description'];
// }

// check
if(mysqli_connect_error()){
  echo "Failed to connect DB";
  exit();
}

$query = "SELECT * FROM products";
$result = mysql_query($query);

echo "<table>"; // start a table tag in the HTML

while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['name'] . "</td><td>" . $row['age'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML
echo "Connected successfully";
?> 