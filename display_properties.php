
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Search</title>
    <style>
        html, body {
            height: 100%;
            font-family: Arial, sans-serif;
        }

        body {
            background-image: url('Images/Body_background.jpeg'); /* Update the path */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            overflow-x: hidden; /* Prevent horizontal scrolling */
            overflow-y: auto; /* Ensure vertical scrolling is allowed if needed */
            line-height: 1.5;
        }

        /* Header Styles */
        .header {
            background-color: #f8f9fa;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .header nav a {
            margin-left: 20px;
            text-decoration: none;
            color: #333;
        }

        .bold-link {
            color: black;
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            color: #000 !important;
        }

        /* Logo Styles */
        .Logo {
            display: flex;
            align-items: center;
            text-align: center; /* Center align the content */
        }

        .Logo img {
            max-width: 200%; /* Make sure the image does not exceed its container's width */
            height: max-content; /* Maintain the image's aspect ratio */
            border: 0; /* Remove any default border */
            display: block; /* Remove any inline spacing issues */
            margin: 0px; /* Center align the image horizontally */
            margin-left: 2px;
            max-height: 55px;
            margin-right: 15px;
        }

        nav {
            display: flex;
            align-items: center;
        }

        nav a {
            margin: 0;
            text-decoration: none;
            color: #007bff;
        }

        /* Property Owner Styles */
        .property-owner {
            margin-top: 20px;
        }

        .property-owner button, .property-owner-btn {
            padding: 10px 20px;
            background-color: #5f99e6;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: inline-block;
            text-align: center;
        }

        /* Footer Styles */
        .footer {
            background-color: #343a40;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .footer a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
        }

        /* Pay Rent Box Styles */
        .pay-rent-box {
            display: flex;
            align-items: center;
            background-color: #e9ecef;
            padding: 10px;
            border-radius: 5px;
        }

        .pay-rent-box i {
            margin-right: 8px;
        }

        /* Dropdown Menu Styles */
        .dropdown {
            position: page; /* Position relative to contain the absolutely positioned dropdown menu */
        }

        .dropdown-menu {
            position: absolute; /* Ensure the dropdown is positioned absolutely relative to its container */
            top: 100%; /* Position the dropdown directly below the dropdown toggle */
            left: 0; /* Align the dropdown menu to the left of its container */
            right: auto; /* Remove right positioning to avoid shifting */
            width: 200px; /* Set a specific width for the dropdown menu */
            max-height: 300px; /* Add a max-height to prevent it from growing too large */
            overflow-y: visible; /* Add scrolling if the content exceeds the max-height */
            background-color: white; /* Ensure the dropdown has a proper background */
            border: 1px solid #ddd; /* Add border to match the design */
            border-radius: 2px; /* Round the corners */
            padding: 0; /* Remove default padding if necessary */
            margin: 0; /* Remove default margin if necessary */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add shadow for better visibility */
            z-index: 100; /* Ensure the dropdown appears above other elements */
        }

        .dropdown-menu a {
            background-color: #ff5a60;
            border: none;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .dropdown-menu a:hover {
            background-color: #f1f1f1; /* Highlight the item on hover */
        }

        .custom-dropdown-btn {
            width: 150px; /* Adjust the width as needed */
            padding: 9px 5px; /* Adjust padding as needed */
            font-size: 16px; /* Adjust font-size as needed */
        }
        .dropdown-item:hover {
            background-color: #e04a50;
        }

        /* Search Bar Styles */
    .search-bar {
        display: flex;
        align-items: right;
        justify-content: space-between; /* Space out elements */
        padding: 10px;
        background-color: rgba(260, 255, 220, 0.4); /* Background color of the box */
        border: 3px solid #333; /* Light black border */
        border-radius: 30px; /* Rounded corners */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Optional: adds a subtle shadow */
        max-width: 670px; /* Optional: set a max width for the box */
        margin: 5px auto; /* Center the box with some margin */
    }

    .search-bar input {
        width: 300px;
        padding: 5px;
        padding-left: 70px;
        font-size: 1em;
        border: 1px solid #0e0e0e;
        border-radius: 20px;
        outline: none;
    }

    .search-bar button {
        padding: 10px 15px;
        font-size: 1em;
        border: none;
        background-color: #ee4e4e;
        color: black;
        border-radius: 20px;
        margin-left: 267px;
        margin-top: 6px;
    }

    .search-bar .search-button {
        background-color: #ff585d;
        color: white;
    }

    .search-bar .search-button:hover {
        background-color: #cc454a;
    }

.save-search {
    margin-left: 10px;
    color: #ff585d;
    text-decoration: none;
    font-weight: bold;
}

.save-search:hover {
    text-decoration: underline;
}

/* Actions Styles */
.actions {
    display: flex;
    justify-content: flex-end;
    padding: 0px;
    padding-right: 50px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.actions button {
    margin-left: 10px;
    padding: 10px 20px;
    border: none;
    background-color: #00aaff;
    color: white;
    cursor: pointer;
    border-radius: 4px;
}

.actions button:hover {
    background-color: #0088cc;
}

/* Search Box Styles */
.search-box {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    margin-bottom: 20px;
}

.search-box select, .search-box input, .search-box button {
    padding: 10px;
    margin: 5px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.search-box button {
    background-color: #ff5a5f;
    color: white;
    border: none;
    cursor: pointer;
}

.search-box select, .search-box input {
    margin-right: 10px;
}
/* Footer Styles */
.footer {
    background-color: #343a40;
    color: white;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.footer a {
    color: white;
    text-decoration: none;
    margin-left: 20px;
}

        /* Property Type Buttons Styles */
        .property-type {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .property-type button {
            width: 32%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f1f1f1;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .property-type button:hover, .property-type button.active {
            background-color: #007bff;
            color: #fff;
        }

        /* Submit Button Styles */
        .submit-btn {
            background-color: #ff5a60;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            width: 100%;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #e04a50;
        }
        /* Filters Styles */
        .container {
            display: flex;
            flex-direction: row;
            width: 100%;
            padding: 20px;
            padding-left: 50px;
            padding-top: 20px;
        }
        .filters {
            width: 35%;
            padding: 13px; 
            padding: 20px;
            background-color: #e1ed7c;
            height: 80vh; /* Fixed height for scrolling */
            overflow-y: auto; /* Enable vertical scrolling */
            border: 1px solid #333;
            border-radius: 20px;
        }
        .property-list{
            width: 65%;
            padding: 13px; 
            background-color: lightgray;
            height: 80vh; /* Fixed height for scrolling */
            overflow-y: auto; /* Enable vertical scrolling */
            border: 1px solid #333;
            border-radius: 20px;
        }

        .filters h3 {
            margin-top: -10px;
        }

        .filter-group {
            margin-bottom: 20px;
        }

        .filter-group label {
            display: flex;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .filter-group input[type="checkbox"] {
            margin-right: 2px;
        }

        .filter-group input[type="range"] {
            width: 100%;
        }

        /* Dropdown Filter Styles */
        .AllTypes, .AllLocations {
            margin-left: -180px;
            
        }

        #filter-label {
            display: flex;
            justify-content: space-between;
            margin-left: 50px;
            margin-right: 10px;
            color: #333;
        }
        .search-bar{
            width: 100%;
        }
        .hidden { 
            display: none;
         }
         .amenities-section {
            width: 96%;
            max-width: 800px;
            margin: 20px;
            padding: 20px;
            border: 1px solid #eaeaea;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="Logo">
            <a href="index.html"><img src="Images/Havenist_transparent.png" alt="Company Logo"></a>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link pay-rent-box bold-link" href="pay_rent.html">
                            <i class="fas fa-credit-card"></i> Pay Rent
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link property-owner-btn" href="Property_Owners.html">For Property Owners</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="signupDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sign up
                        </a>
                        <div class="dropdown-menu" aria-labelledby="signupDropdown">
                            <a class="dropdown-item" href="User_Signup.html">User Signup</a>
                            <a class="dropdown-item" href="Customer_signup.html">Customer Signup</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="loginDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Log in
                        </a>
                        <div class="dropdown-menu" aria-labelledby="loginDropdown">
                            <a class="dropdown-item" href="User_Login.html">User Login</a>
                            <a class="dropdown-item" href="Customer_Login.html">Customer Login</a>
                        </div>
                    </li>
                   <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle custom-dropdown-btn" href="#" id="menuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-menu-button-wide-fill"></i> Menu
                        </a>
                        <div class="dropdown-menu" aria-labelledby="menuDropdown">
                            <a class="dropdown-item" href="About.html">About Us</a>
                            <a class="dropdown-item" href="Property_Owners.html">For Property Owners</a>
                            <a class="dropdown-item" href="Services.html">Services</a>
                            <a class="dropdown-item" href="contact.html">Contact</a>
                        </div>
                    </li>-->
                </ul>
            </div>
         </nav>
    </header>
   <?php
    include 'db_connect.php';

    // Initialize search variables
    $hostelName = isset($_GET['hostelName']) ? $_GET['hostelName'] : '';
    $localities = isset($_GET['localities']) ? $_GET['localities'] : '';
    $propertyType = isset($_GET['propertyType']) ? $_GET['propertyType'] : ''; // Retrieve property type

    // Modify SQL query to include search criteria
    $sql = "SELECT * FROM properties WHERE 1=1";

    if (!empty($hostelName)) {
        $sql .= " AND hostelName LIKE '%" . $conn->real_escape_string($hostelName) . "%'";
    }
    if (!empty($localities)) {
        $sql .= " AND localities LIKE '%" . $conn->real_escape_string($localities) . "%'";
    }
    if (!empty($propertyType)) {
        $sql .= " AND propertyType = '$propertyType'";
    }

    $result = $conn->query($sql);
?>
  

    <!-- HTML for the search bar -->
   <!-- <div class="search-bar">
        <form method="GET" action="">
            <input type="text" name="hostelName" placeholder="Hostel Name" value="<?php echo htmlspecialchars($hostelName); ?>">
            <input type="text" name="localities" placeholder="localities" value="<?php echo htmlspecialchars($localities); ?>">
            <button type="submit">Search</button>
        </form>
    </div>-->

    <div class="container">
    <div class="filters">
    <h3>Filters</h3>
    <input type="reset" onclick="resetFilters()">
    <!-- PG/Hostel Filters -->

    <div class="filter-group pg-hostel-filters">
        <div>pghostel filters</div>
        <label>Sharing Type</label>
        <input type="checkbox" class="sharing-filter" value="1 Share" onchange="applyFilters()"> 1 Share
        <input type="checkbox" class="sharing-filter" value="2 Share" onchange="applyFilters()"> 2 Share
        <input type="checkbox" class="sharing-filter" value="3 Share" onchange="applyFilters()"> 3 Share
        <input type="checkbox" class="sharing-filter" value="4 Share" onchange="applyFilters()"> 4 Share
        <input type="checkbox" class="sharing-filter" value="5 Share" onchange="applyFilters()"> 5 Share
    </div>
    <div class="filter-group pg-hostel-filters">
        <label>Price Range</label>
        <input type="range" id="price-range" min="0" max="100000" value="5000" onchange="applyFilters()">
        <span id="price-value">5000</span>
    </div>
    
    <div class="filter-group pg-hostel-filters">
        <label>Facilities</label>
        <input type="checkbox" class="facility-filter" value="Wi-Fi" onchange="applyFilters()"> Wi-Fi
        <input type="checkbox" class="facility-filter" value="AC Rooms" onchange="applyFilters()"> AC Rooms
        <input type="checkbox" class="facility-filter" value="Geyser" onchange="applyFilters()"> Geyser
        <input type="checkbox" class="facility-filter" value="Cupboards" onchange="applyFilters()"> Cupboards
    </div>
    <div class="filter-group pg-hostel-filters">
        <label>Availability</label>
        <input type="radio" name="pg-availability" class="availability-filter"  value="Immediate" onchange="applyFilters()"> Immediate
        <input type="radio" name="pg-availability" class="availability-filter" value="Within a week" onchange="applyFilters()"> Within a week
        <input type="radio" name="pg-availability" class="availability-filter" value="Within a month" onchange="applyFilters()"> Within a month
        <input type="radio" name="pg-availability" class="availability-filter" value="After a month" onchange="applyFilters()"> After a month
    </div>
    <!-- Flatmates Filters -->
    <div class="filter-group flatmates-filters">
        <label>BHK Type</label>
        <input type="checkbox" class="bhk-filter" value="1 BHK" onchange="applyFilters()"> 1 BHK
        <input type="checkbox" class="bhk-filter"  value="2 BHK" onchange="applyFilters()"> 2 BHK
        <input type="checkbox" class="bhk-filter"  value="3 BHK" onchange="applyFilters()"> 3 BHK
    </div>
    <div class="filter-group flatmates-filters">
        <label>Property Status</label>
        <input type="radio" name="status" class="property-filter" value="Under Construction" onchange="applyFilters()"> Under Construction
        <input type="radio" name="status" class="property-filter" value="Ready" onchange="applyFilters()" checked > Ready
    </div>
    <div class="filter-group flatmates-filters">
        <label>Furnishing</label>
        <input type="checkbox" class="furnishing" value="Full" onchange="applyFilters()"> Full
        <input type="checkbox" class="furnishing" value="Semi" onchange="applyFilters()"> Semi
        <input type="checkbox" class="furnishing" value="None" onchange="applyFilters()"> None
    </div>
    <div class="filter-group flatmates-filters">
        <label>Parking</label>
        <input type="checkbox" class="parking-filter" value="2 Wheeler" onchange="applyFilters()"> 2 Wheeler
        <input type="checkbox" class="parking-filter" value="4 Wheeler" onchange="applyFilters()"> 4 Wheeler
    </div>

    <!-- Hotel BOOKing Filters -->
    <div class="filter-group hotelbooking-filters">
        <label>BHK Type</label>
        <input type="checkbox" class="bhk-filter" value="1 BHK" onchange="applyFilters()"> 1 BHK
        <input type="checkbox" class="bhk-filter"  value="2 BHK" onchange="applyFilters()"> 2 BHK
        <input type="checkbox" class="bhk-filter"  value="3 BHK" onchange="applyFilters()"> 3 BHK
    </div>
    <div class="filter-group hotelbooking-filters">
        <label>Facilities</label>
        <input type="checkbox" class="facility-filter" value="Wi-Fi" onchange="applyFilters()"> Wi-Fi
        <input type="checkbox" class="facility-filter" value="AC Rooms" onchange="applyFilters()"> AC Rooms
        <input type="checkbox" class="facility-filter" value="Geyser" onchange="applyFilters()"> Geyser
        <input type="checkbox" class="facility-filter" value="Cupboards" onchange="applyFilters()"> Cupboards
    </div>
    <div class="filter-group hotelbooking-filters">
        <label>Parking</label>
        <input type="checkbox" class="parking-filter" value="2 Wheeler" onchange="applyFilters()"> 2 Wheeler
        <input type="checkbox" class="parking-filter" value="4 Wheeler" onchange="applyFilters()"> 4 Wheeler
    </div>
    </div>
    <div class="property-list" id="propertyType">
    <div class="property-item1">
    <?php
    // Capture filter input
    $city = isset($_GET['city']) ? $_GET['city'] : '';
    $localities = isset($_GET['localities']) ? $_GET['localities'] : '';
    $propertyType = isset($_GET['propertyType']) ? $_GET['propertyType'] : '';
    $availability = isset($_GET['availability']) ? $_GET['availability'] : '';

    // Set table name based on the propertyType
    $tableName = '';
    if ($propertyType == 'PG/Hostel') {
        $tableName = 'properties'; // Assuming 'properties' is the table for PG/Hostel
    } elseif ($propertyType == 'Flatmates') {
        $tableName = 'flatmates';
    }elseif ($propertyType == 'hotelbooking') {
        $tableName = 'hotelbooking';
    } 

    // Only proceed if a valid table is selected
    if (!empty($tableName)) {
        // Construct the SQL query
        $sql = "SELECT * FROM $tableName WHERE 1=1"; // '1=1' makes it easier to append conditions

        // Apply filters
        if (!empty($city)) {
            $sql .= " AND city = '$city'";
        }
        if (!empty($localities)) {
            // Assume localities are entered as comma-separated values
            $localityArray = explode(',', $localities);
            $sql .= " AND (";
            foreach ($localityArray as $index => $locality) {
                $locality = trim($locality);
                if ($index > 0) {
                    $sql .= " OR ";
                }
                $sql .= "localities LIKE '%$locality%'";
            }
            $sql .= ")";
        }
        if (!empty($availability)) {
            $sql .= " AND availability = '$availability'";
        }

        // Execute the query
        $result = $conn->query($sql);

        // Display the results
        if ($result->num_rows > 0) {
            echo "<div class='properties-list'>";
            while ($row = $result->fetch_assoc()) {
                echo "<div class='property-item , amenities-section'>";    
                // Display fields based on the selected property type
                if ($propertyType == 'PG/Hostel') {
                    echo "<p>id: " . $row['id'] . "</p>";
                    echo "<h3><a href='property_details.php?propertyType=properties&id=" . $row['id'] . "'>" . $row['hostelName'] . "</a></h3>";  
                    echo "<p><b>Localities: </b> " . $row['localities'] . "</p>";
                    echo "<hr>";
                    echo "<p><b>Sharing Type: </b>" . $row['Sharing_Type'] . "</p>";
                    // Display images and videos in the same carousel
                    $images = explode(',', $row['images']);
                    $videos = !empty($row['videos']) ? explode(',', $row['videos']) : [];
                    $carouselId = 'carousel-' . $row['id']; // Unique carousel ID

                    // Combine images and videos in one array
                    $mediaItems = array_merge($images, $videos);

                    // Check if there's more than one media item (image or video)
                    if (count($mediaItems) > 1) {
                        // More than one media item, display carousel
                        echo "<div id='$carouselId' class='carousel slide' data-bs-ride='carousel' style='width: 300px; height: 200px;'>
                                <div class='carousel-inner' style='width: 300px; height: 200px;'>";

                        foreach ($mediaItems as $index => $item) {
                            $isImage = strpos($item, '.mp4') === false; // Check if the media item is an image or a video
                            echo "<div class='carousel-item " . ($index === 0 ? 'active' : '') . "'>";
                            
                            if ($isImage) {
                                // Display image
                                echo "<img src='" . $item . "' class='d-block w-100' alt='Property Image' style='height:200px; width:300px; object-fit:cover;'/>";
                            } else {
                                // Display video
                                echo "<video width='300px' height='200px' controls style='object-fit:cover;'>
                                        <source src='" . $item . "' type='video/mp4'>
                                    </video>";
                            }

                            echo "</div>";
                        }

                        echo "</div>
                            <button class='carousel-control-prev' type='button' data-bs-target='#$carouselId' data-bs-slide='prev' style='height: 100%;'>
                                <span class='carousel-control-prev-icon' aria-hidden='true' style='height: 50px; width: 50px;'></span>
                                <span class='visually-hidden'>Previous</span>
                            </button>
                            <button class='carousel-control-next' type='button' data-bs-target='#$carouselId' data-bs-slide='next' style='height: 100%;'>
                                <span class='carousel-control-next-icon' aria-hidden='true' style='height: 50px; width: 50px;'></span>
                                <span class='visually-hidden'>Next</span>
                            </button>
                        </div>";
                    } else {
                        // Only one image or video, display it directly
                        if (!empty($images[0])) {
                            // Display single image
                            echo "<img src='" . $images[0] . "' alt='Property Image' style='width:300px; height:200px; padding:5px'/>";
                        } elseif (!empty($videos[0])) {
                            // Display single video
                            echo "<video width='300px' height='200px' controls style='object-fit:cover;'>
                                    <source src='" . $videos[0] . "' type='video/mp4'>
                                </video>";
                        }
                    }
                    echo "<p><b>city: </b>" . $row['city'] . "</p>";
                    echo "<p><b>Amount: </b>" . $row['amount'] . "</p>";
                    echo "<p><b>Facilities: </b>" . $row['facilities'] . "</p>";
                    echo "<p><b>Contact: </b> " . $row['contact'] . "</p>";
                    echo "<p><b>property_Type: </b>" . $row['propertyType'] . "</p>";
                    echo "<p><b>availability:  </b>" . $row['availability'] . "</p>";
                    // Get Details Button and Like Icon Box
                    echo "<div style='display: flex; align-items: center; gap: 10px;'>";
                    echo "<button onclick=\"window.location.href='property_details.php?propertyType=properties&id=" . $row['id'] . "'\" style='background-color: #f65b5b; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;'>Get Owner Details</button>";
                    echo "<div class='like-icon' data-bs-toggle='tooltip' title='Click to Shortlist' style='border: 1px solid #ddd; padding: 8px; border-radius: 5px; cursor: pointer; display: flex; justify-content: center; align-items: center; width: 40px; height: 40px; background-color: #f8f8f8;'>";
                    echo "<i class='bi bi-heart' style='font-size: 18px; color: #f65b5b;'></i>";  // Bootstrap Icons heart inside a box
                    echo "</div>";
                   
                    echo "</div>";
                    echo "</div>";
                } elseif ($propertyType == 'Flatmates') {
                    echo "<h3><a href='property_details.php?propertyType=flatmates&id=" . $row['id'] . "'>" . $row['flatmateName'] . "</a></h3>";     
                    echo "<p><b>Localities: </b> " . $row['localities'] . "</p>";
                    echo "<hr>";
                    echo "<p><b>Sharing Type: </b>" . $row['sharingType'] . "</p>";
                    // Display images and videos in the same carousel
                    $images = explode(',', $row['images']);
                    $videos = !empty($row['videos']) ? explode(',', $row['videos']) : [];
                    $carouselId = 'carousel-' . $row['id']; // Unique carousel ID

                    // Combine images and videos in one array
                    $mediaItems = array_merge($images, $videos);

                    // Check if there's more than one media item (image or video)
                    if (count($mediaItems) > 1) {
                        // More than one media item, display carousel
                        echo "<div id='$carouselId' class='carousel slide' data-bs-ride='carousel' style='width: 300px; height: 200px;'>
                                <div class='carousel-inner' style='width: 300px; height: 200px;'>";

                        foreach ($mediaItems as $index => $item) {
                            $isImage = strpos($item, '.mp4') === false; // Check if the media item is an image or a video
                            echo "<div class='carousel-item " . ($index === 0 ? 'active' : '') . "'>";
                            
                            if ($isImage) {
                                // Display image
                                echo "<img src='" . $item . "' class='d-block w-100' alt='Property Image' style='height:200px; width:300px; object-fit:cover;'/>";
                            } else {
                                // Display video
                                echo "<video width='300px' height='200px' controls style='object-fit:cover;'>
                                        <source src='" . $item . "' type='video/mp4'>
                                    </video>";
                            }

                            echo "</div>";
                        }

                        echo "</div>
                            <button class='carousel-control-prev' type='button' data-bs-target='#$carouselId' data-bs-slide='prev' style='height: 100%;'>
                                <span class='carousel-control-prev-icon' aria-hidden='true' style='height: 50px; width: 50px;'></span>
                                <span class='visually-hidden'>Previous</span>
                            </button>
                            <button class='carousel-control-next' type='button' data-bs-target='#$carouselId' data-bs-slide='next' style='height: 100%;'>
                                <span class='carousel-control-next-icon' aria-hidden='true' style='height: 50px; width: 50px;'></span>
                                <span class='visually-hidden'>Next</span>
                            </button>
                        </div>";
                    } else {
                        // Only one image or video, display it directly
                        if (!empty($images[0])) {
                            // Display single image
                            echo "<img src='" . $images[0] . "' alt='Property Image' style='width:300px; height:200px; padding:5px'/>";
                        } elseif (!empty($videos[0])) {
                            // Display single video
                            echo "<video width='300px' height='200px' controls style='object-fit:cover;'>
                                    <source src='" . $videos[0] . "' type='video/mp4'>
                                </video>";
                        }
                    }
                    echo "<p><b>city: </b>" . $row['city'] . "</p>";
                    echo "<p><b>Price: </b>" . $row['price'] . "</p>";
                    echo "<p><b>Facilities: </b>" . $row['facilities'] . "</p>";
                    echo "<p><b>Contact: </b> " . $row['contact'] . "</p>";
                    echo "<p><b>property_Type: </b>" . $row['propertyType'] . "</p>";
                    echo "<p><b>availability:  </b>" . $row['availability'] . "</p>";
                    // Get Details Button and Like Icon Box
                    echo "<div style='display: flex; align-items: center; gap: 10px;'>";
                    echo "<button onclick=\"window.location.href='property_details.php?propertyType=flatmates&id=" . $row['id'] . "'\" style='background-color: #f65b5b; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;'>Get Owner Details</button>";
                    echo "<div class='like-icon' data-bs-toggle='tooltip' title='Click to Shortlist' style='border: 1px solid #ddd; padding: 8px; border-radius: 5px; cursor: pointer; display: flex; justify-content: center; align-items: center; width: 40px; height: 40px; background-color: #f8f8f8;'>";
                    echo "<i class='bi bi-heart' style='font-size: 18px; color: #f65b5b;'></i>";  // Bootstrap Icons heart inside a box
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                } elseif ($propertyType == 'hotelbooking') {
                    echo "<h3><a href='property_details.php?propertyType=hotelbooking&id=" . $row['id'] . "'>" . $row['hotelName'] . "</a></h3>";  
                    echo "<p><b>Localities: </b> " . $row['localities'] . "</p>";
                    echo "<hr>";
                    echo "<p><b>Sharing Type: </b>" . $row['sharingType'] . "</p>";
                    echo "<p><b>Price: </b>" . $row['price'] . "</p>";
                    // Display images and videos in the same carousel
                    $images = explode(',', $row['images']);
                    $videos = !empty($row['videos']) ? explode(',', $row['videos']) : [];
                    $carouselId = 'carousel-' . $row['id']; // Unique carousel ID

                    // Combine images and videos in one array
                    $mediaItems = array_merge($images, $videos);

                    // Check if there's more than one media item (image or video)
                    if (count($mediaItems) > 1) {
                        // More than one media item, display carousel
                        echo "<div id='$carouselId' class='carousel slide' data-bs-ride='carousel' style='width: 300px; height: 200px;'>
                                <div class='carousel-inner' style='width: 300px; height: 200px;'>";

                        foreach ($mediaItems as $index => $item) {
                            $isImage = strpos($item, '.mp4') === false; // Check if the media item is an image or a video
                            echo "<div class='carousel-item " . ($index === 0 ? 'active' : '') . "'>";
                            
                            if ($isImage) {
                                // Display image
                                echo "<img src='" . $item . "' class='d-block w-100' alt='Property Image' style='height:200px; width:300px; object-fit:cover;'/>";
                            } else {
                                // Display video
                                echo "<video width='300px' height='200px' controls style='object-fit:cover;'>
                                        <source src='" . $item . "' type='video/mp4'>
                                    </video>";
                            }

                            echo "</div>";
                        }

                        echo "</div>
                            <button class='carousel-control-prev' type='button' data-bs-target='#$carouselId' data-bs-slide='prev' style='height: 100%;'>
                                <span class='carousel-control-prev-icon' aria-hidden='true' style='height: 50px; width: 50px;'></span>
                                <span class='visually-hidden'>Previous</span>
                            </button>
                            <button class='carousel-control-next' type='button' data-bs-target='#$carouselId' data-bs-slide='next' style='height: 100%;'>
                                <span class='carousel-control-next-icon' aria-hidden='true' style='height: 50px; width: 50px;'></span>
                                <span class='visually-hidden'>Next</span>
                            </button>
                        </div>";
                    } else {
                        // Only one image or video, display it directly
                        if (!empty($images[0])) {
                            // Display single image
                            echo "<img src='" . $images[0] . "' alt='Property Image' style='width:300px; height:200px; padding:5px'/>";
                        } elseif (!empty($videos[0])) {
                            // Display single video
                            echo "<video width='300px' height='200px' controls style='object-fit:cover;'>
                                    <source src='" . $videos[0] . "' type='video/mp4'>
                                </video>";
                        }
                    }
                    echo "<p><b>city: </b>" . $row['city'] . "</p>";
                    echo "<p><b>Price: </b>" . $row['price'] . "</p>";
                    echo "<p><b>Facilities: </b>" . $row['facilities'] . "</p>";
                    echo "<p><b>Contact: </b> " . $row['contact'] . "</p>";
                    echo "<p><b>property_Type: </b>" . $row['propertyType'] . "</p>";
                    echo "<p><b>availability:  </b>" . $row['availability'] . "</p>";
                    // Get Details Button and Like Icon Box
                    echo "<div style='display: flex; align-items: center; gap: 10px;'>";
                    echo "<button onclick=\"window.location.href='property_details.php?propertyType=hotelbooking&id=" . $row['id'] . "'\" style='background-color: #f65b5b; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;'>Get Owner Details</button>";
                    echo "<div class='like-icon' data-bs-toggle='tooltip' title='Click to Shortlist' style='border: 1px solid #ddd; padding: 8px; border-radius: 5px; cursor: pointer; display: flex; justify-content: center; align-items: center; width: 40px; height: 40px; background-color: #f8f8f8;'>";
                    echo "<i class='bi bi-heart' style='font-size: 18px; color: #f65b5b;'></i>";  // Bootstrap Icons heart inside a box
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }        
            }
            echo "</div>";
        } else {
            echo "No properties found.";
        }
    } else {
        echo "Invalid property type selected.";
    }

    $conn->close();
    ?>
    </div>
</div>

    </div>   
    <script>
        document.addEventListener('DOMContentLoaded', function () {
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
});
    </script>
        <script>
        // Function to hide all filters
        function hideAllFilters() {
            document.querySelectorAll('.filter-group').forEach(filterGroup => {
                filterGroup.classList.add('hidden');
            });
        }

        // Function to show filters based on property type
        function showFilters(filters) {
            filters.forEach(filter => {
                filter.classList.remove('hidden');
            });
        }

        // Get the property type from PHP and show the relevant filters
        const propertyType = '<?php echo $propertyType; ?>';

        hideAllFilters();  // Hide all filters initially

        if (propertyType === 'PG/Hostel') {
            showFilters(document.querySelectorAll('.pg-hostel-filters'));
        } else if (propertyType === 'Flatmates') {
            showFilters(document.querySelectorAll('.flatmates-filters'));
        } else if (propertyType === 'hotelbooking') {
            showFilters(document.querySelectorAll('.hotelbooking-filters'));
        }
        </script>
        <script>
function applyFilters() {
    // Get selected filter values
    const propertyType = document.getElementById('propertyType').value;
    const priceRange = document.getElementById('price-range').value;
    const sharingTypes = Array.from(document.querySelectorAll('.sharing-filter:checked')).map(checkbox => checkbox.value);
    const facilities = Array.from(document.querySelectorAll('.facility-filter:checked')).map(checkbox => checkbox.value);
    const availability = document.querySelector('input[name="pg-availability"]:checked')?.value;

    // Create an object with the filter values
    const filters = {
        propertyType,
        priceRange,
        sharingTypes,
        facilities,
        availability
    };

    // Send the filter data to the server using fetch (AJAX)
    fetch('fetch_properties.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(filters), // Send filters as JSON
    })
    .then(response => response.text()) // Parse response as text (HTML content)
    .then(data => {
        // Update the property list with the filtered data
        document.querySelector('.property-list').innerHTML = data;
    })
    .catch(error => console.error('Error fetching properties:', error));
}
</script> 
</body>
</html>