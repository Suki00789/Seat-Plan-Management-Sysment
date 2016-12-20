<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Your Home Page</title>
	<link href="stufile.css" rel="stylesheet" type="text/css" />
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

		<?php  
$msg = '';
if(isset($_POST['submit'])){ 


include('conn.php');

  $username = $_POST['name'];
  $userid = $_POST['userid'];
  $userbid = $_POST['userbid'];
  $batch = $_POST['btch'];
  $reg_com = $_POST['reg_com'];
  $reg_fee = $_POST['reg_fee'];
 

  if($batch!=60)
  {
    $sql = "INSERT INTO `batch52`(`name`,`userid`,`btch`,`reg_com`,`reg_fee`) VALUES ('".$username."', '".$userid."', '".$batch."', '".$reg_com."', '".$reg_fee."')";
    //echo $sql;die();

    if($conn->query($sql)===TRUE){
      $msg= "successfully received";
      echo $msg;
    }else{
      $msg= "Error: " . $conn->error;
      echo $msg;
    }
  }else {
  	$sql1 = "INSERT INTO `batch60`(`name`,`userbid`,`btch`,`reg_com`,`reg_fee`) VALUES ('".$username."', '".$userbid."', '".$batch."', '".$reg_com."', '".$reg_fee."')";
    //echo $sql;die();

    if($conn->query($sql1)===TRUE){
      $msg= "successfully received";
      echo $msg;
    }else{
      $msg= "Error: " . $conn->error;
      echo $msg;
    }
  	
  }
}

?>

		<div class="a">
		<?php include 'stufile.php'; ?>
	</div>	
           
	<?php }; ?>

<div id="footer">
	<p>&copy Designed & Developed by Suki</p>
</div>
		
	
</body>
</html>