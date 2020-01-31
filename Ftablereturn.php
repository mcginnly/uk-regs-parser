
<?php
//turn debugging on
ini_set('display_errors', 'On');
error_reporting(E_ALL);

//define function
function Ftablereturn ($table){

  //use global database connection
  global $mysqli;
 
  $table="`B1v1-".$table."`";
  
  //query the database and return a row array
  $tablequery = "SELECT * FROM $table";
  $payload = $mysqli->query($tablequery);
  

  //$payload=mysqli_fetch_all($tableresult);
  

  
 return $payload;
 $tableresult -> free_result();

} /*end function*/
 ?>
