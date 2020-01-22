<?php
// This function returns a result array of ID and Para fields.

//turn debugging on
ini_set('display_errors', 'On');
error_reporting(E_ALL);

//define function
function Fparaindex (){

  //use global database connection
  global $mysqli;

  $paraquery = "SELECT `ID`,`Para` FROM `B1v12019` GROUP BY `Para` ORDER BY `ID` ASC ";
  $pararesult = $mysqli->query($paraquery);
      
 return $pararesult;
 $pararesult->close();
} /*end function*/
 ?>
