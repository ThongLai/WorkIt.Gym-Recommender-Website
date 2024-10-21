<?php
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
