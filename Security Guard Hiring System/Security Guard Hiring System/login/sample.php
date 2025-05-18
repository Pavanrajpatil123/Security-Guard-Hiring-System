<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "dboshs";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["customer_registration"])) {

        $username = $_POST["uname"];
        $password = $_POST["pass"];

        $sql = "INSERT INTO custlogin (uname, pass) VALUES ('$username', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('registered successfully')</script>";
            echo "<script>setTimeout(function(){ window.location.href = 'customerreg.php'; }, 500);</script>";
        } else {
            echo "<script>alert('Error ocurred')</script>";
            echo "<script>setTimeout(function(){ window.location.href = 'customerreg.php'; }, 500);</script>";
        }
    } elseif (isset($_POST["applicant_registration"])) {

        $username = $_POST["uname"];
        $password = $_POST["pass"];

        $sql = "INSERT INTO applogin (uname, pass) VALUES ('$username', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('registered successfully')</script>";
            echo "<script>setTimeout(function(){ window.location.href = 'newreg.php'; }, 500);</script>";
        } else {
            echo "<script>alert('Error ocurred')</script>";
            echo "<script>setTimeout(function(){ window.location.href = 'newreg.php'; }, 500);</script>";
        }
    } elseif (isset($_POST["applicant_login"])) {

        $username = $_POST["uname"];
        $password = $_POST["pass"];


        $sql = "SELECT * FROM applogin WHERE uname = '$username' AND pass = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            header("Location: applicantform.php");
        } else {
            echo "<script>alert('Invalid Username or password')</script>";
            echo "<script>setTimeout(function(){ window.location.href = 'applicantlogin.php'; }, 500);</script>";
        }
    } elseif (isset($_POST["customer_login"])) {

        $username = $_POST["uname"];
        $password = $_POST["pass"];


        $sql = "SELECT * FROM custlogin WHERE uname = '$username' AND pass = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            header("Location: customerform.php");
        } else {
            echo "<script>alert('Invalid Username or password')</script>";
            echo "<script>setTimeout(function(){ window.location.href = 'customerlogin.php'; }, 500);</script>";
        }
    } elseif (isset($_POST["applicant_form"])) {

        $username = $_POST["name"];
        $address = $_POST["address"];
        $phone = $_POST["phone"];
        $age = $_POST["age"];
        $email = $_POST["email"];
        $pastexp = $_POST["pexp"];

        $sql = "INSERT INTO applist (name,address,phone,age,email,pexp) VALUES ('$username', '$address','$phone','$age','$email','$pastexp');";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Data entered successfully')</script>";
            echo "<script>setTimeout(function(){ window.location.href = 'applicantlogin.php'; }, 500);</script>";
        } else {
            echo "<script>alert('Error ocurred')</script>";
            echo "<script>setTimeout(function(){ window.location.href = 'applicantlogin.php'; }, 500);</script>";
        }
    } elseif (isset($_POST["customer_form"])) {

        $username = $_POST["name"];
        $address = $_POST["address"];
        $email = $_POST["email"];
        $service = $_POST["service"];
        $manpower = $_POST["manpower"];
        $phone = $_POST["phone"];

        $sql = "INSERT INTO custlist (name, address, email, service, manpower, phone) VALUES ('$username', '$address', '$email', '$service', '$manpower', '$phone')";


        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Data entered successfully')</script>";
            echo "<script>setTimeout(function(){ window.location.href = 'customerlogin.php'; }, 500);</script>";
        } else {
            echo "<script>alert('Error ocurred')</script>";
            echo "<script>setTimeout(function(){ window.location.href = 'customerlogin.php'; }, 500);</script>";
        }
    } else {
        echo "Invalid form submission.";
    }
}

$conn->close();
