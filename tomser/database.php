<?php

$servername = "sql211.infinityfree.com";
$username = "if0_35545516";
$password = "18345627";
$database = "if0_35545516_login";

// Kap serveri het
$conn = new mysqli($servername, $username, $password, $database);

// Kapi stugum
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// echo "Connected successfully";
