<?php
// Database connection
$servername = "localhost";
$username = "root"; // Adjust if needed
$password = "1234"; // Adjust if needed
$dbname = "pghostels"; // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Determine which form was submitted
$form_type = $_POST['form_type'];

if ($form_type === 'hotelbooking') {
    // Collect hotel booking form data
    $hotelName = $_POST['hotelName'];
    $location = $_POST['localities'];
    $sharingType = $_POST['sharingType'];
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

    $price = $_POST['Price'];
    $facilities = $_POST['facilities'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];
    $propertyType = $_POST['propertyType'];
    $availability = $_POST['availability'];
    $description = $_POST['description'];

    // SQL to insert hotel booking data
    $sql = "INSERT INTO hotelbooking (hotelName, localities, sharingType, images, videos, price, facilities, contact, city, propertyType, availability, description) 
            VALUES ('$hotelName', '$location', '$sharingType', '$images', '$videos', '$price', '$facilities', '$contact', '$city', '$propertyType', '$availability', '$description')";

} elseif ($form_type === 'pgHostel') {
    // Collect PG/Hostel form data
    $hostelName = $_POST['hostelName'];
    $localities = $_POST['localities'];
    $sharingType = $_POST['Sharing_Type'];
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

    $amount = $_POST['amount'];
    $facilities = $_POST['facilities'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];
    $propertyType = $_POST['propertyType'];
    $availability = $_POST['availability'];
    $description = $_POST['description'];

    // SQL to insert PG/Hostel data
    $sql = "INSERT INTO properties (hostelName, localities, Sharing_Type, images, videos,  amount, facilities, contact, city, propertyType, availability, description) 
            VALUES ('$hostelName', '$localities', '$sharingType', '$images', '$videos',  '$amount', '$facilities', '$contact', '$city', '$propertyType', '$availability', '$description')";

} elseif ($form_type === 'flatmates') {
    // Collect flatmates form data
    $flatmateName = $_POST['flatmateName'];
    $localities = $_POST['localities'];
    $sharingType = $_POST['sharingType'];
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

    $price = $_POST['hotelBookingPrice'];
    $facilities = $_POST['facilities'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];
    $propertyType = $_POST['propertyType'];
    $availability = $_POST['availability'];
    $description = $_POST['description'];

    // SQL to insert flatmates data
    $sql = "INSERT INTO flatmates (flatmateName, localities, sharingType, images, videos, price, facilities, contact, city, propertyType, availability, description) 
            VALUES ('$flatmateName', '$localities', '$sharingType', '$images', '$videos', '$price', '$facilities', '$contact', '$city', '$propertyType', '$availability','$description')";
}

// Execute the query and check if successful
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();

