<?php

require'configbuses.php';

if(isset($_POST["submit"])){

   $bus = ( $_POST["bus"]);
   $plate =  $_POST["plate"];
   $time = $_POST["time"];
   $orginal = $_POST["orginal"];
   $destination = $_POST["destination"];
 
   

   $query = "INSERT INTO buses
   VALUES('$bus' , '$plate','$time', '$orginal', '$destination') ";
   mysqli_query($conn, $query);


}

   
   if (empty($bus) || empty($plate) || empty($orginal) ||empty($destination)) {
    echo "Please fill in all required fields.";
} else {
    // Save the data to the database or perform any other necessary actions
    // Your saving logic here
    echo "New bus added successfully.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" type="x-icon" href="logo.png">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>BUS MANAGMENT</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   
</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>ADD BUS</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="bus" required placeholder="bus N">
      <input type="text" name="plate" required placeholder="plate number">
      <input type="time" name="time" required placeholder="time">
      <input type="text" name="orginal" required placeholder="orginal">
      <input type="text" name="destination" required placeholder="destination">
      <input type="submit" name="submit" value="ADD BUS" class="form-btn">
    
   </form>

</div>

</body>
</html>

