<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "dboshs";


$conn = new mysqli($host, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['deleteSelected'])) {
    $deleteIds = $_POST['delete_ids'];

    if (!empty($deleteIds)) {

        $idString = implode(",", $deleteIds);
        $deleteQuery = "DELETE FROM applist WHERE id IN ($idString)";
        $deleteResult = $conn->query($deleteQuery);

        if ($deleteResult) {
            echo "<script>alert('Successful')</script>";
            echo "<script>setTimeout(function(){ window.location.href = 'adapp.php'; }, 500);</script>";
        } else {
            echo "<script>alert('Error')</script>";
            echo "<script>setTimeout(function(){ window.location.href = 'adapp.php'; }, 500);</script>";
        }
    } else {
        echo "No rows selected for deletion.";
    }
}


$sql = "SELECT * FROM applist";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('img/seco.jpg');
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

        .admin-panel {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        tbody {
            background-color: #ddd;
            color: black;
        }

        th {
            background-color: #f2f2f2;
        }

        .admin-buttons {
            display: flex;
            flex-direction: column;
            gap: 10px;
            width: 600px;
        }

        .admin-buttons button {
            padding: 10px;
            background-color: rgb(84, 81, 81);
            color: rgb(3, 3, 3);
            border: none;
            font-weight: bolder;
            border-radius: 4px;
            cursor: pointer;
        }

        .admin-buttons button:hover {
            background-color: black;
            color: white;
        }

        .admin-buttons button:not(:last-child) {
            margin-bottom: 10px;
        }

        .admin-buttons .spacer {
            flex-grow: 1;
        }


        .admin-panel h2 {
            text-align: center;
            color: #ddd;
            font-weight: bold;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        .admin-buttons h2 {
            text-align: center;
            color: #ddd;
            font-weight: bold;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
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
        <a href="admin.php">&lt;&lt;back</a>
        <a href="admin.php">Dashboard</a>
        <a href="adcust.php">Manage Customers</a>
        <a href="adapp.php">Manage Applicants</a>
    </nav>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="admin-panel">
            <div>
                <h2>Applicant Data</h2>
                <table id="ApplicantTable">
                    <thead>
                        <tr>
                            <th>Select</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>phone</th>
                            <th>age</th>
                            <th>email</th>
                            <th>past experience</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td><input type='checkbox' name='delete_ids[]' value='" . $row["id"] . "'></td>";
                                echo "<td>" . $row["name"] . "</td>";
                                echo "<td>" . $row["address"] . "</td>";
                                echo "<td>" . $row["phone"] . "</td>";
                                echo "<td>" . $row["age"] . "</td>";
                                echo "<td>" . $row["email"] . "</td>";
                                echo "<td>" . $row["pexp"] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='7'>No data found</td></tr>";
                        }
                        $result->free();
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="admin-buttons">
                <h2>Manage Data</h2>
                <button type="submit" name="deleteSelected">Reject Applicant</button>

                <div class="spacer"></div>
            </div>
        </div>
    </form>

</body>

</html>

<?php

$conn->close();
?>