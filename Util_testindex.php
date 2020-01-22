<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TEST INDEX</title>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">

 <table class="table">
  <thead>
  <tr>
  <th scope="col">ID</th>
  <th scope="col">Para</th>
  </tr>
  </thead>

  <tbody>


      <?php
      //turn debugging on
      ini_set('display_errors', 'On');
      error_reporting(E_ALL);
      
        include "Fdbconn.php";
        $mysqli=Fdbconn();

        include "Fparaindex.php";
        $pararesult = Fparaindex();
                
      //  include "pageindex.php";
      //  $pagelist = pageindex();

      ?>
      <tr>
      <?php
      ini_set('display_errors', 'On');
      error_reporting(E_ALL);
      
      
    // print list of ID's and Para  
    while($data = mysqli_fetch_array($pararesult))
    
    {
      echo"<td>".$data['ID']."</td>";
      echo"<td>".$data['Para']."</td>";
      echo "</tr>";
    }
    //var_dump($pararesult);
    //var_dump($mysqli);
    $result = mysqli_query($mysqli, "SELECT `ID`,`Para` FROM `B1v12019` GROUP BY `Para` ORDER BY `ID` ASC ");
    $allpara = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo array_search(0.1,$allpara);
    //var_dump($allpara);

    mysqli_free_result($pararesult);
    mysqli_close($mysqli);
    ?>
     </tbody>
  </table>



</div>
</body>
</html>
