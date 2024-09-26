<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "12345";
    $dbname = "pghostels";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    // Get form data and sanitize
    $hostelName = $conn->real_escape_string($_POST['hostelName']);
    $localities = $conn->real_escape_string($_POST['localities']);
    $city = $conn->real_escape_string($_POST['city']);
    $amount = $conn->real_escape_string($_POST['amount']);
    $facilities = $conn->real_escape_string($_POST['facilities']);
    $contact = $conn->real_escape_string($_POST['contact']);
    $propertyType = $conn->real_escape_string($_POST['propertyType']);
    $availability = $conn->real_escape_string($_POST['availability']);
    // Handle images upload
    $image_paths = [];
    $target_dir_images = "uploads/";
    foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
        $file_name = basename($_FILES['images']['name'][$key]);
        $target_file = $target_dir_images . $file_name;
        if (move_uploaded_file($tmp_name, $target_file)) {
            $image_paths[] = $target_file;
        }
    }
    $images = implode(',', $image_paths);

    // Handle videos upload
    $video_paths = [];
    $target_dir_videos = "uploads/";
    foreach ($_FILES['videos']['tmp_name'] as $key => $tmp_name) {
        if ($_FILES['videos']['error'][$key] === UPLOAD_ERR_NO_FILE) {
            continue; // No video uploaded for this input
        }
        $file_name = basename($_FILES['videos']['name'][$key]);
        $target_file = $target_dir_videos . $file_name;
        if (move_uploaded_file($tmp_name, $target_file)) {
            $video_paths[] = $target_file;
        }
    }
    $videos = implode(',', $video_paths);

    // Insert data into database
    $sql = "INSERT INTO properties (hostelName, localities, city, amount, facilities, images, videos, contact,availability)
            VALUES ('$hostelName', '$localities', '$amount', '$facilities', '$images', '$videos', '$contact','$propertyType', '$availability')";

    if ($conn->query($sql) === TRUE) {
        echo "New property added successfully";
        // Optionally, redirect to a success page
        // header("Location: success_page.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
