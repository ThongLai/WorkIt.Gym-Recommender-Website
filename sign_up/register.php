<?php
require_once 'config.php';

// Fetch values from the form
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Encrypt password before storing in database (for security)
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert data into the database
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    // Registration successful, redirect to login form
    header("Location: login.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
?>
