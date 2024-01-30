<?php

require'configpayment.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" type="x-icon" href="logo.png">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>RESERVATIONS</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table, th {
   padding-left: 10px;
   border-collapse:collapse;
   cursor: pointer;
   background-color: crimson;
   padding: 10px;
   
        }
        tr {

            border: 10px;
            border-radius: 10px;
   background-color: #121212;
    /* Add a red border to all <tr> elements */
        }
       
       
    </style>
    
</head>
<body>
   
<div class="form-container">

   <form action="HOME.html" method="post">
      <h3>RESERVED</h3>
      <table>
        <tr >
            <th>NAME</th>
            <th>FROM</th>
            <th>TO</th>
            <th>SIT</th>
            <th>TEL</th>
        </tr>
        <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "paymenthr";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, `from`, `to`, sit, tel FROM recieved";
$result = $conn->query($sql);

if ($result) {
    if ($result->num_rows > 0) {
        echo "<table style='border-collapse: collapse; width: 104.5%;'>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["from"] . "</td>";
            echo "<td>" . $row["to"] . "</td>";
            echo "<td>" . $row["sit"] . "</td>";
            echo "<td>" . $row["tel"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
} else {
    // Output the error message if the query fails
    echo "Query error: " . $conn->error;
}

$conn->close();
?>


      </table>
    
      <p>buses available on each time<a href="admin_page.php"><br>BACK TO HOME</a> </p>  
     
      
   </form>

</div>

</body>
</html>