<?php 
  function Fdiagramprint($diagram){
 //turn debugging on
  ini_set('display_errors', 'On');
  error_reporting(E_ALL);
    $count=NULL;
    echo'<div class="rounded" style="background-color:#fff;">';
        echo'<div class="table-responsive"> ';
            echo'<table class="table">';
    
                echo'<thead class="thead-light">';
                    echo'<tr>';
                        echo'<th>';
                            echo'Diagram '.$diagram.'';
                        echo'</th>';
                    echo'</tr>';
                echo'</thead>';
    
                echo'<tbody>';
                    echo'<tr>';
                        echo'<td style="text-align:center;">';
                            //echo'<div class="mx-auto">';
                                echo'<img src="/diagrams/B1v1_2019_Diagram'.$diagram.'.png" alt="Generic placeholder image">';
                            //echo'</div>';
                        echo'</td>';
                    echo'</tr>';
                echo'</tbody>';
    
            echo'</table>'; //end table
        echo'</div>'; //end div table
    echo'</div> '; //<!-- end rounded -->
  }
 ?>

