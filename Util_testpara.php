<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TEST PARA</title>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>


  <div class="container">      

  <div class="form-group">
      <form action="" method="get">
      Clause number: <input type="text" name="clauseno" id="clauseno"></input>
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
        
        
        //get form data and retrieve start ID and next ID
        if (isset($_GET['submit']))
        {
          //call parareturn function and receive ID of row that corresponds to para no.
          include "Fparareturn.php";
          $clauseno = htmlentities($_GET['clauseno']);
          $id = Fparareturn($clauseno);
          echo 'Clause number: '.$clauseno.'<br>';
          echo 'Function ID No.: '.$id.'<br>';

          //call IDreturn function and receive next ID in ID/para data
          include "FIDnext.php";
          $nextid = FIDnext($id);
          echo 'Next clause ID No.: '.$nextid.'<br>';
          
          include "FIDprev.php";
          $previd = FIDprev($id);
          echo 'Previous clause ID No.: '.$previd.'<br>';
        }
        echo 'Session $id = '.$id.'<br>';
        ?>

</div>
</body>
</html>
