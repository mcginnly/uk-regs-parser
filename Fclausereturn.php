
<?php
//turn debugging on
ini_set('display_errors', 'On');
error_reporting(E_ALL);

//define function
function Fclausereturn ($idstart,$idend){
  $idstart=intval($idstart)-1; //apply offsets to look a row above the clause number in the database to capture paragraph titles
  $idend=intval($idend)-2; //apply offset to look 2 rows above the next clause number in the database to avoid paragraph titles (may truncate - check double spacing where titles don't occur)

  //use global database connection
  global $mysqli;
 
  //query the database and return a row array
  $clausequery = "SELECT * FROM B1v12019 WHERE ID BETWEEN $idstart and $idend";
  $clauseresult = $mysqli->query($clausequery);

 return $clauseresult;
 $clauseresult -> free_result();

} /*end function*/
 ?>
