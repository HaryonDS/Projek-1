<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "perpus";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$kode_buku= $_GET['kode_buku'];

$sql = "DELETE FROM tbl_buku WHERE kode_buku='$kode_buku'";

if ($conn->query($sql) === TRUE) {
    header ('location: new 1.php');
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
