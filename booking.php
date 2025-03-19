<?php
// Start the session (if not already started)
session_start();

// Database connection parameters
$db_host = "localhost";  // Replace with your database host
$db_user = "root";    // Replace with your database username
$db_pass = "";    // Replace with your database password
$db_name = "delhi_hotel";  // Your database name

// Establish database connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the visit date from the GET request
$visit_date = isset($_GET['visit_date']) ? $_GET['visit_date'] : null;

// Initialize variables for property image
$property_image = '';  // Default image
$image_alt_text = '';


// Handle form submission if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['confirm_booking'])) {
    // Retrieve form data
    $property_type = $_POST['property_type'];
    $num_rooms = $_POST['num_rooms'];
    $visit_date = $_POST['visit_date']; // Retrieve the visit date from the POST request

    // Basic validation (you should add more robust validation)
    if (empty($property_type) || empty($num_rooms) || empty($visit_date)) {
        $booking_message = "Error: All fields are required.";
    } else {
        // Set property image based on property type
        switch ($property_type) {
            case 'villa':
                $property_image = 'assets/images/new apartment.jpg.'; // Replace with your villa image path
                $image_alt_text = 'Villa House';
                break;
            case 'apartment':
                $property_image = 'assets/images/villa.jpg'; // Replace with your apartment image path
                $image_alt_text = 'Apartment';
                break;
            case 'penthouse':
                $property_image = 'penthouse.jpg'; // Replace with your penthouse image path
                $image_alt_text = 'Penthouse';
                break;
            default:
                $property_image = 'villa3.jpg'; // Replace with a default image path
                $image_alt_text = 'Default Property';
                break;
        }

        // Here you would typically:
        // 1. Check availability in the database for the given date, property type, and number of rooms.
        // 2. If available, create a booking record in the database.
        // 3. Set a success message to display to the user.

        // For demonstration purposes, let's just display a success message:
        $booking_message = "Booking Confirmed! Property Type: " . htmlspecialchars($property_type) . ", Rooms: " . htmlspecialchars($num_rooms) . ", Date: " . htmlspecialchars($visit_date);
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delta Hotel - Booking</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(17, 78, 37); /* Light gray background */
            background-image: url('villa3.jpg'); /* Replace with your image */
            background-size: cover;
            background-blend-mode: overlay;
            color: #343a40; /* Dark gray text */
        }

        .container {
            margin-top: 50px;
            background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent white container */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #007bff; /* Bootstrap primary color */
            margin-bottom: 20px;
            text-align: center;
            animation: fadeInDown 1s; /* Animate.css class */
        }

        h3 {
            color: #28a745; /* Bootstrap success color */
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ced4da;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .message {
            margin-top: 15px;
            padding: 10px;
            border-radius: 5px;
        }

        .available {
            background-color: #d4edda;
            color: #155724;
        }

        .unavailable {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Delta Hotel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Holla Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="property-details.php">About our Properties</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="properties.php">Properties</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container animate__animated animate__fadeIn">
        <img src="assets/images/villa3.jpg" alt="Delta Hotel Logo" class="img-fluid mb-3">
        <h2 class="animate__animated animate__fadeInDown">Delta Hotel - Booking</h2>

        <?php if ($visit_date): ?>
            <h3>Selected Date: <?php echo htmlspecialchars($visit_date); ?></h3>
        <?php else: ?>
            <p>No date selected. Please go back and select a date.</p>
        <?php endif; ?>

        <?php if ($visit_date): ?>
            <form method="post">
                <div class="form-group">
                    <label for="property_type">Property Type:</label>
                    <select class="form-control" name="property_type" id="property_type" required>
                        <option value="villa">Villa House</option>
                        <option value="apartment">Apartment</option>
                        <option value="penthouse">Penthouse</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="num_rooms">Number of Rooms:</label>
                    <input type="number" class="form-control" name="num_rooms" id="num_rooms" min="1" value="1" required>
                </div>

                <input type="hidden" name="visit_date" value="<?php echo htmlspecialchars($visit_date); ?>">

                <button type="submit" class="btn btn-primary" name="confirm_booking">Confirm Booking</button>
            </form>
        <?php endif; ?>

        <?php if (isset($booking_message)): ?>
            <div class="message <?php echo (strpos($booking_message, 'Error') === false) ? 'available' : 'unavailable'; ?>">
                <?php echo $booking_message; ?>
                <?php if (!empty($property_image)): ?>
                    <img src="<?php echo htmlspecialchars($property_image); ?>" alt="<?php echo htmlspecialchars($image_alt_text); ?>" class="img-fluid mt-3">
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <div id="datepicker"></div>
    </div>

    <script>
        $(document).ready(function(){
            $('#datepicker').datepicker({
                format: 'yyyy-mm-dd',
                startDate: new Date(),
                autoclose: true
            }).on('changeDate', function(e){
                var selectedDate = e.format('yyyy-mm-dd');
                window.location.href = 'booking.php?visit_date=' + selectedDate;
            });
        });
    </script>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>