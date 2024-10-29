<?php
$servername = "localhost";
$username = "root";  // Replace with your MySQL username
$password = "";  // Replace with your MySQL password
$dbname = "restaurant_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $person = $conn->real_escape_string($_POST['person']);
    $reservation_date = $conn->real_escape_string($_POST['reservation-date']);
    $reservation_time = $conn->real_escape_string($_POST['reservation_time']);
    $message = $conn->real_escape_string($_POST['message']);

    // SQL query to insert data into the table
    $sql = "INSERT INTO reservations (name, phone, person, reservation_date, reservation_time, message)
            VALUES ('$name', '$phone', '$person', '$reservation_date', '$reservation_time', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Reservation made successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
