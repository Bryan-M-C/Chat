<?php
include 'config.php';

$conn = new Connection();

$searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
$output = "";

$sql = mysqli_query($conn, "SELECT * FROM users WHERE nombre LIKE '%{$searchTerm}%' OR apellidos LIKE '%{$searchTerm}%'");
if (mysqli_num_rows($sql) > 0) {
    include 'data.php';
} else {
    $output .= "No user fount related to your search term";
}
echo $output;
