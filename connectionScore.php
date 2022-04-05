<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "score";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

//API
//C# > PHP
//JSON = key?