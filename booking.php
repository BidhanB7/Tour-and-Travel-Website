<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Your Package - ABS Tour and Travel</title>
  <link rel="stylesheet" href="Booking.css">
</head>
<body>


  <header class="header">
    <nav class="navbar">
      <div class="logo">
          <a href="#">ABS<br> Tour And Travel</a>
      </div>
      <ul class="nav-links">
          <li><a href="index.php">Home</a></li>
          <li><a href="About.php">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#ContactUs">Contact Us</a></li>
          <li><a href="login.php">Login</a></li>
      </ul>
  </nav>
  </header>

  <main>
    <section class="booking-section">
      <h2>Book Your Dream Package</h2>
      <form action="submit_booking.php" method="POST" class="booking-form">
        <!-- Package Details -->
        <label for="package-name">Package Name:</label>
        <input type="text" id="packageName" placeholder="Package Name">

        <!-- Personal Information -->
        <label for="full-name">Full Name:</label>
        <input type="text" id="full-name" name="full_name" placeholder="Enter your full name" required>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email address" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>

        <!-- Travel Details -->
        <label for="travel-date">Travel Date:</label>
        <input type="date" id="travel-date" name="travel_date" required>

        <label for="guests">Number of Guests:</label>
        <input type="number" id="guests" name="guests" min="1" required>

        <label for="special-request">Special Requests:</label>
        <textarea id="special-request" name="special_request" rows="4" placeholder="Enter any special requests"></textarea>

        <!-- Submit Button -->
        <button type="submit" class="submit-btn">Book Now</button>
      </form>
    </section>
  </main>

  <footer>
    <p>&copy; 2024 ABS Tour and Travel. All Rights Reserved.</p>
  </footer>
   
    <script src="booking.js"></script>
</body>
</html>
