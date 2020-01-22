<?php
function Fnewrow ($rowinsert){
echo "entering newrow<br>";
    global $mysqli; 
ini_set('display_errors', 'On');
         error_reporting(E_ALL);
         
  //$transaction = "START TRANSACTION; UPDATE B1v12019 SET ID = ID + 1 WHERE ID >=$rowinsert order by ID DESC; INSERT INTO B1v12019 (ID) VALUES ($rowinsert) ; COMMIT;";
  
  //echo $transaction;
  $mysqli->begin_transaction(MYSQLI_TRANS_START_READ_WRITE);
  $mysqli->query("UPDATE B1v12019 SET ID = ID + 1 WHERE ID >=$rowinsert order by ID DESC;");
  $mysqli->query("INSERT INTO B1v12019 (ID) VALUES ($rowinsert);");
  $mysqli->commit();
  
    return;
echo "exiting newrow<br>";
}
  ?>
