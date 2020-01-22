<?php
/*This function takes two field names and a cell match parameter  and then returns the corresponding ID no. */

//turn debugging on
ini_set('display_errors', 'On');
error_reporting(E_ALL);

//define function as (Field 1, Field 2, match parameter)
function dbsearch ($F1,$F2,$dno){

  //use global database connection
  global $mysqli;
 
  //query the database and return a row array that matches the para number
  $query = "SELECT $F1,$F2 FROM B1v12019 WHERE $F2='$dno'";
  $result = $mysqli->query($query);

  //find the matching ID field and return it
  $prow = mysqli_fetch_array($result); 
  $ID = $prow[$F1];

 return $ID;
 $result -> free_result();

} /*end function*/
 ?>
