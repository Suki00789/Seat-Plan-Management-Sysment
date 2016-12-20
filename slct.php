<?php
include_once 'conn.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Seat Plan Management System</title>
<link href="slct.css" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="logo"><a href="home.html"><img src="logo/logo.jpg" width="150px" height="150px"/></a></div>

<div class="header">Stamford University Bangladesh
  <div class="header1">WE BRING OUT THE BEST IN YOU</div>
</div>

<div class="text">
		<div class="info"><h2>Select The Bacth For Seat Plan</h2></div>
	</div>

<div id="profile">
<input type="checkbox" name="btch52" value="btch52">Batch 52<br>
<input type="checkbox" name="btch60" value="btch60">Batch 60<br>
<input type="checkbox" name="btch61" value="btch61">Batch 61<br><br>
<form method="post" action="seatplan.php" >
        
            <a href="seatplan.php"><img src="img/submit.png" width="100px" height="50px"></a> 
         
      </form> 
</div>

<div id="footer">
<label>&copy; Designed & Developed by Suki</label>
</div>
</body>
</html>