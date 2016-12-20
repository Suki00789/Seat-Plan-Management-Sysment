<?php 
include "conn.php"; 
$sql = "SELECT * FROM `batch52`";
$result = $conn->query($sql);
// echo $result->num_rows;die;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Library Project</title>
    
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

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
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav pull-right">
            <li><a href="adminhome.php">Home</a></li>
            <li><a href="registrationdata.php">Registraion</a></li>
            <li><a href="batch52.php">Batch 52</a></li>
            <li><a href="batch60.php">Batch 60</a></li>
            <li><a href="logout.php">Log Out</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  <div class="container">
    <h1>Registration File</h1>
    <p class="lead">We have <?php echo ($result->num_rows ? $result->num_rows : 0); ?> Students in 52 Batch.</p>
    
    <?php if($result->num_rows > 0): ?>
      
      <table class="table table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>Username</th>
                <th>User Id</th>
                <th>Batch</th>
                <th>Registration Complete?</th>
                <th>Receipt No.</th>
              </tr>
            </thead>
            <tbody>
              <?php 
          while ( $row = $result->fetch_assoc() ) {
            // echo $i . ". " . $row['name'] . "(" . $row['id'] . ")<br>";
            echo "<tr><td>".$row['id']."</td>
                      <td>".$row['name']."</td>
                      <td>".$row['userid']."</td>
                      <td>".$row['btch']."</td>
                      <td>".$row['reg_com']."</td>
                      <td>".$row['reg_fee']."</td>
                  </tr>";
          }
               ?>
              
            </tbody>
          </table>

    <?php endif; ?>


  </div><!-- /.container -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>