<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delta Hotel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
    <style>
        body {
            background-color: #0e0e0e;
            color: #00ffcc;
            font-family: 'Roboto', sans-serif;
        }
        header {
            background: linear-gradient(90deg, #00ffcc, #0066ff);
            border-bottom: 2px solid #00ffcc;
        }
        nav {
            background-color: #1a1a1a;
            border-bottom: 2px solid #00ffcc;
        }
        .navbar-brand, .nav-link {
            color: #00ffcc !important;
        }
        .nav-link:hover {
            color: #0066ff !important;
        }
        footer {
            background-color: #1a1a1a;
            border-top: 2px solid #00ffcc;
        }
        h1, h2 {
            font-family: 'Orbitron', sans-serif;
        }
        .btn-primary {
            background-color: #00ffcc;
            border-color: #00ffcc;
        }
        .btn-primary:hover {
            background-color: #0066ff;
            border-color: #0066ff;
        }
    </style>
</head>
<body>
    <header class="text-white text-center py-5">
        <h1>Welcome to Delta Hotel</h1>
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Delta Hotel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="rooms.php">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cotact.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <main class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <h2>About Us</h2>
                <p>Delta Hotel offers the best services for your comfort and relaxation.</p>
            </div>
            <div class="col-md-6">
                <img src="hotel.jpg" class="img-fluid" alt="Hotel Image">
            </div>
        </div>
    </main>
    <footer class="text-white text-center py-3">
        <p>&copy; 2023 Delta Hotel. All rights reserved.</p>
    </footer>
    <script>
        gsap.from("header", { duration: 1, y: -100, opacity: 0 });
        gsap.from("nav", { duration: 1, y: -100, opacity: 0, delay: 0.5 });
        gsap.from("main", { duration: 1, opacity: 0, delay: 1 });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
