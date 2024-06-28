<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $car_model = htmlspecialchars($_POST['car_model']);
    $pickup_date = htmlspecialchars($_POST['pickup_date']);
    $return_date = htmlspecialchars($_POST['return_date']);
    
    // Connect to database
    $conn = mysqli_connect("localhost", "username", "password", "database");
    
    // Check connection
    if (!$conn) {
      die("Connection failed: ". mysqli_connect_error());
    }
    
    // Insert data into database
    $sql = "INSERT INTO bookings (name, email, phone, car_model, pickup_date, return_date) VALUES ('$name',