<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
    <style>
      body {
         background: linear-gradient(135deg, #ffcc33, #ff6666);
         color: #fff;
         font-family: Arial, sans-serif;
         height: 100vh;
         display: flex;
         justify-content: center;
         align-items: center;
         margin: 0;
      }
      
      #form {
         background: rgba(0, 0, 0, 0.7);
         padding: 30px;
         border-radius: 15px;
         box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
         width: 100%;
         max-width: 500px;
         text-align: center;
      }

      #form h2 {
         margin-bottom: 20px;
         color: #ffcc33;
         text-transform: uppercase;
      }

      #form label {
         font-weight: bold;
         color: #ffcc33;
      }

      #form input[type="text"],
      #form input[type="number"],
      #form input[type="date"] {
         width: 100%;
         padding: 10px;
         margin: 10px 0;
         border: none;
         border-radius: 5px;
         box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
      }

      #form input[type="submit"] {
         background-color: #ff6666;
         color: #fff;
         border: none;
         padding: 10px 20px;
         border-radius: 5px;
         cursor: pointer;
         transition: background-color 0.3s ease, transform 0.3s ease;
         width: 100%;
      }

      #form input[type="submit"]:hover {
         background-color: #cc3333;
         transform: scale(1.05);
      }

      p {
         text-align: center;
         font-weight: bold;
         margin-top: 20px;
         color: #ffcc33;
      }
    </style>
   </head>
  <body>
   <form action="#" id="form" method="post">
      <h2>Registration Form</h2>

      <label for="name">Name:</label>
      <input type="text" name="name" id="name" required>

      <label for="age">Age:</label>
      <input type="number" name="age" id="age" required>

      <label for="dob">DOB:</label>
      <input type="date" name="dob" id="dob" required>

      <input type="submit" value="Submit" name="submit" id="submit">
  </form>

  <?php 
  if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $age = $_POST['age'];
      $date = new DateTime($_POST['dob']);
      $dob = $date->format('y-m-d');
      $query="insert into student_details(name,age,dob) values('$name',$age,$dob)";
      $sql=mysqli_query($conn,$query);
      if($sql){
          echo "<p>Success!</p>";
      } else {
          echo "<p>Failed to register.</p>";
      }
  }
  ?>
</body>
</html>
