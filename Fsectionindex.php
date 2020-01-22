<?php
// This function returns a result array of ID and Para fields.

//turn debugging on
ini_set('display_errors', 'On');
error_reporting(E_ALL);

//define function
function Fsectionindex ($pno){

  //use global database connection
  global $mysqli;

  $paraquery = "SELECT ID,Section FROM B1v12019 WHERE Section='$pno'";
  $pararesult = $mysqli->query($paraquery);
      
        //find the matching ID field and return it
  $prow = mysqli_fetch_array($pararesult); 
  var_dump($prow);
  $pid = $prow['ID'];
  
 return $pid;
 $pararesult->close();
} /*end function*/
 ?>
