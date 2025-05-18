<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page - Security Hiring System</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('img/sec.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 90vh;
            font-family: Arial, sans-serif;
            background-color: rgba(0, 0, 0, 0.7);
        }

        header {
            /* background-color: hsl(233, 91%, 18%); */
            font-size: 2rem;
            color: white;
            font-weight: bold;
            text-align: center;
            padding: 20px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        nav {
            /* background-color: rgba(93, 109, 158, 0.7); */
            overflow: hidden;
            border: 2px solid white;
            border-radius: 3rem;
        }

        nav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 20px 16px;
            text-decoration: none;
        }

        nav a.login {
            float: right;
        }

        nav a:hover {
            background-color: white;
            color: black;
        }

        .left {
            display: inline-block;
            /* border: 2px solid red; */
            position: absolute;
            left: 60px;
            top: 40px;
            opacity: 0.8;
        }

        .left img {
            border-radius: 2rem;
            width: 136px;
            filter: invert(90%);
        }

        .dropdown {
            float: right;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }



        .services-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
            margin-top: 20px;
        }

        .service-card {
            width: 250px;
            margin: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            height: 300px;
            font-size: 2rem;
            font-weight: bold;
            color: black;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        hr {
            height: 5px;
        }

        .services-container p {
            font-size: 4rem;
        }
    </style>
</head>

<body>
    <header>
        <div class="left">
            <img src="img/logo.jpg" alt="logo">

        </div>
        <h1>Admin Page - Security Hiring System</h1>
    </header>

    <nav>
        <a href="hmpge.php">Home</a>
        <a href="#">Dashboard</a>
        <a href="adcust.php">Manage Customers</a>
        <a href="adapp.php">Manage Applicants</a>
    </nav>

    <?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "dboshs";


    $conn = new mysqli($host, $username, $password, $database);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $applicantrequest = "SELECT COUNT(*) AS applicantcount FROM applist";
    $applicantResult = $conn->query($applicantrequest);


    $applicantcount = 0;
    if ($applicantResult && $applicantResult->num_rows > 0) {
        $row = $applicantResult->fetch_assoc();
        $applicantcount = $row['applicantcount'];
    }

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $customerrequest = "SELECT COUNT(*) AS customercount FROM custlist";
    $customerResult = $conn->query($customerrequest);


    $customercount = 0;
    if ($customerResult && $customerResult->num_rows > 0) {
        $row = $customerResult->fetch_assoc();
        $customercount = $row['customercount'];
    }

    $totalrequest = "SELECT SUM(manpower) AS total_marks FROM custlist";
    $totalResult = $conn->query($totalrequest);

    $totalcount = 0;
    if ($totalResult !== false && $totalResult->num_rows > 0) {
        $row = $totalResult->fetch_assoc();
        $totalcount = $row['total_marks'];
    }

    // if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in']) {
    //     $adminrequest = "SELECT admin_name FROM adminlogin WHERE uname = " . $_SESSION['admin_id'];
    //     $adminResult = $conn->query($adminrequest);

    //     $adminname = "";
    //     if ($adminResult !== false && $adminResult->num_rows > 0) {
    //         $row = $adminResult->fetch_assoc();
    //         $adminname = $row['admin_name'];
    //     }
    // }
    // // } else {
    // //     header("Location: adminlogin.php");
    // //     exit();
    // // }


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>

    <div class="services-container">
        <div class="service-card">
            Applied Security guards
            <hr>
            <p> <?php echo $applicantcount; ?></p>
        </div>
        <div class="service-card">
            Customer Requests
            <hr>
            <p> <?php echo $customercount; ?></p>
        </div>

        <div class="service-card">
            Total Required manpower
            <hr>
            <p> <?php echo $totalcount; ?></p>
        </div>

        <!-- <div class="service-card">
            Admin name
            <hr>
         <p><?php echo $adminname; ?></p> 
        </div>  -->
    </div>

    <?php
    // Close the database connection
    $conn->close();
    ?>
</body>

</html>