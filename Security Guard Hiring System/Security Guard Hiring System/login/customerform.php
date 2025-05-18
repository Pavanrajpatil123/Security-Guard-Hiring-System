<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer form</title>
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

        header {
            /* background-color: hsl(233, 91%, 18%); */
            color: rgb(255, 255, 255);
            text-align: center;
            padding: 20px;
        }

        main {
            max-width: 850px;
            margin: 20px auto;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: grid;
            gap: 10px;
        }

        label {
            font-weight: bold;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
        }

        input[type="submit"],
        input[type="reset"] {
            background-color: rgb(84, 81, 81);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: black;
            color: white;
        }
    </style>
</head>

<body>
    <header>
        <div class="left">
            <img src="img/logo.jpg" alt="logo">

        </div>
        <h1>Customer form</h1>
    </header>

    <nav>
        <a href="hmpge.php">Home</a>
    </nav>

    <main>
        <form action="sample.php" method="post">
            <input type="hidden" name="customer_form" value="1">


            <label for="name">Name:</label>

            <input type="text" id="name" name="name" required>

            <label for="address">Enter your address :</label>
            <input type="text" id="address" name="address" required>

            <label for="email">Enter your email:</label>
            <input type="email" id="email" name="email" required>

            <label for="services"> Service required =</label>
            <select name="service" id="services" required>
                <option value="ES">Event Security</option>
                <option value="PS">Personal Security</option>
                <option value="HS">Home Security</option>
                <option value="BS">Buisness security</option>
            </select>

            <label for="no">Enter no of personnel required:</label>
            <input type="text" id="no" name="manpower" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>



            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </form>
    </main>

</body>

</html>