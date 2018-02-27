<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<title>User Input Added to Array</title>
</head>
 
<body>
<h2>How Are You Traveling?</h2>
 
<?php
//If form not submitted, display form.  
if (!isset (link is external)($_POST['submit'])){
$travel=array (link is external)(
  "Automobile",
  "Jet",
  "Ferry",
  "Subway"
);
 
?>
 
<p>Travel takes many forms, whether across town, across the country, or
 around the world. Here is a list of some common modes of transportation:</p>
<ul>
 
<?php
foreach ($travel as $t){
  echo "<li>$t</li>\n"; 
}
?>
 
</ul>
<form method="post" action="yourfile.php">
<p>Please add your favorite, local, or even imaginary modes of travel 
to the list, separated by commas:</p>
<input type="text" name="added" size="80" />
<p />
 
<?php
//Send current travel array as hidden form data.
foreach ($travel as $t){
  echo "<input type=\"hidden\" name=\"travel[]\" value=\"$t\" />\n";
}
?>
 
<input type="submit" name="submit" value="Go" />
</form>
 
<?php
//If form submitted, process input.
}else{
//Retrieve established travel array.
$travel=($_POST['travel']);
//Convert user input string into an array.
$added=explode (link is external)(',',$_POST['added']);
 
//Add to the established array.
array_splice (link is external)($travel, count (link is external)($travel), 0, $added);
//This could also be written $travel=array_merge($travel, $added);
 
//Return the new list to the user.
echo "<p>Here is the list with your additions:</p>\n<ul>\n";
foreach($travel as $t){
  //The trim functions deletes extra spaces the user may have entered.
  echo "<li>".trim (link is external)($t)."</li>\n";  
}
echo"</ul>";  
 
?>
<p>Add more?</p>
<form method="post" action="yourfile.php">
<input type="text" name="added" size="80" />
<p />
<?php
//Send current travel array as hidden form data.
foreach ($travel as $t){
  echo "<input type=\"hidden\" name=\"travel[]\" value=\"$t\" />\n";
}
?>
<input type="submit" name="submit" value="Go" />
</form>
<?php
}
?>
</body>
</html>