<?php
  $con = mysql_connect("localhost","root","");
  if (!$con)
    {
    die('Could not connect: ' . mysql_error());
    }

  mysql_select_db("seatplan", $con); 

  if(isset($_POST['approved'])){
                  if(isset($_POST['check'])){
                      foreach ($_POST['check'] as $value){
                          $sql = "UPDATE registration SET approved = 1 WHERE id = $value"; 
                          mysql_query($sql) or die (mysql_error());
                      }
                  }
              }
              echo "Approved, You can Login Now";

?>