<?php

session_start();

include 'config.php';

$outgoing_id = $_SESSION['unique_id'];

$conn = new Connection();

$searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
$output = "";

$sql = mysqli_query($conn, "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} AND (nombre LIKE '%{$searchTerm}%' OR apellidos LIKE '%{$searchTerm}%')");
if (mysqli_num_rows($sql) > 0) {
    include 'data.php';
} else {
    $output .= "No user fount related to your search term";
}
echo $output;
