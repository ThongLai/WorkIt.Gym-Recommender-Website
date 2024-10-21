<?php
session_start();

// Database connection
$servername = "";
$username = "";
$password = "";
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch values from the form
$email = $_POST['email'];
$password = $_POST['password'];

// Retrieve user data from the database
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User found
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        // Password is correct, set session variables for logged-in user
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        // Redirect to dashboard or any other page after login
        header("Location: dashboard.html");
        exit();
    } else {
        // Invalid password
        echo "Invalid password.";
    }
} else {
    // User not found
    echo "User not found.";
}

// Close database connection
$conn->close();
?>