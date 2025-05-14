<?php
/**
 * Test script for Flask server connection
 * Used for debugging and verification of AI recommender functionality
 */

// Include necessary files
require_once 'config.php';   // Contains Flask server address
require_once 'utils.php';    // Contains testing functions

// Page header
echo '<!DOCTYPE html>
<html>
<head>
    <title>Flask Server Connection Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        h1, h2 {
            color: #c11325;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        .btn {
            display: inline-block;
            background-color: #c11325;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            margin: 10px 0;
        }
        .btn:hover {
            background-color: #a01020;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Flask Server Connection Test</h1>
        <p>This page tests the connection to the Flask server that powers the AI Recommender.</p>
';

// Run the test with default parameters
$testResult = testFlaskConnection();

// Display the results
displayFlaskTestResults($testResult);

// Add back link
echo '<p><a href="../index.php" class="btn">Return to Homepage</a></p>';

// Page footer
echo '
    </div>
</body>
</html>';
?> 