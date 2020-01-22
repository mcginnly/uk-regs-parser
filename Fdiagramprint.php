<?php 
  function Fdiagramprint($diagram){
 //turn debugging on
  ini_set('display_errors', 'On');
  error_reporting(E_ALL);
    $count=NULL;
    echo'<div class="row" style="background-color:#fff;">';
    echo'<div class="mx-auto">';
    echo'    <img class="d-block" src="/diagrams/B1v1_2019_Diagram'.$diagram.'.png" alt="Generic placeholder image">';
    //echo'    <div class="media-body">';
    //echo'        <h5 class="mt-0">$heading</h5>';
    //echo'        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.';
    //echo'    </div>';
    echo'</div>';
    echo'</div> '; //<!-- end row -->
  }
 ?>

