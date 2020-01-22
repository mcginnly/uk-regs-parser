<?php
function Fdbconn (){

    $mysqli = new mysqli("localhost", "admin", "aqua2323!", "BREGS"); 

    /* check connection */
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }
    return $mysqli;
  }
  ?>
