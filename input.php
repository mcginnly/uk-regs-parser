<!doctype html>
<html lang-"en">
<head>
<meta charset="utf-8">
<title>B1v1-2019 INPUT</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link rel="stylesheet" href="css/css-checkbox-switch.css"> 



<style type="text/css">
   body { background-color:#fff; }
</style>

</head>

<body style="background-color:#f8f9fa;">

<script src="js/bregs.js"></script>

<div class="container" style="margin-top3:30px">
<div class="card">
  <div class="card-body">
    
      <h1>Approved Document Part B1 : Volume 1 : 2019</h1>
      
      <p>Some introductory text, caveats, instructions etc.....</p>
  </div> <!--end card body-->
</div><!--end card-->

 <div class="card" style="margin-top:1em">
  <div class="card-body">     
          <form action="/action_page.php" method="post">

      <div class="checkbox checkbox-switch switch-primary">
        <label>
          <input type="checkbox" name="domestic" checked="checked" />
          <span></span>
          Is the building solely domestic? <br>
        </label>
      </div>   <!--end checkboxdown-->
      
      <div class="checkbox checkbox-switch switch-primary">
          <label>
          <input type="checkbox" name="mixed"  />
          <span></span>
          Is the building mixed use? (ie. Residential + something else) <br>
        </label>
      </div> <!--end checkbox-->

      <div class="checkbox checkbox-switch switch-primary">
          <label>
          <input type="checkbox" name="flats"  />
          <span></span>
          Does the building contain flats? <br>
        </label>
      </div> <!--end checkbox--> 
      
      <div class="checkbox checkbox-switch switch-primary">
          <label>
          <input type="checkbox" name="extension"  />
          <span></span>
          Is the building work an extension to an existing property? <br>
        </label>
      </div> <!--end checkbox--> 
      
      <div class="checkbox checkbox-switch switch-primary">
          <label>
          <input type="checkbox" name="student"  />
          <span></span>
          Is the building intended to serve as student accommodation?<br>
        </label>
      </div> <!--end checkbox--> 
      
      <div class="checkbox checkbox-switch switch-primary">
          <label>
          <input type="checkbox" name="lift"  />
          <span></span>
          Does the building have a lift?<br>
        </label>
      </div> <!--end checkbox--> 
      
      <div class="checkbox checkbox-switch switch-primary">
          <label>
          <input type="checkbox" name="sheltered"  />
          <span></span>
          Is the building intended to serve as sheltered housing?<br>
        </label>
      </div> <!--end checkbox--> 

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">Storey Height: </label>
        </div>
        <select class="custom-select" id="inputGroupSelect01" name="storeyheight">
            <option value="0">Select maximum storey height above ground level:</option>
            <option value="1">Habitable storey below 4.5m above ground level</option>
            <option value="2">Habitable storey between 4.5m and 18m above ground level</option>
            <option value="3">Habitable storey above 18m above ground level</option>
        </select>
      </div>
        <input type="submit" class="btn btn-info" value="Submit">
      </form>
     
  </div> <!--end card body-->
</div><!--end card-->

</div>  <!-- end container -->

</div>
</body>
</html>
