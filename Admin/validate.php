<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 12-04-2020
 * Time: 03:22
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//echo "Connected successfully";
?>