<?php
/*This function takes a clause/paragraph number and then returns the corresponding ID no. */

//turn debugging on
ini_set('display_errors', 'On');
error_reporting(E_ALL);

//define function
function Fparareturn ($pno){

  //use global database connection
  global $mysqli;
 
  //query the database and return a row array that matches the para number
  $pquery = "SELECT ID,para FROM B1v12019 WHERE para='$pno'";
  $presult = $mysqli->query($pquery);

  //find the matching ID field and return it
  $prow = mysqli_fetch_array($presult); 
  $pid = $prow['ID'];

 return $pid;
 $presult -> free_result();

} /*end function*/
 ?>
