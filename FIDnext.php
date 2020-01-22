<?php
/*This function takes an ID number corresponding to a clause number as an input and then returns the next ID number in the database that has a paragraph clause. */

//turn debugging on
ini_set('display_errors', 'On');
error_reporting(E_ALL);

//define function
function FIDnext($idno){
  //echo 'next input ID: '.$idno.'<br>';  
  //use global database connection
  global $mysqli;
 
  //query the database for a list of rows and paras
  $query = "SELECT ID,Para FROM B1v12019 GROUP BY Para ORDER BY ID ASC ";
  $result = $mysqli->query($query);
 
  //now iterate through an array of the results until the test['ID'] number  > $idno and set $nextid (would be much better to be able to start at %idno and just find the next result)
  while ($test = mysqli_fetch_array($result)) {
    if (intval($test['ID'])>intval($idno)){
    $nextidno=$test['ID'];
    break;
    } //end if
  } //end while
  //echo 'next output ID: '.$nextidno.'<br>';
 return $nextidno;
 $result -> free_result();

} /*end function*/
 ?>
