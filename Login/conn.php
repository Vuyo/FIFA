<?php
// Database settings
$servername = "localhost";
$db_user = "root";
$db_pass = "root";
$database = "campaign_db";


// Create connection
$conn = new mysqli($servername, $db_user, $db_pass);

//select DB
mysqli_select_db($conn,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
 
?>