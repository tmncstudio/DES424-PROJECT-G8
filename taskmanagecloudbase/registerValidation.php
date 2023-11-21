<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection (adjust the parameters as needed)
    $servername = "localhost";
    $username = "root";
    $password = "rootroot";
    $dbname = "tasker";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get user input
    $username = $_POST["register"];
    $password = $_POST["password"]; // Don't hash the password

    // Insert user data into the database
    $sql = "INSERT INTO users (login, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Registration successful, you may redirect to login page or perform additional actions
        $_SESSION['registerSuccess'] = "Registration successful!";
        header("Location: login.php");
        exit();
    } else {
        // Handle registration error
        $_SESSION['registerError'] = "Error: " . $sql . "<br>" . $conn->error;
        header("Location: register.php");
        exit();
    }

    $conn->close();
} else {
    // If not a POST request, redirect to register page
    header("Location: register.php");
    exit();
}
?>
