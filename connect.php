
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
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

$query = "SELECT * FROM products";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["price"]. " " . $row["description"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

?> 