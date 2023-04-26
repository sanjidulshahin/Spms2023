<?php
  include 'connect.php';
  error_reporting(0);
  session_start();
  //session_destroy();

  if ($_SESSION['message']){
    $message = $_SESSION['message'];
    echo "<secipt type ='text/javascript'>
    alert('$message');
     </script>";
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Student Data Entry</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
      }
      
      form {
        background-color:mediumaquamarine;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.3);
        width: 500px;
        margin: 0 auto;
      }
      
      label {
        display: inline-block;
        width: 150px;
        margin-bottom: 10px;
      }
      
      input[type="text"],
      input[type="number"] {
        padding: 10px;
        font-size: 16px;
        border-radius: 5px;
        border: none;
        box-shadow: 0 0 5px rgba(0,0,0,0.2);
        width: 250px;
        margin-bottom: 20px;
      }
      
      input[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 5px;
        border: none;
        cursor: pointer;
      }
      
      input[type="submit"]:hover {
        background-color: #3e8e41;
      }
      
      
      h1 {
        text-align: center;
        font-size: 36px;
        color: #4CAF50;
      }
    </style>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="nav">
        <div class="nav-links">
          <ul>
          <li><a href="employee_dashboard.php" target="_self">Dashboard</a></li>
          <li><a href="logout.php" target="_self">Logout</a></li>
            </ul>
        </div>
    </div>
    <h1>SPMS 4.0</h1>
    <form action="CSVFILECONFIGURE.php" method="POST" enctype='multipart/form-data'>
      <label for="student-id">CSV FILE:</label>
      <input type="file"  id="file" name="file" accept=".csv" />
      
      <input type="submit" value="Import" name ="import" id="submit">
    </form>
    

    <footer class="footer">
      <p>Student Performance Monitoring System</p>
    </footer>
  </body>
</html>
