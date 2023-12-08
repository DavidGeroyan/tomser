<?php

// Include the database connection file
include "database.php";
// Define the API endpoint
// Set headers to allow cross-origin resource sharing (CORS)
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// Define API endpoint
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Handle GET request to fetch all items from the database, ordered by 'id'
    $result = $conn->query("SELECT * FROM `contactus` ORDER BY `id` ASC");

    $items = array();

    while ($row = $result->fetch_assoc()) {
        $items[] = $row;
    }

    echo json_encode($items);
}

// Close the connection
$conn->close();

