<?php
/*This function returns a list of all paragraph numbers */

//turn debugging on
ini_set('display_errors', 'On');
error_reporting(E_ALL);

//define function
function Fparadrop (){

  //use global database connection
  global $mysqli;
 
  //query the database and return a row array for all paras
  $pdquery = "SELECT para FROM B1v12019 WHERE para != ''";
  $pdresult = $mysqli->query($pdquery);
  

  while ($test = mysqli_fetch_array($pdresult)) {
 
    //add a visibility flag
    $test['vis'] = 0;

    $pdrow[]=$test;

  }

 return $pdrow;
 $pdresult -> free_result();

} /*end function*/
 ?>
