<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Security Hiring System - Our Services</title>
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

        .services-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
            margin-top: 20px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        .service-card {
            width: 250px;
            margin: 10px;
            background-color: rgb(202, 198, 198);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .service-image {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <header>
        <div class="left">
            <img src="img/logo.jpg" alt="logo">

        </div>
        <h1>Our services</h1>
    </header>

    <nav>
        <a href="hmpge.php">Home</a>
    </nav>

    <div class="services-container">
        <div class="service-card">
            <img class="service-image" src="img/events.jpg" alt="Service 1">
            <h2>Event Security</h2>
            <p>Ensure the success of your events with our specialized event security services. Our expert team provides comprehensive planning and on-site management to create a secure and enjoyable environment for all attendees</p>
        </div>

        <div class="service-card">
            <img class="service-image" src="img/personals.jpg" alt="Service 2">
            <h2>Personal Security</h2>
            <p>Prioritize your safety with our personalized personal security services. Whether you need individual protection or travel security, our team is dedicated to providing discreet and effective security measures for your personal well-being.</p>
        </div>

        <div class="service-card">
            <img class="service-image" src="img/homes.jpg" alt="Service 3">
            <h2>Home Security</h2>
            <p>Safeguard your home and loved ones with our advanced home security solutions. From surveillance systems to smart access control, we offer a range of technologies to provide peace of mind and protect what matters most.</p>
        </div>

        <div class="service-card">
            <img class="service-image" src="img/buiss.jpg" alt="Service 4">
            <h2>Buisness Security</h2>
            <p>Protect your business assets and operations with our business security services. Our tailored solutions include access control, surveillance, and security personnel, ensuring a secure environment for employees, customers, and assets.</p>
        </div>
    </div>

</body>

</html>