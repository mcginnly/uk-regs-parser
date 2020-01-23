<?php
/*This function takes an ID number and then returns the corresponding clause/paragraph number */



//define function
function FIDreturn ($IDno){
//turn debugging on
ini_set('display_errors', 'On');
error_reporting(E_ALL);

  //use global database connection
  global $mysqli;

 
  //call the ID-para index
  if (!function_exists('Fparaindex')){
    include "Fparaindex.php";
  }
  $paraindex = Fparaindex();
  
  
  //get the next clause number that occurs after the input IDno
  while ($test = mysqli_fetch_array($paraindex))
  {
    if (intval($IDno) <= intval($test['ID']))
      {

        $nextclause=$test['Para'];
        break;
      }
    }
    
  //now get the corresponding ID of the next clause number
  if (!function_exists('Fparareturn')){
    include "Fparareturn.php";
  }
  $id=Fparareturn($nextclause);
  
  //Now get the previous clause ID
  if (!function_exists('FIDprev')){
    include "FIDprev.php";
  }
  $previd = FIDprev($id);
  
  //now get the clause number of the previous clause
  $paraindex = Fparaindex();
  while ($test = mysqli_fetch_array($paraindex))
  {
    if (intval($previd) == intval($test['ID']))
    {
      $clause=$test['Para'];
      break;
    }
  }

 return $clause;

} /*end function*/
 ?>
