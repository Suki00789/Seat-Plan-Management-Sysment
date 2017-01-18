<?php  
$msg = '';
if(isset($_POST['submit'])){ 


include('conn.php');

  $empstu = $_POST['emp_stu'];
  $username = $_POST['username'];
  $userid = $_POST['userid'];
  $joining = $_POST['join_btch'];
  $dept = $_POST['dept'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $pass = $_POST['pass'];

  if(!empty($username))
  {
    $sql = "INSERT INTO `registration`(`emp_stu`, `username`,`userid`,`join_btch`,`dept`,`email`,`mobile`,`pass`) VALUES ('".$empstu."','".$username."', '".$userid."', '".$joining."', '".$dept."', '".$email."', '".$mobile."', '".md5($pass)."')";
    //echo $sql;die();
	
	

    if($conn->query($sql)===TRUE){
		
		if(!strcmp($empstu,"Student"))
		{
			$sql = "INSERT INTO `batch`(`batchid`, `stdid`) VALUES ('".$joining."', '".$userid."')";
			$conn->query($sql);
		}
	
	
      $msg= "Successfully Received";
    }else{
      $msg= "Error: " . $conn->error;
    }
  }
}

?>


<!DOCTYPE html>
  <head>
    <title>Seat Plan Management System</title>
    <link href="register.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.css" rel="stylesheet">
  </head>

<body>

    <?php if (!empty($msg)) { ?>

      <div class="alert alert-info">
        <center><?php echo "$msg"; ?></center>
      </div>

    <?php  }; ?>

  <div class="logo"><a href="home.html"><img src="logo/logo.jpg" width="150px" height="150px"/></a></div>

  <div class="header">Stamford University Bangladesh
    <div class="header1">WE BRING OUT THE BEST IN YOU</div>
  </div>

      <div class="text">
          <div class="info"><h1>Register Form</h1>
              <h4><font color="#2A1F55">Employee / Student Register</font></h4>
          </div>
      </div>
      <div class="form">
          <div class="image"><img src="img/2.png" width="100%" height="100%"></div>
              <form class="register-form" action="" method="post">
                
                  <select name="emp_stu" id="list" class="form-slct" title="Please fill out this field.">
                      <option selected="Emp/stu" value="">Teacher/ Attendent/ Student</option>
                      <option value="Teacher">Teacher</option>
                      <option value="Student">Student</option>
                      <option value="Attendent">Attendent</option>
                  </select><br>
                  <input type="text" name="username" placeholder="Username" required="true"/>
                  <input type="text" name="userid" placeholder="User Id" required="true"/>
                  <input type="text" name="join_btch" placeholder="Joining Date / Batch" required="true"/>
                  
                  <select name="dept" id="list" class="form-slct" title="Please fill out this field.">
                      <option selected="selected" value="">Department Name</option>
                      <option value="Attendant">Attendent</option>
                      <option value="ARC">Department of Architecture</option>
                      <option value="BBA">Department of Business Administration</option>
                      <option value="CEN">Department of Civil Engineering</option>
                      <option value="Computer Science">Department of Computer Science &amp; Engineering</option>
                      <option value="ECO">Department of Economics</option>
                      <option value="EEE">Department of Electrical &amp; Electronic Engineering</option>
                      <option value="English">Department of English</option>
                      <option value="ENV">Department of Environmental Science</option>
                      <option value="FLM">Department of Film and Media Studies</option>
                      <option value="JLC">Japanese Language Center</option>
                      <option value="JRN">Department of Journalism &amp; Media Studies</option>
                      <option value="LAW">Department of Law</option>
                      <option value="MBO">Department of Microbiology</option>
                      <option value="Natural Science">Department of Natural Science</option>
                      <option value="Pharmacy">Department of Pharmacy</option>
              
                  </select><br>
                  
                  <input type="email" name="email" placeholder="Email Id"/>
                  <input type="number" maxlength="11" min="0"name="mobile" placeholder="Phone No." required="true"/>
                  <input type="password" name="pass" placeholder="Password" required="true"/>
                  <input name="submit" type="submit" value="Create">        

              </form>
              <p class="message">Already registered? <a href="index.php">Login</a></p>

              </div>

              <div class="footer"><center>&copy; Designed & Developed by SSS</center></div>
            


</body>
</html>
