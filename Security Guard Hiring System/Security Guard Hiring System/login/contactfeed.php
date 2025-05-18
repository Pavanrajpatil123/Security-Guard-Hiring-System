<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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

        main {
            max-width: 800px;
            margin: 20px auto;
            background-color: rgb(202, 198, 198);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            opacity: 0.9;
            height: 50vh;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        #mainpara {
            font-size: 22px;
        }

        main a {
            font-size: 22px;
            text-align: center;
        }

        main p {
            padding: 10px 10px;
        }
    </style>
</head>

<body>
    <header>
        <h1>Contact Us - Security Hiring System</h1>
    </header>

    <nav>
        <div class="left">
            <img src="img/logo.jpg" alt="logo">

        </div>
        <a href="hmpge.php">Home</a>
    </nav>

    <main>
        <h1 id="main">
            Get in Touch-We are here to help
        </h1>
        <p id="mainpara">
            At Online Security hiring system, we value your security and satisfaction. Our team is dedicated to providing you with the best possible support. Whether you have a question, need assistance, or want to share your feedback, we're here for you. We understand
            that navigating the online security landscape can sometimes be challenging. Rest assured, your concerns are important to us. Please use the form below to share your thoughts, ask questions, or report any issues you may be experiencing.
        </p>
        <a href="https://forms.gle/TmY7bXg4NXakno9N7" target="_blank"> &lt;&lt;&lt;&lt;please click here and give us feedback</a>
    </main>

</body>

</html>