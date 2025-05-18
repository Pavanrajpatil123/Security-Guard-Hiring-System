<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Security Hiring System</title>
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

        .sec {
            /* border: 2px solid white; */
            height: 400px;
            width: 90%;
            color: #f9f9f9;
            align-items: center;
            padding-left: 40px;
            margin: 60px auto;
            font-weight: bold;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 22px;
        }

        .dropdown {
            float: right;
            padding-right: 100px;
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
            /* z-index: 1; */
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
            background-color: grey;
            color: black;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>

<body>
    <header>
        <div class="left">
            <img src="img/logo.jpg" alt="logo">

        </div>
        <h1>Security Hiring System</h1>


    </header>

    <nav>
        <a href="#">Home</a>
        <a href="ourservices.php">Our Services</a>
        <a href="about.php">About Us</a>
        <a href="imagegallery.php">Gallery</a>
        <a href="contactfeed.php">Contact Us</a>
        <a href="newreg.php">New Register</a>


        <!-- <a href="reg.html">Registration</a> -->

        <div class="dropdown">
            <button class="dropbtn">Login</button>
            <div class="dropdown-content">
                <a href="login.php">User Login</a>
                <a href="adminlogin.php">Admin Login</a>
            </div>
        </div>
    </nav>

    <div class="sec">
        <h1>Your Safety, Our Priority</h1>
        <hr>
        <p>Welcome to the Security Guard Hiring System, where we are dedicated to ensuring the safety and security of your spaces. Our motto is simple but powerful: "Securing Today for a Safer Tomorrow."</p>
        <p>Explore our services and find highly trained and reliable security professionals to safeguard your premises. Trust us to deliver top-notch security solutions tailored to your specific needs.</p>
        <hr>


    </div>
</body>

</html>