<?php
// admin/get_registrations.php
session_start();

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    echo json_encode(['error' => 'Unauthorized']);
    exit;
}

require_once '../backend/config.php';

header('Content-Type: application/json');

if (isset($_GET['table'])) {
    $table = $_GET['table'];
    
    // Validate table name
    $allowed_tables = [
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
    
    if (!in_array($table, $allowed_tables)) {
        echo json_encode(['error' => 'Invalid table']);
        exit;
    }
    
    $conn = getDBConnection();
    $result = $conn->query("SELECT * FROM $table ORDER BY registration_date DESC");
    
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    
    echo json_encode($data);
    $conn->close();
} else {
    echo json_encode(['error' => 'No table specified']);
}
?>