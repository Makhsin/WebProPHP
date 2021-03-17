<?php
$servername = "localhost";
$username = "root";
$password = "12345";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
// Create database
$Create = $_POST["deleteDB"];
$sql = "DROP DATABASE $Create";
if (mysqli_query($conn, $sql)) {
echo "Database Delete successfully";
} else {
echo "Error Delete database: " . mysqli_error($conn);
}
mysqli_close($conn);
?>