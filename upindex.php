<?php
include_once 'conn.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>File Uploading With PHP and MySql</title>
<link href="upstyle.css" rel="stylesheet"  type="text/css" />
<link href="register.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="logo"><a href="home.html"><img src="logo/logo.jpg" width="150px" height="150px"/></a></div>

<div class="header">Stamford University Bangladesh
  <div class="header1">WE BRING OUT THE BEST IN YOU</div>
</div>

<div class="text">
		<div class="info"><h2>Upload Your File Here</h2></div>
	</div>
	

                

 <!--upload code-->      
<div id="body">
	<form action="upload.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file" />
	<button type="submit" name="btn-upload">Upload</button>
	</form>
    <br /><br />
    <?php
	if(isset($_GET['success']))
	{
		?>
        <label>File Uploaded Successfully...  <a href="view.php">click here to view file.</a></label>
        <?php
	}
	else if(isset($_GET['fail']))
	{
		?>
        <label>Problem While File Uploading !</label>
        <?php
	}
	else
	{
		?>
        <label>Try to upload any files(PDF, DOC, EXE, VIDEO, MP3, ZIP,etc...)</label>
        <?php
	}
	?>
</div></form></div>

<br><br><br><br><br><br><br><br><br>

<div id="footer">
<label>&copy; Designed & Developed by Suki</label>
</div>

</body>
</html>