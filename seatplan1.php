

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Seat Plan Management System</title>
    
    
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="teachfile.css" rel="stylesheet" type="text/css" />

  </head>
  <body>

  <div class="text">
   <div class="info">
   		<h2>Select Batch</h2>
   		</div>
	<!--	<form action="seatplan.php" method="post">     --> 
	<form action="seatplan.php" method="post">

		<?php
		$connection = mysql_connect("localhost", "root", "");
	
	// Selecting Database
	$db = mysql_select_db("seatplan", $connection);
	// SQL query to fetch information of registerd users and finds user match.
	$query = mysql_query("select * from batch group by batchid", $connection);
	$rows = mysql_num_rows($query);
	while($row = mysql_fetch_array($query))
	{
		echo "<tr>";
		?>
		<input type="checkbox" name="formDoor[]" value="<?php echo $row['batchid'];?>" />
		<?php 
		echo $row['batchid'];
		echo "<br />";		
		echo "</tr>";
	}
	
?>
 
<input type="submit" name="formSubmit" value="Submit" />

		</form>
	

  </body>
</html>