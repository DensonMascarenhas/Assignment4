<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="refresh" content="1"/>
<style>
p{
color:red;
font-size:120px;
position: absolute;
top: 30%;
left: 50%;
transform: translate(-50%, -50%);
}
body{
background-color:black;
}
</style>
<p> 

<?php
date_default_timezone_set("Asia/Kolkata");
echo date('h:i:s A');

?> 
</p>
</head>
</html>