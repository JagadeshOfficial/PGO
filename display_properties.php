
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
            padding-left: 150px;
        }
        .filters {
            width: 35%;
            padding: 13px; 
            background-color: #e1ed7c;
            height: 80vh; /* Fixed height for scrolling */
            overflow-y: auto; /* Enable vertical scrolling */
            border: 1px solid #333;
            border-radius: 20px;
        }
        .property-list{
            width: 42%;
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle custom-dropdown-btn" href="#" id="menuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-menu-button-wide-fill"></i> Menu
                        </a>
                        <div class="dropdown-menu" aria-labelledby="menuDropdown">
                            <a class="dropdown-item" href="About.html">About Us</a>
                            <a class="dropdown-item" href="Property_Owners.html">For Property Owners</a>
                            <a class="dropdown-item" href="Services.html">Services</a>
                            <a class="dropdown-item" href="contact.html">Contact</a>
                        </div>
                    </li>
                </ul>
            </div>
         </nav>
    </header>
    <?php
        include 'db_connect.php';

        // Initialize search variables
        $hostelName = isset($_GET['hostelName']) ? $_GET['hostelName'] : '';
        $localities = isset($_GET['localities']) ? $_GET['localities'] : '';

        // Modify SQL query to include search criteria
        $sql = "SELECT * FROM properties WHERE 1=1";

        if (!empty($hostelName)) {
            $sql .= " AND hostelName LIKE '%" . $conn->real_escape_string($hostelName) . "%'";
        }
        if (!empty($localities)) {
            $sql .= " AND localities LIKE '%" . $conn->real_escape_string($localities) . "%'";
        }
        $result = $conn->query($sql);
    ?>
  

    <!-- HTML for the search bar -->
    <div class="search-bar">
        <form method="GET" action="">
            <input type="text" name="hostelName" placeholder="Hostel Name" value="<?php echo htmlspecialchars($hostelName); ?>">
            <input type="text" name="localities" placeholder="localities" value="<?php echo htmlspecialchars($localities); ?>">
            <button type="submit">Search</button>
        </form>
    </div>

    <div class="container">
        <div class="filters">
            <h3>Filters</h3>
            <div class="filter-group">
                <label>BHK Type</label>
                <input type="checkbox" checked> 1 RK
                <input type="checkbox"> 1 BHK
                <input type="checkbox"> 2 BHK
                <input type="checkbox"> 3 BHK
                <input type="checkbox"> 4 BHK
                <input type="checkbox"> 4+ BHK
            </div>
            <div class="filter-group">
                <label>Price Range: ₹ 0 to ₹ 10 Cr</label>
                <input type="range" min="0" max="100000000" value="2000000">
            </div>
            <div class="filter-group">
                <label>Property Status</label>
                <input type="radio" name="status" value="Under Construction"> Under Construction <br>
                <input type="radio" name="status" value="Ready" checked> Ready
            </div>
            <div class="filter-group">
                <label>Furnishing</label>
                <input type="checkbox"> Full
                <input type="checkbox"> Semi
                <input type="checkbox"> None
            </div>
            <div class="filter-group">
                <label>Property Group</label>
                <input type="checkbox"> Apartment <br>
                <input type="checkbox"> Independent House/Villa <br>
                <input type="checkbox"> Gated Community Villa <br>
                <input type="checkbox"> Standalone Building 
            </div>
            <div class="filter-group">
                <label>Parking</label>
                <input type="checkbox"> 2 Wheeler
                <input type="checkbox"> 4 Wheeler
            </div>
        </div>      
        <div class="property-list" id="propertyList">
            <!-- Property items will be dynamically added here -->
        
        
            <?php
            include 'db_connect.php';

            // Initialize search variables
            $hostelName = isset($_GET['hostelName']) ? $_GET['hostelName'] : '';
            $localities = isset($_GET['localities']) ? $_GET['localities'] : '';
            // Modify SQL query to include search criteria
            $sql = "SELECT * FROM properties WHERE 1=1";

            if (!empty($hostelName)) {
                $sql .= " AND hostelName LIKE '%" . $conn->real_escape_string($hostelName) . "%'";
            }
            if (!empty($localities)) {
                $sql .= " AND localities LIKE '%" . $conn->real_escape_string($localities) . "%'";
            }
            $result = $conn->query($sql);
            ?>
            <?php
            // Display properties based on the search criteria
            if ($result->num_rows > 0) {
                echo "<div class='properties-list'>";
                while($row = $result->fetch_assoc()) {
                    echo "<div class='property-item'>";
                    echo "<h3>" . $row['hostelName'] . "</h3>";
                    echo "<p><b>localities: </b> " . $row['localities'] . "</p>";
                    echo "<p><b>city: </b>" .$row['city'] . "</p>";
                    echo "<p><b>Amount: </b>" . $row['amount'] . "</p>";
                    echo "<p><b>Facilities: </b>" . $row['facilities'] . "</p>";
                    echo "<p><b>Contact: </b>" . $row['contact'] . "</p>";
                    echo "<p><b>property_Type: </b>" .$row['propertyType'] . "</p>";
                    echo "<p><b>availability:  </b>" .$row['availability'] . "</p>";
                    
            ?>
                    <button onclick="showMap(40.712776, -74.005974)">View on Map</button>
                    <!--<div id="map" style="width: 100%; height: 400px;"></div>-->
            <?php
            // Display images
            echo "<br>";
           
            $images = explode(',', $row['images']);
            foreach ($images as $image) {
                echo "<img src='" . $image . "' alt='Property Image' style='width:100px; height:100px;'/>";
            }

            // Display videos (if any)
            if (!empty($row['videos'])) {
                $videos = explode(',', $row['videos']);
                foreach ($videos as $video) {
                    echo "<video width='320' height='240' controls>
                            <source src='" . $video . "' type='video/mp4'>
                        Your browser does not support the video tag.
                        </video>";
                }
            }
            echo "<br>";
            echo "<br>";
            echo "</div>";
                }
                echo "</div>";
            } else {
                echo "No properties found.";
            }

            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>