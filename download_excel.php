<?php
// admin/download_excel.php
session_start();

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    die('Unauthorized');
}

require_once '../backend/config.php';

if (isset($_GET['table']) && isset($_GET['event'])) {
    $table = $_GET['table'];
    $event_name = $_GET['event'];
    
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
        die('Invalid table');
    }
    
    $conn = getDBConnection();
    $result = $conn->query("SELECT * FROM $table ORDER BY registration_date DESC");
    
    // Set headers for Excel download
    $filename = str_replace(' ', '_', $event_name) . '_Registrations_' . date('Y-m-d') . '.xls';
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    header('Pragma: no-cache');
    header('Expires: 0');
    
    // Output Excel headers
    echo "S.No\t";
    echo "Full Name\t";
    echo "Email\t";
    echo "Phone\t";
    echo "College\t";
    echo "Department\t";
    echo "Year\t";
    echo "Team Size\t";
    echo "Team Members\t";
    echo "Gaming Type\t";
    echo "Comments\t";
    echo "Registration Date\n";
    
    // Output data rows
    $serial = 1;
    while ($row = $result->fetch_assoc()) {
        echo $serial++ . "\t";
        echo $row['full_name'] . "\t";
        echo $row['email'] . "\t";
        echo $row['phone'] . "\t";
        echo $row['college'] . "\t";
        echo $row['department'] . "\t";
        echo $row['year'] . "\t";
        echo $row['team_size'] . "\t";
        echo ($row['team_members'] ?: 'N/A') . "\t";
        echo ($row['gaming_type'] ?: 'N/A') . "\t";
        echo ($row['comments'] ?: 'N/A') . "\t";
        echo $row['registration_date'] . "\n";
    }
    
    $conn->close();
} else {
    die('Missing parameters');
}
?>