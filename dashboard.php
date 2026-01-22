<?php
// admin/dashboard.php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

// Check if admin is logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit;
}

require_once '../backend/config.php';

// Get fresh database connection
$conn = getDBConnection();
if (!$conn) {
    die("Database connection failed. Please check your config.php settings.");
}

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - E2X Fest</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f8f9fa;
        }
        
        .admin-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 1.5rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .admin-header h1 {
            font-size: 1.8rem;
        }
        
        .admin-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .logout-btn {
            background: rgba(255,255,255,0.2);
            color: white;
            padding: 0.7rem 1.5rem;
            border: 2px solid white;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .logout-btn:hover {
            background: white;
            color: #667eea;
        }
        
        .container {
            max-width: 1400px;
            margin: 2rem auto;
            padding: 0 2rem;
        }
        
        .dashboard-title {
            margin-bottom: 2rem;
        }
        
        .dashboard-title h2 {
            color: #2d3436;
            margin-bottom: 0.5rem;
        }
        
        .dashboard-title p {
            color: #636e72;
        }
        
        .stats-summary {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-bottom: 3rem;
        }
        
        .stat-card {
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            text-align: center;
        }
        
        .stat-card h3 {
            color: #667eea;
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }
        
        .stat-card p {
            color: #636e72;
        }
        
        .events-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .event-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .event-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }
        
        .event-card h3 {
            color: #2d3436;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .event-card h3 i {
            color: #667eea;
        }
        
        .registration-count {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }
        
        .count-badge {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-weight: 600;
            font-size: 1.2rem;
        }
        
        .view-btn {
            width: 100%;
            padding: 0.8rem;
            background: #667eea;
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }
        
        .view-btn:hover {
            background: #5568d3;
        }
        
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.6);
        }
        
        .modal-content {
            background-color: white;
            margin: 2% auto;
            padding: 2rem;
            border-radius: 15px;
            width: 95%;
            max-width: 1200px;
            max-height: 85vh;
            overflow-y: auto;
        }
        
        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid #e0e0e0;
        }
        
        .modal-header h2 {
            color: #2d3436;
        }
        
        .close-modal {
            font-size: 2rem;
            font-weight: bold;
            color: #636e72;
            cursor: pointer;
            transition: color 0.3s ease;
        }
        
        .close-modal:hover {
            color: #667eea;
        }
        
        .download-btn {
            background: #4CAF50;
            color: white;
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
            margin-bottom: 1rem;
        }
        
        .download-btn:hover {
            background: #45a049;
        }
        
        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }
        
        .data-table th,
        .data-table td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }
        
        .data-table th {
            background: #f8f9fa;
            color: #2d3436;
            font-weight: 600;
            position: sticky;
            top: 0;
        }
        
        .data-table tr:hover {
            background: #f8f9fa;
        }
        
        .no-data {
            text-align: center;
            padding: 3rem;
            color: #636e72;
        }
        
        .error-message {
            background: #ff6b6b;
            color: white;
            padding: 1rem;
            border-radius: 8px;
            margin: 1rem 0;
        }
        
        .success-message {
            background: #4CAF50;
            color: white;
            padding: 1rem;
            border-radius: 8px;
            margin: 1rem 0;
        }
        
        @media (max-width: 768px) {
            .events-grid {
                grid-template-columns: 1fr;
            }
            
            .data-table {
                font-size: 0.9rem;
            }
            
            .data-table th,
            .data-table td {
                padding: 0.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="admin-header">
        <h1><i class="fas fa-tachometer-alt"></i> E2X Fest Admin Dashboard</h1>
        <div class="admin-info">
            <span>Welcome, <?php echo htmlspecialchars($_SESSION['admin_username']); ?></span>
            <a href="logout.php" class="logout-btn">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
    </div>
    
    <div class="container">
        <div class="dashboard-title">
            <h2>Event Registrations Management</h2>
            <p>Click on any event to view detailed registrations and download data</p>
        </div>
        
        <?php
        // Calculate total registrations
        $total_registrations = 0;
        $event_tables = [
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
        
        // Store counts for display
        $event_counts = [];
        
        foreach ($event_tables as $event_name => $table) {
            $result = $conn->query("SELECT COUNT(*) as count FROM $table");
            if ($result) {
                $row = $result->fetch_assoc();
                $count = $row['count'];
                $event_counts[$event_name] = $count;
                $total_registrations += $count;
            } else {
                $event_counts[$event_name] = 0;
            }
        }
        ?>
        
        <div class="stats-summary">
            <div class="stat-card">
                <h3><?php echo count($event_tables); ?></h3>
                <p>Total Events</p>
            </div>
            <div class="stat-card">
                <h3><?php echo $total_registrations; ?></h3>
                <p>Total Registrations</p>
            </div>
            <div class="stat-card">
                <h3><?php echo number_format($total_registrations / count($event_tables), 1); ?></h3>
                <p>Average per Event</p>
            </div>
        </div>
        
        <div class="events-grid">
            <?php
            foreach ($event_tables as $event_name => $table_name) {
                $count = $event_counts[$event_name];
                
                // Determine icon based on event
                $icon = 'fa-calendar-check';
                if (strpos($event_name, 'Gaming') !== false) $icon = 'fa-gamepad';
                elseif (strpos($event_name, 'Dance') !== false) $icon = 'fa-music';
                elseif (strpos($event_name, 'Singing') !== false) $icon = 'fa-microphone';
                elseif (strpos($event_name, 'Painting') !== false) $icon = 'fa-palette';
                elseif (strpos($event_name, 'Quiz') !== false) $icon = 'fa-brain';
                elseif (strpos($event_name, 'Photography') !== false) $icon = 'fa-camera';
                elseif (strpos($event_name, 'Comedy') !== false) $icon = 'fa-laugh';
                
                echo "<div class='event-card' onclick='viewRegistrations(\"" . htmlspecialchars($event_name) . "\", \"" . htmlspecialchars($table_name) . "\")'>
                        <h3><i class='fas $icon'></i> " . htmlspecialchars($event_name) . "</h3>
                        <div class='registration-count'>
                            <span class='count-badge'>$count</span>
                            <span>Registrations</span>
                        </div>
                        <button class='view-btn'>
                            <i class='fas fa-eye'></i> View Details
                        </button>
                      </div>";
            }
            
            // Close connection after all queries
            $conn->close();
            ?>
        </div>
    </div>
    
    <!-- Registration Details Modal -->
    <div id="registrationModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 id="modalEventName"></h2>
                <span class="close-modal" onclick="closeModal()">&times;</span>
            </div>
            <button class="download-btn" onclick="downloadExcel()">
                <i class="fas fa-download"></i> Download Excel
            </button>
            <div id="registrationData"></div>
        </div>
    </div>
    
    <script>
        let currentTable = '';
        let currentEventName = '';
        
        function viewRegistrations(eventName, tableName) {
            currentTable = tableName;
            currentEventName = eventName;
            
            document.getElementById('modalEventName').textContent = eventName + ' Registrations';
            
            fetch('get_registrations.php?table=' + encodeURIComponent(tableName))
                .then(response => response.json())
                .then(data => {
                    if (data.error) {
                        alert('Error: ' + data.error);
                        return;
                    }
                    displayRegistrations(data);
                    document.getElementById('registrationModal').style.display = 'block';
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Failed to load registrations. Please check your connection.');
                });
        }
        
        function displayRegistrations(data) {
            const container = document.getElementById('registrationData');
            
            if (data.length === 0) {
                container.innerHTML = '<div class="no-data"><i class="fas fa-inbox" style="font-size: 3rem; margin-bottom: 1rem;"></i><br><strong>No registrations yet for this event</strong></div>';
                return;
            }
            
            let html = '<table class="data-table"><thead><tr>';
            html += '<th>S.No</th>';
            html += '<th>Name</th>';
            html += '<th>Email</th>';
            html += '<th>Phone</th>';
            html += '<th>College</th>';
            html += '<th>Department</th>';
            html += '<th>Year</th>';
            html += '<th>Team Size</th>';
            html += '<th>Team Members</th>';
            html += '<th>Gaming Type</th>';
            html += '<th>Comments</th>';
            html += '<th>Date</th>';
            html += '</tr></thead><tbody>';
            
            data.forEach((row, index) => {
                html += '<tr>';
                html += '<td><strong>' + (index + 1) + '</strong></td>';
                html += '<td>' + escapeHtml(row.full_name || 'N/A') + '</td>';
                html += '<td>' + escapeHtml(row.email || 'N/A') + '</td>';
                html += '<td>' + escapeHtml(row.phone || 'N/A') + '</td>';
                html += '<td>' + escapeHtml(row.college || 'N/A') + '</td>';
                html += '<td>' + escapeHtml(row.department || 'N/A') + '</td>';
                html += '<td>' + escapeHtml(row.year || 'N/A') + '</td>';
                html += '<td>' + escapeHtml(row.team_size || 'N/A') + '</td>';
                html += '<td>' + escapeHtml(row.team_members || 'N/A') + '</td>';
                html += '<td>' + escapeHtml(row.gaming_type || 'N/A') + '</td>';
                html += '<td>' + escapeHtml(row.comments || 'N/A') + '</td>';
                html += '<td>' + new Date(row.registration_date).toLocaleString() + '</td>';
                html += '</tr>';
            });
            
            html += '</tbody></table>';
            container.innerHTML = html;
        }
        
        function escapeHtml(text) {
            const div = document.createElement('div');
            div.textContent = text;
            return div.innerHTML;
        }
        
        function closeModal() {
            document.getElementById('registrationModal').style.display = 'none';
        }
        
        function downloadExcel() {
            window.location.href = 'download_excel.php?table=' + encodeURIComponent(currentTable) + '&event=' + encodeURIComponent(currentEventName);
        }
        
        window.onclick = function(event) {
            const modal = document.getElementById('registrationModal');
            if (event.target == modal) {
                closeModal();
            }
        }
    </script>
</body>
</html>