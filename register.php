<?php
// Retrieve form data
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$password = $_POST['password'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$datetime = $_POST['datetime'];

// Connect to the database
$host = 'db';
$user = 'root';
$pass = 'mypassword';
$db = 'registration';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into the database
$sql = "INSERT INTO client (firstname, lastname, password, email, contact, datetime) VALUES ('$firstname', '$lastname', '$password', '$email' ,'$contact' ,'$datetime')";

if ($conn->query($sql) === TRUE) {
 echo "Successfully completed!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>