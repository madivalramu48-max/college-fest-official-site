<?php
// backend/config.php

// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'e2x_fest');

// Create connection with timeout settings
function getDBConnection() {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Set connection timeout and other options
    $conn->options(MYSQLI_OPT_CONNECT_TIMEOUT, 10);
    $conn->set_charset("utf8mb4");
    
    // Increase timeout for queries
    $conn->query("SET SESSION wait_timeout = 28800");
    $conn->query("SET SESSION interactive_timeout = 28800");
    
    return $conn;
}

// Event names array
$events = [
    'Painting',
    'Singing',
    'Gaming - Free Fire',
    'Gaming - BGMI',
    'Face Painting',
    'Stand-up Comedy',
    'Dance',
    'Mehandi',
    'Makeup & Hairstyle',
    'Rangoli',
    'Quiz',
    'Fashion Show',
    'Photography',
    'Essay Writing',
    'Street Play',
    'Debate',
    'Collage Making',
    'Best Out Of Waste',
    'Video Making',
    'Meme Making'
];

// Admin credentials
define('ADMIN_USERNAME', 'admin');
define('ADMIN_PASSWORD', 'E2X@2025'); // Change this password

// Helper function to sanitize input
function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>