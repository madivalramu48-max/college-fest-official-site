<?php
// backend/register.php
header('Content-Type: application/json');
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Sanitize inputs
    $event_name = sanitize($_POST['event_name']);
    $full_name = sanitize($_POST['full_name']);
    $email = sanitize($_POST['email']);
    $phone = sanitize($_POST['phone']);
    $college = sanitize($_POST['college']);
    $department = sanitize($_POST['department']);
    $year = sanitize($_POST['year']);
    $gaming_type = isset($_POST['gaming_type']) ? sanitize($_POST['gaming_type']) : NULL;
    $team_size = sanitize($_POST['team_size']);
    $team_members = isset($_POST['team_members']) ? sanitize($_POST['team_members']) : NULL;
    $comments = isset($_POST['comments']) ? sanitize($_POST['comments']) : NULL;
    
    // Validate required fields
    if (empty($event_name) || empty($full_name) || empty($email) || empty($phone) || 
        empty($college) || empty($department) || empty($year) || empty($team_size)) {
        echo json_encode(['success' => false, 'message' => 'All required fields must be filled']);
        exit;
    }
    
    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false, 'message' => 'Invalid email format']);
        exit;
    }
    
    // Validate phone
    if (!preg_match('/^[0-9]{10}$/', $phone)) {
        echo json_encode(['success' => false, 'message' => 'Phone number must be 10 digits']);
        exit;
    }
    
    // Get table name based on event
    $table_name = getTableName($event_name);
    
    if (!$table_name) {
        echo json_encode(['success' => false, 'message' => 'Invalid event name']);
        exit;
    }
    
    // Insert into database
    $conn = getDBConnection();
    
    $stmt = $conn->prepare("INSERT INTO $table_name (full_name, email, phone, college, department, year, gaming_type, team_size, team_members, comments) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    $stmt->bind_param("ssssssssss", $full_name, $email, $phone, $college, $department, $year, $gaming_type, $team_size, $team_members, $comments);
    
    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Registration successful']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Database error: ' . $stmt->error]);
    }
    
    $stmt->close();
    $conn->close();
    
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}

// Function to get table name from event name
function getTableName($event_name) {
    $table_map = [
        'Painting' => 'painting_registrations',
        'Singing' => 'singing_registrations',
        'Gaming - Free Fire' => 'gaming_free_fire_registrations',
        'Gaming - BGMI' => 'gaming_bgmi_registrations',
        'Face Painting' => 'face_painting_registrations',
        'Stand-up Comedy' => 'standup_comedy_registrations',
        'Dance' => 'dance_registrations',
        'Mehandi' => 'mehandi_registrations',
        'Makeup & Hairstyle' => 'makeup_hairstyle_registrations',
        'Rangoli' => 'rangoli_registrations',
        'Quiz' => 'quiz_registrations',
        'Fashion Show' => 'fashion_show_registrations',
        'Photography' => 'photography_registrations',
        'Essay Writing' => 'essay_writing_registrations',
        'Street Play' => 'street_play_registrations',
        'Debate' => 'debate_registrations',
        'Collage Making' => 'collage_making_registrations',
        'Best Out Of Waste' => 'best_out_of_waste_registrations',
        'Video Making' => 'video_making_registrations',
        'Meme Making' => 'meme_making_registrations'
    ];
    
    return isset($table_map[$event_name]) ? $table_map[$event_name] : null;
}
?>