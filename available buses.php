<?php

require'configbuses.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" type="x-icon" href="logo.png">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>BUSES AVAILABLE</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table, th {
   padding-left: 10px;
   border-collapse: collapse;
   cursor: pointer;
   background-color: crimson;
   padding: 10px;
   
        }
        tr {
            border: 10px;
            border-radius: 10px;
   background-color: #333;
    /* Add a red border to all <tr> elements */
        }
        tr:hover{
            background:black;
            transition:0.4sec ;
            border-radius: 10px;
        }
       
    </style>

   <script>
        document.addEventListener("DOMContentLoaded", function() {
            var cells = document.querySelectorAll("tr");

            cells.forEach(function(cell) {
                cell.addEventListener("click", function() {
                    alert("Clicked: " + cell.textContent);
                    window.location.href = "reserve&pay.php";
                });
            });
        });
    </script>
      

</head>
<body>
   
<div class="form-container">

   <form action="HOME.html" method="post">
      <h3>BUSES AVAILABLE</h3>
      <p>pick a bus</p>
      <table>
        <tr >
            <th>BUS</th>
            <th>PLATE N</th>
            <th>TIME</th>
            <th>ORGINAL</th>
            <th>DESTINATION</th>
        </tr>
        <?php
      $conn= mysqli_connect("localhost","root","","bus_form");
if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}
$sql="SELECT bus,plate,time,orginal,destination from buses";
$result=$conn->query($sql);
if($result->num_rows >0) {
    while($row=$result->fetch_assoc()){
        echo
"<tr><td>".$row["bus"]."</td><td>"
.$row["plate"] ."</td><td>"
.$row["time"] ."</td><td>"
.$row["orginal"]."</td><td>"
. $row["destination"]."</td><td>"; 
}
echo"</table>";
}else{
    echo"0 result";
}
$conn->close();
      ?>
      </table>
    
      <p>buses available on each time<a href="HURRY RWANDA.php"><br>BACK TO HOME</a> </p>
      
   </form>

</div>

</body>
</html>