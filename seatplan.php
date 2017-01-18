<!DOCTYPE html>
<html>
  <head>
  	<title>Seat Plan Management System</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="teachfile.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="stylesheet/style.css">
  </head>
  
<body>
  <div class="abc">
	  <b id="logout"><a href="logout.php"><img src="img/logout.png" width="90px" height="50px"></a></b>
	   <a href="profile.php"><img src="img/back.png" width="110px" height="50px"></a>
	   </div>

	  <div class="text">
	   <div class="info">
	   		<?php
	   		session_start();

			$_SESSION['formDoor']=$_POST['formDoor'];
		    $aDoor = $_POST['formDoor'];
		  if(empty($aDoor)) 
		  {
			echo("You didn't select any batch.");
		  } 
		  else if(($N = count($aDoor))<2 || ($N = count($aDoor)) >3)
		  {
		  		echo ("Select at least 2 or highest 3 batches");
				header('Location: seatplan1.php');
		  }
		  else
		  {
			$N = count($aDoor);
		    if($N == 2)
			{
				session_start();
				$_SESSION['formDoor'] = $_POST['formDoor'];
				header('Location: seatplan_1.php');
			}
			echo("You selected $N Batches(s): ");
			for($i=0; $i < $N; $i++)
			{
			  echo($aDoor[$i] . " ");
			}
		  }
		?>
			
		</div>
	    <center><h2>Seat Plan</h2></center>
	    <br><br>
	  </div>
	  
	 <!--seat paln Start-->
	 
	 
	<div id="divStyle">
	<?php
		
		
		$connection = mysql_connect("localhost", "root", "");
		$batchit0 = stripslashes($aDoor[0]);
		$batchit1 = stripslashes($aDoor[1]);
		$batchit2 = stripslashes($aDoor[2]);
		$batchit0 = mysql_real_escape_string($batchit0);
		$batchit1 = mysql_real_escape_string($batchit1);
		$batchit2 = mysql_real_escape_string($batchit2);
		// Selecting Database
		$db = mysql_select_db("seatplan", $connection);
		
		$result0=mysql_query("SELECT count(*) as total from batch where batchid = '$batchit0'", $connection);
		$data0=mysql_fetch_assoc($result0);
		$total0 = $data0['total'];
		
		$result1=mysql_query("SELECT count(*) as total from batch where batchid = '$batchit1'", $connection);
		$data1=mysql_fetch_assoc($result1);
		$total1 = $data1['total'];
		
		$result2=mysql_query("SELECT count(*) as total from batch where batchid = '$batchit2'", $connection);
		$data2=mysql_fetch_assoc($result2);
		$total2 = $data2['total'];
		/*
		$data=mysql_fetch_assoc($result);
		echo "TOtal Students:".$data['total']."</br>";
		*/
		// SQL query to fetch information of registerd users and finds user match.
		$query0 = mysql_query("select * from batch where batchid = '$batchit0'", $connection);
		$rows0 = mysql_num_rows($query0);
		$query1 = mysql_query("select * from batch where batchid = '$batchit1'", $connection);
		$rows1 = mysql_num_rows($query1);
		$query2 = mysql_query("select * from batch where batchid = '$batchit2'", $connection);
		$rows2 = mysql_num_rows($query2);
		
		$n = 0;
		while($total0 || $total1 || $total2)
		{

			?>
			<table border="1px;">
			<?php
			
			echo "<tr>";
			?><td colspan="6">
					<?php
					    echo "<h4>Date.: </h4>";
					    echo "<h4>Time: </h4>";
						echo "<h4>Room No.: </h4>";
						echo "<h4>Course Code: </h4>";
						echo "<h4>Course Title: </h4>";
					echo "</td>";	
				echo "</tr>";
			
			echo "<tr>";
			
			echo "<td>";
			$data = 7;
			
			while($data)
			{
				$row0 = mysql_fetch_array($query0);?>
				<div style="border: 1px solid black;"><?php
					echo $row0['batchid']." : ";
					echo $row0['stdid'];
					if($total0>0)
						$total0 = $total0 - 1;
				?></div><?php
				$data = $data -1;
			}
			
			echo "</td>";
			echo "<td>";
			$data = 7;
			
			while($data)
			{
				$row1 = mysql_fetch_array($query1);?>
				<div style="border: 1px solid black;"><?php
					echo $row1['batchid']." : ";
					echo $row1['stdid']; 
					if($total1>0)
						$total1 = $total1 - 1;
				?></div><?php
				$data = $data -1;
			}
			echo "</td>";
			echo "<td>";
			$data = 7;
			
			while($data)
			{
				$row2 = mysql_fetch_array($query2);?>
				<div style="border: 1px solid black;"><?php
					echo $row2['batchid']." : ";
					echo $row2['stdid']; 
					if($total2>0)
						$total2 = $total2 - 1;
				?></div><?php
				$data = $data -1;
			}
			echo "</td>";
			
			echo "<td>";
			$data = 7;
			
			while($data)
			{
				$row0 = mysql_fetch_array($query0);?>
				<div style="border: 1px solid black;"><?php
					echo $row0['batchid']." : ";
					echo $row0['stdid'];
					if($total0>0)
						$total0 = $total0 - 1;
				?></div><?php
				$data = $data -1;
			}
			
			echo "</td>";
			echo "<td>";
			$data = 7;
			
			while($data)
			{
				$row1 = mysql_fetch_array($query1);?>
				<div style="border: 1px solid black;"><?php
					echo $row1['batchid']." : ";
					echo $row1['stdid']; 
					if($total1>0)
						$total1 = $total1 - 1;
				?></div><?php
				$data = $data -1;
			}
			echo "</td>";
			echo "<td>";
			$data = 7;
			
			while($data)
			{
				$row2 = mysql_fetch_array($query2);?>
				<div style="border: 1px solid black;"><?php
					echo $row2['batchid']." : ";
					echo $row2['stdid']; 
					if($total2>0)
						$total2 = $total2 - 1;
				?></div><?php
				$data = $data -1;
			}
			echo "</td>";


				
			echo "</tr>";
		 	echo "</table>";
				?>
					<table>
						<tr><td height="60px"></td></tr>
					</table>
				<?php
		}
	?>
	<table>
	<tr>
		<td colspan="6">
		 <form method="post" action="excel.php" >
	        <center>
	            <p>
	              <input type="submit" name="export_excel" class="btn btn-success" value="Export to Excel" /> 
	                </p>
	        </center> 
	      </form> 

	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <script src="../js/bootstrap.min.js"></script>
		
		</td>
	</tr>
	</table>

</div>
 <!--seat plan End-->
 
<center><a href="upindex.php"><img src="img/upload.png" width="200px" height="60px"></a></center> 
 
<br><br>

<div class="footer">&copy; Designed & Developed by SSS</div>

</body>
</html>