<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>New Row</title>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style type="text/css">
   body { background-color:#fff; }
</style>

</head>

<body style="background-color:#f8f9fa;">

<div class="container" style="margin-top3:30px">

  
<?php 

        //connect to database
         include "Fdbconn.php";
         $mysqli=Fdbconn();
 
?> 

<form action="" method="post"  style="padding:1em 1em 1em 0em;">
  Row insertion at what ID number?<br>
  <input type="text" name="rowinsert"><br>
  <input type="submit" name="submit" value="Submit">
</form>    

<?php
ini_set('display_errors', 'On');
         error_reporting(E_ALL);
        if (isset($_POST['submit']))
        {

          include "Frow-new.php";
          $rowinsert = htmlentities($_POST['rowinsert']);
          Fnewrow($rowinsert);
          echo $rowinsert;

        }
?>

</div>
</body>
</html>
