<?php
/*This function takes an ID number corresponding to a clause number as an input and then returns the next ID number in the database that has a paragraph clause. */

//turn debugging on
ini_set('display_errors', 'On');
error_reporting(E_ALL);

//define function
function FIDprev($idno){
  
  //use global database connection
  global $mysqli;
  $count=0;
  //query the database for a list of rows and paras
  $query = "SELECT ID FROM B1v12019 GROUP BY Para ORDER BY ID ASC ";
  if ($result = $mysqli->query($query)) {

    
    //Get the matching array key for the ID number (should be a separate function)
    while ($row = mysqli_fetch_array($result)){
      if ($row['ID'] == $idno)
        {
          $row_number = $count;
          $prev_row = $row_number-1;
          
          break;
        }
      ++$count;
    }
    
    //Return the ID of the previous key. (should be a separate function)  
    $result = $mysqli->query($query);
    $resultarray = mysqli_fetch_all($result);
    $previdno = $resultarray[$prev_row][0];
    $result->close();
} //end if
  
 return $previdno;
 $result -> free_result();

} /*end function*/
 ?>
