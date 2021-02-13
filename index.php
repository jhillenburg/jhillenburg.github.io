<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styling.css">
</head>
<body>
    <div class="navbar">
  <a class="active" href="index.html"> Home</a> 
  <a href="schedule.html"> Schedule</a> 
  <a href="log.html"> Log</a> 
  <a href="#logout"> Logout</a>
    </div>
    <br>
    <h2>Storm Doors</h2>
    <br>
<?php
$apikey = '3d4dc18e7b4a7dd083338b11f3ac375f';

$contents_europeana = fopen("http://api.openweathermap.org/data/2.5/weather?lat=37.613930&lon=-93.414619&appid=$apikey&mode=html&units=imperial", "r");
$json_europeana = stream_get_contents($contents_europeana);
fclose($contents_europeana);

print $contents_europeana;
?>
    <h3>Dunnegan Park</h3>
    <label class="switch">
    <input type="checkbox" onchange="updateOutput(this)" id="1" checked>
    <span class="slider"></span></label>
    <br>
    <br>
    <h3>Baseball Fields</h3>
    <label class="switch">
    <input type="checkbox" onchange="updateOutput(this)" id="2" checked><span class="slider"></span></label>    

</body>
</html>
