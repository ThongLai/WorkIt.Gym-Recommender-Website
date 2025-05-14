<?php
/**
 * AI Recommender System
 * Handles form processing and API calls for workout recommendations
 */

// Function to get workout recommendations
function getWorkoutRecommendations($workoutType, $bodyPart, $equipment, $level) {
    global $FLASK_SERVER_ADDRESS;
    
    // Build API URL
    $url = $FLASK_SERVER_ADDRESS . 
           "?workout-type=" . urlencode($workoutType) . 
           "&body-part=" . urlencode($bodyPart) . 
           "&equipment=" . urlencode($equipment) . 
           "&level=" . urlencode($level);
    
    // Call the API 
    $response = @file_get_contents($url);
    
    if ($response === false) {
        return ['success' => false, 'error' => 'API request failed'];
    } else {
        // Parse JSON response
        $data = json_decode($response, true);
        return ['success' => true, 'data' => $data];
    }
}

// Process form submission
function processRecommenderForm() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recommend'])) {
        // Store input data
        $workoutType = $_POST['workout-type'];
        $bodyPart = $_POST['body-part'];
        $equipment = $_POST['equipment'];
        $level = $_POST['level'];
        
        // Input validation
        if (empty($workoutType) || empty($bodyPart) || empty($equipment) || empty($level)) {
            return [
                'success' => false,
                'processed' => true,
                'error' => 'All fields are required',
                'input' => [
                    'workout-type' => $workoutType,
                    'body-part' => $bodyPart,
                    'equipment' => $equipment,
                    'level' => $level
                ]
            ];
        }
        
        // Get recommendations
        $recommendations = getWorkoutRecommendations($workoutType, $bodyPart, $equipment, $level);
        
        return [
            'success' => $recommendations['success'],
            'processed' => true,
            'error' => $recommendations['success'] ? null : $recommendations['error'],
            'data' => $recommendations['success'] ? $recommendations['data'] : null,
            'input' => [
                'workout-type' => $workoutType,
                'body-part' => $bodyPart,
                'equipment' => $equipment,
                'level' => $level
            ]
        ];
    }
    
    return ['success' => false, 'processed' => false];
}

// Render input summary
function renderInputSummary($input) {
    echo '<div class="input-summary">';
    echo '<h2>Input Features</h2>';
    echo '<strong>Workout Type:</strong> ' . $input['workout-type'] . '<br>';
    echo '<strong>Body Part:</strong> ' . $input['body-part'] . '<br>';
    echo '<strong>Equipment:</strong> ' . $input['equipment'] . '<br>';
    echo '<strong>Level:</strong> ' . $input['level'];
    echo '</div>';
}

// Render error message
function renderErrorMessage($message) {
    echo '<div class="error-message">';
    echo '<i class="fas fa-exclamation-triangle"></i> ';
    echo htmlspecialchars($message ?: 'No exercises found that match your criteria. Try different selections.');
    echo '</div>';
}

// Render results table
function renderResultsTable($data) {
    if (empty($data)) {
        renderErrorMessage('No results found');
        return;
    }
    
    echo '<h2 style="color: #333;">Recommended Workouts</h2>';
    
    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>Title</th>';
    echo '<th>Description</th>';
    echo '<th>Type</th>';
    echo '<th>Body Part</th>';
    echo '<th>Equipment</th>';
    echo '<th>Level</th>';
    echo '<th>Rating</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    
    foreach ($data as $row) {
        echo '<tr>';
        echo '<td>' . $row['ID'] . '</td>';
        echo '<td><a href="video.php?id=' . $row['ID'] . '">' . $row['Title'] . '</a></td>';
        echo '<td>' . $row['Desc'] . '</td>';
        echo '<td>' . $row['Type'] . '</td>';
        echo '<td>' . $row['BodyPart'] . '</td>';
        echo '<td>' . $row['Equipment'] . '</td>';
        echo '<td>' . $row['Level'] . '</td>';
        echo '<td>' . number_format($row['Rating'], 2) . '</td>';
        echo '</tr>';
    }
    
    echo '</tbody>';
    echo '</table>';
} 