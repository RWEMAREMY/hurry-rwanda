<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" type="x-icon" href="logo.png">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <h1>DASHBOARD</h1>
      <a href="add-buses.php" class="btn">ADD BUSES</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="register_ADMIN.php" class="btn">ADD ADMIN</a>&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="reserved.php" class="btn">VIEW RESERVATION</a>&nbsp;&nbsp;&nbsp;&nbsp;
      </a><br><br><br><br><br><br><br><br>
      <a href="admin_login.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>