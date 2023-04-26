<?php
  include 'connect.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Employee Dashboard</title>
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <style>
      body{
        background-color:dimgrey;
      }

      

      .nav-links a:hover {
        color: #0056b3;
        border-bottom: 2px solid #0056b3;
      }

      
    </style>

  </head>

  <body>

    <div class="nav">
        <div class="nav-header">
          <div class="nav-title">
            SPMS 4.0
          </div>
        </div>
        <div class="nav-links">
          <ul>
            <li><a href="employee_dashboard.php" target="_self">Dashboard</a></li>
            <li><a href="ploAnalysisDepartmentProgramSchoolAverage.php" target="_self">PLO Analysis With Department/Program/School Average</a></li>
            <li><a href="ploAnalysisOverall.php" target="_self">PLO Analysis (Overall, CO Wise, Course Wise)</a></li>
            <li><a href="logout.php" target="_self">Logout</a></li>
          </ul>
        </div>
    </div>

    <div id="title">
      <div>SPMS</div>
      <div>4.0</div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4

   </body>

</html>