<?php  
@$light1 = $_GET['light1'];
@$light2 = $_GET['light2'];
if($light1 == "on") {  
  $file = fopen("file/light1.json", "w+") or die("can't open file");
  fwrite($file, '{"light1": "on"}');
  fclose($file);
} 
else if ($light1 == "off") {  
  $file = fopen("file/light1.json", "w+") or die("can't open file");
  fwrite($file, '{"light1": "off"}');
  fclose($file);
}
else if($light2 == "on") {  
  $file = fopen("file/light2.json", "w+") or die("can't open file");
  fwrite($file, '{"light2": "on"}');
  fclose($file);
} 
else if ($light2 == "off") {  
  $file = fopen("file/light2.json", "w+") or die("can't open file");
  fwrite($file, '{"light2": "off"}');
  fclose($file);
}
?>
<html>
<title>TR Automations</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<script src="javascript/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="javascript/jav.js"></script>
<link rel="stylesheet" href="css/style.css">
<div id="bg1" class="left" >
<h1>Light 1</h1>
<h3>Status:<b id="l1">N/A</b></h3>
<footer>
<a href="?light1=on"><button type="button" class="button_on">Turn On</button></a>

<a href="?light1=off"><button type="button" class="button_off">Turn Off</button></a>
</footer>
</div>
<div id="bg2" class="left">
<h1>Light 2</h1>
<h3>Status:<b id="l2">N/A<b></h3>
<footer>
<a href="?light2=on"><button type="button" class="button_on">Turn On</button></a>

<a href="?light2=off"><button type="button" class="button_off">Turn Off</button></a>
</footer>
</div>
</html>