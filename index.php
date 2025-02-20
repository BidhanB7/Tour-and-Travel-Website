<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> ABS Tour and Travel</title>
    <link rel="stylesheet" href="style.css">
    <?php
    session_start();
    ?>
</head>

<body>

    <nav class="navbar">
        <div class="logo">
            <a href="#">ABS<br> Tour And Travel</a>
        </div>
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="packages.php">Our Packages</a></li>
            <li><a href="#Contact">Contact</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav> <br><br>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h2>Explore the World with Us!</h2>
            <p>Your next adventure awaits</p>
            <a href="#our-package" class="btn">Get Started</a>
        </div>
    </section> <br>

    <!-- Featured Tours Section -->
    <section id="our-package" class="our-packages">
        <h1>Our Packages</h1><br><br>
        <div class="tour-cards">
            <div class="tour-card">
                <img src="tokyo.jpg" alt="Tour 1">
                <h3>Tokyo</h3>
                <p>5 Days / 4 Nights</p>
                <details>
                    <summary>View Details</summary>
                    <p>Tokyo is a modern city where you can explore Japanese culture, shopping, and historical temples.</p>
                </details>
                <a href="booking.php?package=Tokyo">Book Now</a>
            </div>
            <div class="tour-card">
                <img src="thailand.jpg" alt="Tour 2">
                <h3>Thailand</h3>
                <p>7 Days / 6 Nights</p>
                <details>
                    <summary>View Details</summary>
                    <p>Thailand offers beautiful beaches, vibrant nightlife, Buddhist temples, and delicious street food.</p>
                </details>
                <a href="booking.php?package=Thailand">Book Now</a>
            </div>
            <div class="tour-card">
                <img src="singapore.jpg" alt="Tour 3">
                <h3>Singapore</h3>
                <p>10 Days / 9 Nights</p>
                <details>
                    <summary>View Details</summary>
                    <p>Singapore is known for its modern architecture, adventure parks, Marina Bay Sands, and Gardens by the Bay.</p>
                </details>
                <a href="booking.php?package=Singapore">Book Now</a>
            </div>
        </div>

        <div class="tour-cards">
            <div class="tour-card">
                <img src="tokyo.jpg" alt="Tour 1">
                <h3>Dubai</h3>
                <p>5 Days / 4 Nights</p>
                <details>
                    <summary>View Details</summary>
                    <p>Dubai offers an experience of Burj Khalifa, Marina Cruise, Desert Safari, and luxury shopping.</p>
                </details>
                <a href="booking.php?package=Dubai">Book Now</a>
            </div>
            <div class="tour-card">
                <img src="thailand.jpg" alt="Tour 2">
                <h3>USA</h3>
                <p>7 Days / 6 Nights</p>
                <details>
                    <summary>View Details</summary>
                    <p>Explore the USA with visits to New York, Los Angeles, Disneyland, and Times Square.</p>
                </details>
                <a href="booking.php?package=USA">Book Now</a>
            </div>
            <div class="tour-card">
                <img src="singapore.jpg" alt="Tour 3">
                <h3>Singapore</h3>
                <p>10 Days / 9 Nights</p>
                <details>
                    <summary>View Details</summary>
                    <p>Singapore is known for its modern architecture, adventure parks, Marina Bay Sands, and Gardens by the Bay.</p>
                </details>
                <a href="booking.php?package=Singapore">Book Now</a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="Contact" id="Contact">
        <h2>Contact</h2>

        <form action="#" method="post">
            <input type="text" placeholder="Your Name" required>
            <input type="email" placeholder="Your Email" required>
            <textarea placeholder="Your Message" required></textarea>
            <button type="submit" class="btn">Send Message</button>
        </form>
    </section>
    <!-- Footer -->
    <footer>
        <p>&copy; 2024 ABS Tour And Travel Now. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>

</body>

</html>
