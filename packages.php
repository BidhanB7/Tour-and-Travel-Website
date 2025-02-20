<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="packages.css">
</head>
<body>
<nav class="navbar">
        <div class="logo">
            <a href="#">ABS<br> Tour And Travel</a>
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="#packages">Our Packages</a></li>
            <li><a href="#Contact">Contact</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav> <br><br>

    <section id="our-package" class="our-packages">
        <h1>Our Packages</h1><br><br>
        <div class="tour-cards">
            <div class="tour-card">
                <img src="tokyo.jpg" alt="Package 1">
                <h3>Tokyo</h3>
                <p>5 Days / 4 Nights</p><br>
                <a href="booking.php?package=Tokyo">Book Now</a>
            </div>
            <div class="tour-card">
                <img src="thailand.jpg" alt="Package 2">
                <h3>Thailand</h3>
                <p>7 Days / 6 Nights</p><br>
                <a href="booking.php?package=Thailand">Book Now</a>
            </div>
            <div class="tour-card">
                <img src="singapore.jpg" alt="Package 3">
                <h3>Singapore</h3>
                <p>10 Days / 9 Nights</p><br>
                <a href="booking.php?package=Singapore">Book Now</a>
            </div>
        </div>
        <div class="tour-cards">
            <div class="tour-card">
                <img src="tokyo.jpg" alt="Package 1">
                <h3>Dubai</h3>
                <p>5 Days / 4 Nights</p><br>
                <a href="booking.php?package=Tokyo">Book Now</a>
            </div>
            <div class="tour-card">
                <img src="thailand.jpg" alt="Package 2">
                <h3>USA</h3>
                <p>7 Days / 6 Nights</p><br>
                <a href="booking.php?package=USA">Book Now</a>
            </div>
            <div class="tour-card">
                <img src="singapore.jpg" alt="Package 3">
                <h3>Singapore</h3>
                <p>10 Days / 9 Nights</p><br>
                <a href="booking.php?package=Singapore">Book Now</a>
            </div>
        </div>
    </section>

    <section class="Contact" id="Contact">
        <h2>Contact</h2>

        <form action="#" method="post">
            <input type="text" placeholder="Your Name" required>
            <input type="email" placeholder="Your Email" required>
            <textarea placeholder="Your Message" required></textarea>
            <button type="submit" class="btn">Send Message</button>
        </form>
    </section>
</body>
</html>
