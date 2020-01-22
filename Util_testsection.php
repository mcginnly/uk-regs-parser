<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TEST SECTION</title>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>


  <div class="container">      

  <div class="form-group">
      <form action="" method="get">
      Section number: <input type="text" name="sectionno" id="sectionno"></input>
      <input type="submit" name="submit" value="Submit"></input>
      </form>
  </div>

      <?php 
        //turn debugging on
        ini_set('display_errors', 'On');
        error_reporting(E_ALL);
        
        //connect to database
        include "Fdbconn.php";
        include "Fdbreturn.php";
        
        $mysqli=Fdbconn();
        
        
        //get form data and retrieve start ID and next ID
        if (isset($_GET['submit']))
        {
          //call parareturn function and receive ID of row that corresponds to para no.
          include "Fdbsearch.php";
          $sectionno = htmlentities($_GET['sectionno']);
          $id = dbsearch('ID', 'Section', $sectionno);
          echo 'Section number: '.$sectionno.'<br>';
          
          
          ///test for returning a list of sections by ID//
          $payload = dbreturn('ID', 'Section', 'GROUP BY `Section` ORDER BY `ID` ASC ');
          $sectionlist=array();
          while ($test = mysqli_fetch_array($payload)){
            array_push($sectionlist,$test[0]);
           
          }
        }
        var_dump($sectionlist);
        echo 'ID = '.$id.'<br>';
        

        ?>

</div>
</body>
</html>
