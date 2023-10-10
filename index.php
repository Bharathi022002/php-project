<!DOCTYPE html>
<html>
  <head>
    <title>PHP Task</title>
  <head>
<body>
  <!-- CSS STYLING -->
  <style>
  
  div#myDIV {
  width:50%;
  height:200px;
  background-color:#FFFFFF;
  border:3px solid;
  border-style: solid;
  
}
  </style>
  <!-- CSS STYLING CLOSE -->

  <!-- PHP CODE START -->
<?php
$matrix ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $matrix = test_input($_POST["matrix"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!-- PHP CODE END -->

<!-- HTML CODE START -->
<div id="myDIV" >
<h1 style="text-align:center">About me !</h1>
<h4>Name : Bharathi M - 202AD111</h4>
<h4>Dept : Artificial Intelligence and Data Science</h4>
<h4>College : Bannari Amman Institute of Technology</h4>
</div>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

<p>Choose array type:</p>
  <input type="radio" name="matrix" value="6">6×6 
  <input type="radio" name="matrix" value="8">8×8
  <input type="radio" name="matrix" value="10">10×10
  <input type="radio" name="matrix" value="12" > 12×12 
  <input type="radio" name="matrix" value="14" > 14×14
  <input type="radio" name="matrix" value="16" >16×16
  <input type="submit" value="Submit">
</form>

<!-- HTML CODE END -->

<!-- DISPLAYING OUTPUT -->
<?php 
if($matrix == 6){
  require("matrix6.php");
}
elseif($matrix == 8)
{
  require("matrix8.php");
}
elseif($matrix == 10)
{
  require("matrix10.php");
}
elseif($matrix == 12)
{
  require("matrix12.php");
}
elseif($matrix == 14)
{
  require("matrix14.php");
}
elseif($matrix == 16)
{
  ?>
  <script>
    window.location="matrix16.php";
  </script>
  <?php
}
?>
<!-- END OF DISPLAYING OUTPUT -->
</body>
</html>
