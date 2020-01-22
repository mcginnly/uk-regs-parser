<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TEST ID</title>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>


  <div class="container">      

  <div class="form-group">
      <form action="" method="get">
      ID number: <input type="text" name="IDno" id="IDno"></input>
      <input type="submit" name="submit" value="Submit"></input>
      </form>
  </div>

      <?php 
        //turn debugging on
        ini_set('display_errors', 'On');
        error_reporting(E_ALL);
        
        //connect to database
        include "Fdbconn.php";
        $mysqli=Fdbconn();
        
        
        //get form data and clause number for the given inexact ID number
        if (isset($_GET['submit']))
        {

          $IDno = htmlentities($_GET['IDno']);
          include "FIDreturn.php";
          $IDreturn = FIDreturn($IDno);
          echo 'Clause number is: '.$IDreturn.'<br>';
        }

        ?>

</div>
</body>
</html>
