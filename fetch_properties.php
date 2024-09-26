<?php
include 'db_connect.php';

// Fetch all properties
$sql = "SELECT * FROM properties";
$result = $conn->query($sql);

$properties = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $properties[] = array(
            'title' => $row['hostelName'],
            'details' => array(
                'address' => $row['localities'],
                'price' => $row['amount'],
                'size' => $row['facilities']
            ),
            'image' => $row['images'] ? explode(',', $row['images'])[0] : null, // Assuming the first image for simplicity
            'contact' => $row['contact']
        );
    }
}

header('Content-Type: application/json');
echo json_encode($properties);

$conn->close();