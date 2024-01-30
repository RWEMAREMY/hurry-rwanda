<?php

require'configpayment.php';

if(isset($_POST["submit"])){

   $name = ( $_POST["name"]);
   $email =  $_POST["email"];
   $from =  $_POST["from"];
   $to =  $_POST["to"];
   $sit = $_POST["sit"];
   $tel = $_POST["tel"];
   
 
   

   $query = "INSERT INTO recieved
   VALUES('$name' , '$email','$from','$to','$sit', '$tel') ";
   mysqli_query($conn, $query);


}



?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" type="x-icon" href="logo.png">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>reserve and pay</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">
   <form method="post"  action="">
      <h3>reserve and pay</h3>
      <input type="text" name="name" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="text" name="from" required placeholder="FROM:">
      <input type="text" name="to" required placeholder="TO:">
      <select name="sit"> <!-- Added name attribute -->
         <option>choose a seat</option>
         <option>1</option>
         <option>2</option>
         <option>3</option>
         <option>4</option>
         <option>5</option>
         <option>6</option>
         <option>7</option>
         <option>8</option>
         <option>9</option>
         <option>10</option>
         <option>11</option>
         <option>12</option>
         <option>13</option>
         <option>14</option>
         <option>15</option>
         <option>16</option>
         <option>17</option>
         <option>18</option>
         <option>19</option>
         <option>20</option>
         <option>21</option>
         <option>22</option>
         <option>23</option>
         <option>24</option>
         <option>25</option>
         <option>26</option>
         <option>27</option>
         <option>28</option>

      </select>
      <input type="tel" name="tel" placeholder="+250...." required>
      <button type="submit" name="submit" class="form-btn" onclick="showSuccessAlert()">PAY NOW</button>
      
      <p> <br><a href="available buses.php">CHECK ON BUS</a></p>
   </form>
</div>
<?php
if (empty($name) || empty($email) || empty($sit) ||empty($tel)) {
    echo "Please fill in all required fields.";
}
?>


<script>
      function showSuccessAlert() {
         
         const paymentSuccessful = true; 

         if (paymentSuccessful) {
            alert("You have paid successfully");
           
         }
      }
   </script>

<?php
if (isset($_POST['submit'])) {
    header("Location: ROUTING.PHP");
    exit;
}
?>

</body>
</html>
