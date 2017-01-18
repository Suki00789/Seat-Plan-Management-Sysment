<?php
include_once 'dbconfig.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Seat Plan Management System</title>
        <link rel="stylesheet" href="upstyle.css" type="text/css" />
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
<body>

    <div class="logo"><a href="home.html"><img src="logo/logo.jpg" width="150px" height="150px"/></a></div>

    <div class="header">Stamford University Bangladesh
        <div class="header1">WE BRING OUT THE BEST IN YOU</div>
    </div>

    <div class="text">
        <div class="info">
            <h2>Seat Plan</h2>
        </div>
        <center><h3>Computer Science & Engineering</h3></center>
    </div>
    <div id="body">
    	<table width="80%" border="1">
        <tr>
        <td>File Name</td>
        <td>View</td>
        </tr>
        <?php
    	$sql="SELECT * FROM tbl_uploads";
    	$result_set=mysql_query($sql);
    	while($row=mysql_fetch_array($result_set))
    	{
    		?>
            <tr>
            <td><?php echo $row['file'] ?></td>
            <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">Download</a></td>
            </tr>
            <?php
    	}
    	?>
        </table>
        
    </div>
    <div id="footer">&copy; Designed & Developed by SSS</div>
    
</body>
</html>