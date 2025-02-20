<?php

$host = 'localhost';
$db = 'booking_system';
$user = 'root';
$password = '';


$conn = new mysqli($host, $user, $password, $db);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$package_name = $_POST['Package_name'];
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$travel_date = $_POST['travel_date'];
$guests = $_POST['guests'];
$special_request = $_POST['special_request'];


$stmt = $conn->prepare("INSERT INTO bookings (package_name, full_name, email, phone, travel_date, guests, special_request) 
                        VALUES (?, ?, ?, ?, ?, ?, ?)");


$stmt->bind_param("sssssis", $package_name, $full_name, $email, $phone, $travel_date, $guests, $special_request);


if ($stmt->execute()) {
    echo "Booking successful!";
} else {
    echo "Error: " . $stmt->error;
}


$stmt->close();

$conn->close();
?>
