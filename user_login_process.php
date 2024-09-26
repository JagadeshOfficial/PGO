<?php
session_start();
include('db_connect.php');  // Ensure this path is correct

// Capture login data
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

// Verify user login credentials
if (!empty($email) && !empty($password)) {
    // Use the correct table for users (e.g., `users`)
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    
    if ($stmt === false) {
        echo json_encode(['status' => 'error', 'message' => 'SQL preparation failed']);
        exit();
    }
    
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verify hashed password
        if (password_verify($password, $row['password'])) {
            $_SESSION['userLoggedIn'] = true; // Set session for logged in user
            echo json_encode(['status' => 'success']); // Success response for AJAX
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Invalid password']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid email']);
    }
    $stmt->close();
} else {
    echo json_encode(['status' => 'error', 'message' => 'Email and password are required']);
}

$conn->close();
?>
