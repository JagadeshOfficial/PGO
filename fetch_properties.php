<?php
// Connect to your database
$conn = new mysqli("localhost", "root", "12345", "havenist");
// Get the filter data from the AJAX request
$data = json_decode(file_get_contents('php://input'), true);
?>
<?php
// Check if 'propertyType' is set in the GET request
if (isset($_GET['propertyType']) && !empty($_GET['propertyType'])) {
    $propertyType = $_GET['propertyType'];

    // Optional: Sanitize the input to avoid SQL injection
    $propertyType = htmlspecialchars($propertyType);

    // Perform your query using the $propertyType
    // Example (assuming you have a database connection established):
    $query = "SELECT * FROM pg_hostels WHERE type = '$propertyType'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Process the results and display the properties
        while ($row = mysqli_fetch_assoc($result)) {
            // Output the property data here
            echo "<div>" . $row['property_name'] . "</div>";
        }
    } else {
        echo "Error executing query: " . mysqli_error($conn);
    }
} else {
    echo "Invalid property type selected.";
}
?>

<?php
$propertyType = $data['propertyType'];
$priceRange = $data['priceRange'];
$sharingTypes = $data['sharingTypes'];
$facilities = $data['facilities'];
$availability = $data['availability'];

// Set the table name based on the property type
$tableName = '';
if ($propertyType == 'PG/Hostel') {
    $tableName = 'pg_hostels';
} elseif ($propertyType == 'Flatmates') {
    $tableName = 'flatmates';
} elseif ($propertyType == 'hotelbooking') {
    $tableName = 'hotelbooking';
}

if (!empty($tableName)) {
    // Construct the SQL query
    $sql = "SELECT * FROM $tableName WHERE 1=1";

    if (!empty($priceRange)) {
        $sql .= " AND price <= $priceRange";
    }
    if (!empty($sharingTypes)) {
        $sharingTypes = implode("','", $sharingTypes); // Convert array to comma-separated values
        $sql .= " AND sharing_type IN ('$sharingTypes')";
    }
    if (!empty($facilities)) {
        foreach ($facilities as $facility) {
            $sql .= " AND facilities LIKE '%$facility%'";
        }
    }
    if (!empty($availability)) {
        $sql .= " AND availability = '$availability'";
    }

    // Execute the query and return the results
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Loop through results and echo the HTML content
        while ($row = $result->fetch_assoc()) {
            echo "<div class='property-item'>";
            // Add other property details like images, description, etc.
            echo "<h3>" . $row['propertyType'] . "</h3>";
            echo "<p>Price: " . $row['price'] . "</p>";
            echo "<p>Facilities: " . $row['facilities'] . "</p>";
            echo "</div>";
        }
    } else {
        echo "No properties found.";
    }
} else {
    echo "Invalid property type selected.";
}

$conn->close();
