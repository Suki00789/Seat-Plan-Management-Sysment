<?php 
include "dbconfig.php"; 
$sql = "SELECT * FROM `tbl_uploads`";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Library Project</title>
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
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav pull-right">
            <li><a href="adminhome.php">Home</a></li>
            <li><a href="registrationdata.php">Registraion</a></li>
            <li><a href="batch52.php">Batch 52</a></li>
            <li><a href="batch60.php">Batch 60</a></li>
            <li><a href="adupload.php">Upload File</a></li>
            <li><a href="logout.php">Log Out</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  <div class="container">
    <h1>Upload File</h1>
    
        <table class="table table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>File</th>
                <th>Type</th>
                <th>Size</th>
              </tr>
            </thead>
            <tbody>
              <?php 
          while ( $row = $result->fetch_assoc() ) {
            echo "<tr><td>".$row['id']."</td>
                      <td>".$row['file']."</td>
                      <td>".$row['type']."</td>
                      <td>".$row['size']."</td>
                  </tr>";
          }
               ?>
              
            </tbody>
          </table>

    </div><!-- /.container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>