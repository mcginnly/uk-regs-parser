<!doctype html>
<html lang-"en">
<head>
<meta charset="utf-8">
<title>DISPLAY CLAUSE LIST</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<style type="text/css">
   body { background-color:#fff; }
</style>

</head>

<body style="background-color:#f8f9fa;">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<div class="container" style="margin-top3:30px">

  
<?php 
session_start();


 //turn debugging on
  ini_set('display_errors', 'On');
  error_reporting(E_ALL);
         
  //connect to database
  include "Fdbconn.php";
  $mysqli=Fdbconn();
         
  // initiate ID number if there isn't a persistent id variable from a previous session
  if (is_null($_SESSION["ID"]))
    {
      $_SESSION["ID"]='4'; $nextid='23'; //key values of first clause.

    } 
  
  $id=$_SESSION["ID"];
  
  //initiate nextid 
  include "FIDnext.php";
  $nextid=FIDnext($_SESSION["ID"]);
  
  //initiate count
  $count= NULL;
    
  //load Fdiagramprint
  include "Fdiagramprint.php";
  
  //print a test diagram
  Fdiagramprint('2.1');

    ///////////////////////////////////////////////////////////////////////////////////////////////////////  
    //Call paragraph display function and print to screen
  include "Fpara-dropd-list.php";
  $clauselist=Fparadrop();
  
  //load Fgetclause
  include "Fgetclause.php";
  include "Fparaprint.php";  
         
  foreach ($clauselist as $item)
    {
      $clause=Fgetclause($item);
      //tag clause with clauseno
        echo '<p id="'.$item['para'].'"></p>';
        
      //print the payload  
      Fparaprint ($clause);       
    }
      
  ////TODO work out how to display images in the correct order with Fdiagramprint();
  ////TODO work out how to display tables in the correct order with Ftableprint();
  ///////////////////////////////////////////////////////////////////////////////////////////////////////
    
  $_SESSION["ID"]=$id; //let id be persistent
  mysqli_close($mysqli);
?>

</div> <!-- end div table -->

</div>  <!-- end row -->

</div>
</body>
</html>
