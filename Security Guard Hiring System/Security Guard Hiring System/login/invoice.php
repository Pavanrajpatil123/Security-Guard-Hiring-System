<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "dboshs";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['customerId'])) {
    $customerId = $_GET['customerId'];

    // Fetch customer data based on ID
    $invoiceQuery = "SELECT * FROM custlist WHERE id = $customerId";
    $invoiceResult = $conn->query($invoiceQuery);

    if ($invoiceResult->num_rows > 0) {
        $row = $invoiceResult->fetch_assoc();

        // Generate your invoice HTML or any other format you prefer
        $invoiceContent = "
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Invoice for {$row['name']}</title>
            <style>
            body {
                margin: 0;
                padding: 0;
                background-image: url('img/g2.jpg');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                height: 90vh;
                font-family: Arial, sans-serif;
                background-color: rgba(0, 0, 0, 0.7);
            }
                .invoice {
                    max-width: 600px;
                    margin: 80px auto;
                    padding: 20px;
                    background-color:rgba(255, 255, 255, 0.8);
                    border: 1px solid #ddd;
                    border-radius: 8px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    
                }
                h2 {
                    color: #333;
                }
                p {
                    margin: 0;
                    margin-bottom: 10px;
                }
                table {
                    width: 100%;
                    border-collapse: collapse;
                    margin-top: 40px;

                }
                th, td {
                    border: 1px solid #ddd;
                    padding: 10px;
                    text-align: left;
                }
                th {
                    background-color: rgba(255, 255, 255, 0.8);
                }
            </style>
        </head>
        <body>
            <div class='invoice'>
                <h2>Invoice for {$row['name']}</h2>
                <p>Address: {$row['address']}</p>
                <p>Email: {$row['email']}</p>
                <p>Service: {$row['service']}</p>
                <p>Manpower: {$row['manpower']}</p>
                <p>Phone: {$row['phone']}</p>
                
                <!-- Example: Create a bill based on the number of manpower -->
                <h3>Bill Details</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Manpower Service</td>
                            <td>{$row['manpower']}</td>
                            <td> Rs.2000.00</td>
                            <td>Rs." . number_format($row['manpower'] * 2000, 2) . "</td>
                        </tr>
                        <!-- Add more rows for additional services if needed -->
                    </tbody>
                </table>

            </div>
        </body>
        </html>
        ";

        // Display the invoice content
        echo $invoiceContent;
    } else {
        echo "Customer not found.";
    }
} else {
    echo "Invalid request.";
}

$conn->close();
