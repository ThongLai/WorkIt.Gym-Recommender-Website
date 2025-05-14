<?php
/**
 * Configuration file for WorkIt Gym
 */

// Server configurations
$FLASK_SERVER_ADDRESS = "http://127.0.0.1:5000/";

// // Database configuration
// define('DB_SERVER', 'workit-db.cvqm4e6immcp.eu-west-2.rds.amazonaws.com');
// define('DB_USERNAME', 'admin');
// define('DB_PASSWORD', 'cos+cos=2coscos');
// define('DB_NAME', 'workit-db');

// Site settings
$SITE_TITLE = "WorkIT - AI Fitness Recommender";
$SITE_DESCRIPTION = "Personalized workout recommendations powered by AI";

// Error reporting (turn off in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Session handling
session_start();

// // Database connection
// $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// // Check connection
// if($conn === false){
//     die("ERROR: Could not connect to database. " . $conn->connect_error);
// }
// ?> 