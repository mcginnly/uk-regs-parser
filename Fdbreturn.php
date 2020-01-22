<?php
/*This function takes two field names and a condition string and returns the mysqli result */

//turn debugging on
ini_set('display_errors', 'On');
error_reporting(E_ALL);

//define function as (Field 1, Field 2, match parameter)
function dbreturn ($F1,$F2,$condition){

  //use global database connection
  global $mysqli;
 
  //query the database and return a row array that matches the para number
  $query = "SELECT $F1,$F2 FROM B1v12019 $condition";
  $result = $mysqli->query($query);

 return $result;
 $result -> free_result();

} /*end function*/
 ?>
