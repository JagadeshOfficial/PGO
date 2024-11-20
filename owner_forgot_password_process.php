<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

session_start(); // Start session

// Database connection
include 'db_connect.php'; // Replace with your actual database connection file

header('Content-Type: application/json'); // Set the content type to JSON

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    if (empty($email)) {
        echo json_encode(['status' => 'error', 'message' => 'Email is required.']);
        exit;
    }

    $token = bin2hex(random_bytes(50)); // Generate a unique token

    // Check if the email exists in the database
    $stmt = $conn->prepare("SELECT * FROM owners WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Store the token in the database
        $stmt = $conn->prepare("UPDATE owners SET reset_token = ?, token_expiry = DATE_ADD(NOW(), INTERVAL 1 HOUR) WHERE email = ?");
        $stmt->bind_param("ss", $token, $email);
        $stmt->execute();

        // Send the email using PHPMailer
        $resetLink = "http://localhost:8000/owner_reset_password.php?token=" . urlencode($token);
        $subject = "Password Reset Request";
        $message = "Dear User,\n\nClick the following link to reset your password:\n\n" . $resetLink . "\n\nIf you did not request this, please ignore this email.\n\nRegards,\nHavenist";

        $mail = new PHPMailer(true); // Enable exceptions for error handling
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'jagadeswararaovana@gmail.com'; // Your Gmail address
            $mail->Password = 'vienyxievujtsiit'; // Use an App Password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('jagadeswararaovana@gmail.com', 'Havenist');
            $mail->addAddress($email);
            $mail->Subject = $subject;
            $mail->Body = $message;

            $mail->send();
            echo json_encode(['status' => 'success', 'message' => 'Reset link sent to your email.']);
        } catch (Exception $e) {
            echo json_encode(['status' => 'error', 'message' => 'Failed to send email: ' . $mail->ErrorInfo]);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Email not found.']);
    }
}
?>
