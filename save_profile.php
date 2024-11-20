<?php
session_start();
include('db_connect.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_SESSION['email'])) {
        // Redirect to login if email is not in session
        header('Location: User_Login.html');
        exit();
    }

    $email = $_SESSION['email'];
    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);

    // Separate first and last name
    $name_parts = explode(' ', $name, 2); // Limit to two parts
    $first_name = $name_parts[0];
    $last_name = isset($name_parts[1]) ? $name_parts[1] : '';

    $photoName = null;

    // Handle profile photo upload
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
        $allowedTypes = ['image/jpeg', 'image/png', 'image/jpg'];
        $fileType = mime_content_type($_FILES['photo']['tmp_name']);

        if (in_array($fileType, $allowedTypes)) {
            $photoName = time() . '_' . basename($_FILES["photo"]["name"]);
            $targetDir = "uploads/";
            $targetFilePath = $targetDir . $photoName;

            // Move uploaded file
            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFilePath)) {
                // Successfully uploaded photo
            } else {
                echo "Error uploading the photo.";
                exit();
            }
        } else {
            echo "Invalid file type. Only JPG and PNG are allowed.";
            exit();
        }
    }

    // Update the database
    if ($photoName) {
        $query = "UPDATE users SET first_name = ?, last_name = ?, phone = ?, profile_photo = ? WHERE email = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('sssss', $first_name, $last_name, $phone, $photoName, $email);
    } else {
        $query = "UPDATE users SET first_name = ?, last_name = ?, phone = ? WHERE email = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ssss', $first_name, $last_name, $phone, $email);
    }

    // Execute query and check for errors
    if ($stmt->execute()) {
        // Update session values (if necessary)
        $_SESSION['first_name'] = $first_name;
        $_SESSION['last_name'] = $last_name;

        // Redirect back to profile page with a success message
        header('Location: user_profile.php?update=success');
        exit();
    } else {
        echo "Error updating profile: " . $stmt->error;
    }
}
?>
