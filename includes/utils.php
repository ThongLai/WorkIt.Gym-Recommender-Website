<?php
/**
 * Utility functions for the WorkIt Gym website
 * Contains helper functions for testing and diagnostics
 */

/**
 * Tests connection to Flask server
 * 
 * @param string $url The URL to test (optional)
 * @param array $params Optional parameters to include in the request
 * @return array Result of the test containing success status and response data
 */
function testFlaskConnection($url = null, $params = []) {
    global $FLASK_SERVER_ADDRESS;
    
    if ($url === null) {
        $url = $FLASK_SERVER_ADDRESS;
        
        // Add test parameters if none provided
        if (empty($params)) {
            $params = [
                'workout-type' => 'Strength',
                'body-part' => 'Abdominals',
                'equipment' => 'Bands',
                'level' => 'Beginner'
            ];
        }
    }
    
    // Append parameters to URL
    if (!empty($params)) {
        $queryString = http_build_query($params);
        $url = $url . (strpos($url, '?') !== false ? '&' : '?') . $queryString;
    }
    
    $result = [
        'success' => false,
        'url' => $url,
        'response' => null,
        'decoded' => null,
        'error' => null
    ];
    
    // Try to get response with error handling
    $context = stream_context_create([
        'http' => [
            'ignore_errors' => true,
            'timeout' => 10 // Set timeout to 10 seconds
        ]
    ]);
    
    try {
        $response = @file_get_contents($url, false, $context);
        
        if ($response === false) {
            $result['error'] = 'Failed to connect to Flask server';
            $result['headers'] = isset($http_response_header) ? $http_response_header : [];
        } else {
            $result['success'] = true;
            $result['response'] = $response;
            
            $decoded = json_decode($response, true);
            if ($decoded === null) {
                $result['error'] = 'Failed to parse JSON response: ' . json_last_error_msg();
            } else {
                $result['decoded'] = $decoded;
            }
        }
    } catch (Exception $e) {
        $result['error'] = $e->getMessage();
    }
    
    return $result;
}

/**
 * Displays Flask test results in a formatted way
 * 
 * @param array $testResult The result from testFlaskConnection
 * @param bool $showOutput Whether to echo the output (default true)
 * @return string The formatted output
 */
function displayFlaskTestResults($testResult, $showOutput = true) {
    $output = '<div style="background: #f8f9fa; padding: 15px; margin: 15px 0; border-radius: 4px; font-family: monospace; font-size: 14px;">';
    $output .= '<h3>Flask Server Connection Test</h3>';
    $output .= '<p><strong>URL:</strong> ' . htmlspecialchars($testResult['url']) . '</p>';
    $output .= '<p><strong>Status:</strong> ' . ($testResult['success'] ? '<span style="color: green;">SUCCESS</span>' : '<span style="color: red;">FAILED</span>') . '</p>';
    
    if ($testResult['error']) {
        $output .= '<p><strong>Error:</strong> ' . htmlspecialchars($testResult['error']) . '</p>';
    }
    
    if (isset($testResult['headers'])) {
        $output .= '<h4>Response Headers:</h4>';
        $output .= '<pre style="background: #eee; padding: 10px; overflow: auto; max-height: 200px;">';
        $output .= htmlspecialchars(print_r($testResult['headers'], true));
        $output .= '</pre>';
    }
    
    if ($testResult['response']) {
        $output .= '<h4>Raw Response:</h4>';
        $output .= '<pre style="background: #eee; padding: 10px; overflow: auto; max-height: 200px;">';
        $output .= htmlspecialchars($testResult['response']);
        $output .= '</pre>';
    }
    
    if ($testResult['decoded']) {
        $output .= '<h4>Parsed Response:</h4>';
        $output .= '<pre style="background: #eee; padding: 10px; overflow: auto; max-height: 200px;">';
        $output .= htmlspecialchars(print_r($testResult['decoded'], true));
        $output .= '</pre>';
    }
    
    $output .= '</div>';
    
    if ($showOutput) {
        echo $output;
    }
    
    return $output;
}
?> 