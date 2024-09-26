<?php
session_start();
include('db_connect.php');

// Capture login data
$email = $_POST['email'];
$password = $_POST['password'];

// Verify owner login credentials
if (!empty($email) && !empty($password)) {
    $stmt = $conn->prepare("SELECT * FROM owners WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verify hashed password
        if (password_verify($password, $row['password'])) {
            $_SESSION['ownerLoggedIn'] = true;
            echo json_encode(['status' => 'success']);
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
