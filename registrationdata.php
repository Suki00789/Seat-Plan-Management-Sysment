<!DOCTYPE html>
<html>
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
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav pull-right">
            <li><a href="adminhome.php">Home</a></li>
            <li><a href="registrationdata.php">Registraion</a></li>
            <li><a href="batch.php">Batch</a></li>
            <li><a href="uploaddata.php">Upload</a></li>
            <li><a href="logout.php">Log Out</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  <div class="container">
    <h1>Registration File</h1>
</div>
</body>
</html>


<br><br>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("seatplan", $con);

$query = "select * from registration where approved='0'";

$result=mysql_query($query);

$i = 1; //counter for the checkboxes so that each has a unique name
echo "<form action='process.php' method='post'>"; //form started here
echo "<table border='20' width='100%' height='500px'>
<tr>
                <th>ID</th>
                <th>Employee/Student</th>
                <th>Username</th>
                <th>User Id</th>
                <th>Joining Date/Batch</th>
                <th>Department Name</th>
                <th>Email Id</th>
                <th>Phone No.</th>
                <th>Password</th>
                <th>Approval</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['emp_stu'] . "</td>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['userid'] . "</td>";
  echo "<td>" . $row['join_btch'] . "</td>";
  echo "<td>" . $row['dept'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['mobile'] . "</td>";
  echo "<td>" . $row['pass'] . "</td>";
  echo "<td><input type='checkbox' name='check[$i]' value='".$row['id']."'/>";   
  echo "</tr>";
  $i++;
  }
echo "</table><br><br>";
echo "<input type='submit' name='approved' value='approved'/><br><br><br>";
echo "</form>";

mysql_close($con);
?>

