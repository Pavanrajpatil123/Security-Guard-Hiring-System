<?php
$host = "localhost";   //your MYSQL host
$username = "root";       //your MYSQL username
$password = "";       //your MYSQL password
$database = "dboshs"; // Replace with your MySQL database name

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["uname"];
    $password = $_POST["pass"];

    //perform a query to check if user exists
    $sql = "SELECT * FROM adminlogin WHERE uname = '$username' AND pass = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {


        header("Location: admin.php");
    } else {
        echo "<script>alert('Invalid Username or password')</script>";
        echo "<script>setTimeout(function(){ window.location.href = 'adminlogin.php'; }, 500);</script>";
    }
}
$conn->close();
