<!DOCTYPE html>
 
<html>
<head>
<title>User Input Added to Array</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<style type="text/css">
	body{
    background: #000;
  }

    .thumbnail{
          margin:25px;
        }
        .blue{
          margin-left:60px;
        }
        .well{
          color:#fff;
          background: #000;
          text-transform: uppercase;
          font-weight: bolder;

        }
</style>
</head>
 
<body>
<div class="container jumbotron">

 
<?php
if (!isset($_POST['submit'])){
$travel=array (
  "Automobile",
  "Jet",
  "Train",
  "Ferry"
);
 
?>

 
<div class='container text-center'><h4 class='well text-'>Travel takes many forms, whether across the country, or around the earth. here is aliost of some common means of transportation:</h4></div>
<ul>
 
<?php
foreach ($travel as $t){
  echo "<li class='text-center' style='list-style: none;'><b><i>$t</b></i></li>\n"; 
}
?>
 
</ul>
<form method="post" action="transportation.php">
<p class="alert alert-success  col-md-12">Please add your favorite, local, or even imaginary modes of travel 
to the list, separated by commas:</p>
<input type="text" name="added" class="form-control text-center col-md-2 col-md-offset-3" style="width:220px;" placeholder=" Item1, Item2, Item3...."/>
<p />
 
<?php
foreach ($travel as $t){
  echo "<input type=\"hidden\" name=\"travel[]\" value=\"$t\" />\n";
}
?>
 
<input type="submit" name="submit" value="Submit" class="btn btn-danger">
</form>
 
<?php
}else{
$travel=($_POST['travel']);
$added=explode (',',$_POST['added']);
 
array_splice ($travel, count ($travel), 0, $added);
echo "<p class='well text-'>Here is the list with your additions:</p>\n<ul>\n";
foreach($travel as $t){
  echo "<li class='text-center' ><b><i>".trim ($t)."</b></i></li>\n";  
}
echo"</ul>";  
 
?>
<p class="alert alert-success  col-md-12">Add more?</p>
<form method="post" action="transportation.php">
<input type="text" name="added" class="form-control text-center col-md-2 col-md-offset-3" style="width:220px;" placeholder=" Item1, Item2, Item3...." />
<p />
<?php
foreach ($travel as $t){
  echo "<input type=\"hidden\" name=\"travel[]\" value=\"$t\" />\n";
}
?>
<input type="submit" name="submit" value="Submit" class="btn btn-danger" />
</form>
<?php
}
?></div>
<div class="container">
      <div class="row blue">
         <div class="col-md-3 omega thumbnail"> <img src="download.jpg" class="img-responsive img-center"></div>    
         <div class="col-md-3 omega thumbnail"> <img src="download.jpg" class="img-responsive img-center"></div>    
         <div class="col-md-3 omega thumbnail"> <img src="download.jpg" class="img-responsive img-center"></div>    
            </div> 
        <div class="row blue">
         <div class="col-md-3 omega thumbnail"> <img src="download.jpg" class="img-responsive img-center"></div>    
         <div class="col-md-3 omega thumbnail"> <img src="download.jpg" class="img-responsive img-center"></div>    
         <div class="col-md-3 omega thumbnail"> <img src="download.jpg" class="img-responsive img-center"></div>    
          </div> 
            </div>

             <script type="text/javascript" src="bootstrap/js/jQuery.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.js"></scrip
</body>
</html>