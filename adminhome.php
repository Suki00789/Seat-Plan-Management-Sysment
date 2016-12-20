<?php 
include "conn.php"; 
$sql = "SELECT * FROM `registration`";
$result = $conn->query($sql);
// echo $result->num_rows;die;
?>

<!DOCTYPE html>

  <head>
    
    <title>Seat Plan Management System</title>
    
    <link href="css/bootstrap.css" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-default">

      <div class="container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.html">Seat Plan Management System</a>
        </div>

        <div id="navbar" class="collapse navbar-collapse"><center>
          <ul class="nav navbar-nav pull-right">
            <li><a href="adminhome.php">Home</a></li>
            <li><a href="registrationdata.php">Registraion</a></li>
            <li><a href="batch52.php">Batch 52</a></li>
            <li><a href="batch60.php">Batch 60</a></li>
            <li><a href="logout.php">Log Out</a></li>
          </ul></center>
        </div><!--/.nav-collapse -->

      </div>

    </nav>

    <h1><center>Hello Admin</center></h1>

    <center><img src="img/smiley1.png" width="200px" height="200px"></center>

    <h3><center>Welcome !!!<br>This Is Our Seat Plan Management System Admin Panel. Administrators Can Monitor & Manage The System Form This Panel.</center></h3>
  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../js/bootstrap.js"></script>

  </body>

</html>