<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicant form</title>
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

        .columns {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            width: 90%;
            margin-top: 10px;
            height: 80%;
            margin: auto;
        }

        .column {
            width: 48%;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        .column1 {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            color: black;
            border-radius: 8px;
            height: 90vh;
            padding-left: 30px;
        }

        .column2 {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            height: 90vh;
        }

        form {
            display: grid;
            gap: 16px;
        }

        label {
            font-weight: bold;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: rgb(84, 81, 81);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: black;
            color: #ccc;
        }
    </style>
</head>

<body>
    <header>
        <div class="left">
            <img src="img/logo.jpg" alt="logo">

        </div>
        <h1>Applicant form</h1>
    </header>

    <nav>
        <a href="applicantlogin.php">&lt;&lt;back</a>
    </nav>

    <div class="columns">
        <div class="column column1">
            <h2>Security Guard Criteria</h2>
            <p>"Welcome, aspiring guardians of safety! 🛡️ We're thrilled you're considering joining our security team. Your commitment to protecting and securing is invaluable. Best of luck on this journey, and may your dedication shine through as you embark
                on the path to safeguarding our community. 🌟 #SecurityStrong":</p>
            <ul>
                <li>Physical fitness</li>
                <li>Educational qualification upto HSC</li>
                <li>Mention any past experince if any (ex. Security roles , military experiences , law enforncements any)</li>
                <li>communication skills , both written and verbal</li>
                <li>Ability to handle stressful situations</li>
                <li>Attention to detail</li>
            </ul>
        </div>
        <div class="column column2">


            <form action="sample.php" method="post">
                <input type="hidden" name="applicant_form" value="1">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>

                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="experience">Past Experience:</label>
                <textarea id="experience" name="pexp" rows="4" required></textarea>




                <input type="submit" value="Submit">
            </form>
        </div>
    </div>

</body>

</html>