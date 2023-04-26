

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>

    <style>
      body{
        background-color: #f2f2f2;
        font-family: Arial, Helvetica, sans-serif;
      }

      .mainContainer{
        margin-top:3%;
        width:30%;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        padding: 20px;
      }

      .ID{
        font-size: 18px;
        background: #f2f2f2;
        color: #333;
        margin-left:15px;
        margin-bottom:16px;
        border-radius: 8px;
        border:none;
        padding: 10px;
        width: 80%;
      }

      .ID:focus{
        background: #e0e0e0;
      }

      label{
        font-size: 20px;
        color:black;
        font-weight:bolder;
        margin-bottom: 10px;
        display: block;
      }

      .submitButton{
        height: 46px;
        width: 100%;
        border-radius: 8px;
        border: none;
        outline: none;
        background: #007bff;
        color: #fff;
        font-size: 22px;
        letter-spacing: 2px;
        text-transform: uppercase;
        cursor: pointer;
        font-weight: bold;
        margin-top: 20px;
        transition: all 0.2s ease-in-out;
      }

      .submitButton:hover{
        background: #0066cc;
      }

      .img{
        display:block;
        margin-left:auto;
        margin-right:auto;
        width:80%;
      }

      .footer{
        position: fixed;
        padding: 10px 10px 0px 10px;
        bottom: 0;
        width: 100%;
        height: 40px;
        background-color: #007bff;
        text-align: center;
        color: #fff;
        font-size: 16px;
        font-weight: bold;
      }

      .selectNew{
        height: 46px;
        width: 100%;
        border-radius: 8px;
        border: none;
        outline: none;
        background-color: #f2f2f2;
        color: #333;
        font-size: 16px;
        letter-spacing:2px;
        text-transform: uppercase;
        cursor:pointer;
        font-weight: lighter;
        margin-bottom: 10px;
        padding-left: 10px;
      }

      .selectNew:focus{
        background-color: #e0e0e0;
      }
      .form{
        margin-top:50px;
      }

    </style>

  </head>
  <body>

 <!-- <?php
 if($invalid==1){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong></strong> Invalid credentials!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  }
  ?> -->
  
  <!--<img class="img" src="iubbackground.jpeg">-->

  
  
  
  <div style="display:flex;justify-content:center;">
  <div class="mainContainer">
    <div id="title">
        <div>SPMS</div>
        <div>4.0</div>
    </div>
   <form action="loginconfigure.php" method="post">
  <div class="form">
    
    <div>
    <select name="userType" class=" selectNew">
             <option disabled selected>User Type</option>
             <option value="student">Student</option>
             <option value="faculty">Faculty</option>
             <option value="department head">Department Head</option>
             <option value="dean">Dean</option>
    </select>
    </div>
    <br>

    
    <input class="ID"  type="text" name="ID" placeholder="Enter Your ID">
    <br>
    
    <input class="ID" type="password" name="password" placeholder="Enter Your Password"><br>
    <input type="submit" name="submit" value="Login" class="submitButton">
    </form>
  </div>
  </div>


</body>
<footer class ="footer">
  <div>
    <h3>Student Performance Monitoring System</h3>
  </div>
</footer>
</html> 