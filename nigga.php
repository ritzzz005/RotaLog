
<?php
session_start();
?>
<?php

// Include database connection
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the email and password from the form
    $email = $_POST['email'];
    $input_password = $_POST['password'];

    // Sanitize inputs to prevent SQL injection
    $email = $conn->real_escape_string($email);
    $input_password = $conn->real_escape_string($input_password);

    // Query to find the user by email
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetch user data
        $user = $result->fetch_assoc();

        // Compare plaintext passwords (NOT secure, but as per your request)
        if ($input_password === $user['password']) {
            echo "Login successful! Welcome, " . htmlspecialchars($email);
            
            // Start a session or redirect
            $_SESSION['email'] = $email; 
            $_SESSION['Access'] = $access;
            header("Location: index.php");
            exit;
        } else {
            echo "<script>alert('Incorrect password. Please try again.');</script>";
        }
    } else {
        echo "<script>alert('Email not found. Please sign up.');</script>";
    }

    $stmt->close(); // Close the prepared statement
}

$conn->close(); // Close the database connection
?>
