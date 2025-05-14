<?php
session_start();
require_once 'config.php';

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