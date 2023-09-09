<?php

session_start();

include 'config.php';

$conn = new Connection();

$sql = mysqli_query($conn, "SELECT * FROM users");
$output = "";

if (mysqli_num_rows($sql) == 1) {
    $output .= "No users are available to chat";
} elseif (mysqli_num_rows($sql) > 0) {
    include 'data.php';
}
echo $output;
