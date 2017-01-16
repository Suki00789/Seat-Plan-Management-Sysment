<?php 
header("Content-Type: application/xls");   
header("Content-Disposition: attachment; filename=seatplan.xls");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Seat Plan Management System</title>
    
    
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="teachfile.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="stylesheet/style.css">

  </head>
  <body>

  <b id="logout"><a href="logout.php"><img src="img/logout.png" width="90px" height="50px"></a></b>
    

  <div class="text">
   <div class="info">
      <?php
      session_start();
  
    $aDoor = $_POST['formDoor'];
    if(empty($aDoor)) 
    {
    echo("You didn't select any batch.");
    } 
    else if(($N = count($aDoor))<2 || ($N = count($aDoor)) >3)
    {
        echo ("Select at least 2 or highest 3 batches");
    }
    else
    {
    $N = count($aDoor);
      if($N == 2)
    {
      session_start();
      $_SESSION['formDoor'] = $_POST['formDoor'];
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
    <br><br><br><br>
  </div>

  <div class="box">
    <p>Date:</p>
    <p>Time:</p>
    <p>Room No:</p>
    <p>Batch:</p>
    <p>Course Code:</p>
    <p>Course Title:</p>
  </div>

  <br><br><br><br><br><br><br><br><br>
  
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
   <form method="post" action="seatplan.php" >
        <center>
            <p>
      </br>
              <input type="submit" name="export_excel" class="btn btn-success" value="Export to Excel" /> 
                </p>
        </center> 
      </form> 

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  
  </td>
</tr>
</table>

</div>
 <!--seat plan End-->
 


</body>
</html>