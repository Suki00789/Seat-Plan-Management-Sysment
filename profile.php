<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Your Home Page</title>
	<link href="stufile.css" rel="stylesheet" type="text/css">
</head>
<body>
	
		<b id="welcome">
		Welcome <i><?php echo $login_session; ?></i>
		<br />
		You are a <i><?php echo $login_type; ?></i>
		</b><br>
		<b id="logout"><a href="logout.php"><img src="img/logout.png" width="90px" height="50px"></a></b>

		

<!--teacher login-->

		<?php 
		if(!strcmp("Teacher", $login_type)){?>

			<div class="a">
				<?php include 'seatplan1.php'; ?>
	        <br><br>

				<center><a href="upindex.php"><img src="img/upload.png" width="200px" height="60px"></a></center>
				<br><br>
			</div>


<!--admin login-->


	<?php 
		}elseif(!strcmp("Admin", $login_type)){?>

    
    <div class="a">
		<?php include 'adminhome.php'; ?>
	</div>

<!--attendent login-->


	<?php 
		}elseif(!strcmp("Attendent", $login_type)){?>

    
    <div class="a">
		<?php include 'view.php'; ?>
	</div>

<!--student login-->


	<?php
		}else{?>

		<div class="a">
		<?php include 'view.php'; ?>
	</div>	
           
	<?php }; ?>

<div class="footer">&copy Designed & Developed by SSS</div>
		
	
</body>
</html>