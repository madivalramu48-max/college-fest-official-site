<?php
// test_connection.php - Place this in your root folder to test
// Access: http://localhost/e2x-fest/test_connection.php

echo "<h1>E2X Fest - Database Connection Test</h1>";
echo "<hr>";

// Test 1: Check if config file exists
echo "<h2>Test 1: Config File</h2>";
if (file_exists('backend/config.php')) {
    echo "✅ Config file exists<br>";
    require_once 'backend/config.php';
} else {
    echo "❌ Config file NOT found at backend/config.php<br>";
    die("Please create the config.php file first!");
}

// Test 2: Database Connection
echo "<h2>Test 2: Database Connection</h2>";
try {
    $conn = getDBConnection();
    echo "✅ Database connected successfully!<br>";
    echo "Database Name: " . DB_NAME . "<br>";
} catch (Exception $e) {
    echo "❌ Database connection failed: " . $e->getMessage() . "<br>";
    die();
}

// Test 3: Check if database exists
echo "<h2>Test 3: Database Exists</h2>";
$result = $conn->query("SHOW DATABASES LIKE '" . DB_NAME . "'");
if ($result->num_rows > 0) {
    echo "✅ Database '" . DB_NAME . "' exists<br>";
} else {
    echo "❌ Database '" . DB_NAME . "' does NOT exist<br>";
    echo "Please create it in phpMyAdmin<br>";
}

// Test 4: Check tables
echo "<h2>Test 4: Tables Check</h2>";
$tables = [
    'painting_registrations',
    'singing_registrations',
    'gaming_free_fire_registrations',
    'gaming_bgmi_registrations',
    'face_painting_registrations',
    'standup_comedy_registrations',
    'dance_registrations',
    'mehandi_registrations',
    'makeup_hairstyle_registrations',
    'rangoli_registrations',
    'quiz_registrations',
    'fashion_show_registrations',
    'photography_registrations',
    'essay_writing_registrations',
    'street_play_registrations',
    'debate_registrations',
    'collage_making_registrations',
    'best_out_of_waste_registrations',
    'video_making_registrations',
    'meme_making_registrations'
];

$tables_found = 0;
$tables_missing = [];

foreach ($tables as $table) {
    $result = $conn->query("SHOW TABLES LIKE '$table'");
    if ($result->num_rows > 0) {
        $tables_found++;
        
        // Count registrations in this table
        $count_result = $conn->query("SELECT COUNT(*) as count FROM $table");
        $count = $count_result->fetch_assoc()['count'];
        echo "✅ $table - <strong>$count registrations</strong><br>";
    } else {
        $tables_missing[] = $table;
    }
}

echo "<br><strong>Summary: $tables_found / 20 tables found</strong><br>";

if (count($tables_missing) > 0) {
    echo "<br>❌ Missing Tables:<br>";
    foreach ($tables_missing as $missing) {
        echo "- $missing<br>";
    }
    echo "<br>Please import setup_database.sql in phpMyAdmin<br>";
}

// Test 5: PHP Version
echo "<h2>Test 5: PHP Configuration</h2>";
echo "PHP Version: " . phpversion() . "<br>";
echo "Sessions Enabled: " . (session_status() !== PHP_SESSION_DISABLED ? "✅ Yes" : "❌ No") . "<br>";

// Test 6: File Permissions
echo "<h2>Test 6: File Structure</h2>";
$files_to_check = [
    'index.html',
    'styles.css',
    'script.js',
    'backend/config.php',
    'backend/register.php',
    'admin/login.php',
    'admin/dashboard.php'
];

foreach ($files_to_check as $file) {
    if (file_exists($file)) {
        echo "✅ $file exists<br>";
    } else {
        echo "❌ $file NOT found<br>";
    }
}

echo "<h2>✅ Tests Complete!</h2>";
echo "<p>If all tests passed, your setup is correct.</p>";
echo "<p><a href='index.html'>Go to Website</a> | <a href='admin/login.php'>Admin Login</a></p>";

$conn->close();
?>