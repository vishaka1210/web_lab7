<!DOCTYPE HTML> 
<html> 
<head> 
<meta http-equiv="refresh" content="1"/> 
<style> 
p { 
color: white;  
font-size:40px; 
position: absolute;  
top: 20%; 
left: 50%; 
transform: translate(-50%, -50%); 
} 
body{background-color:black;} 
</style> 
<p> The Server Time is </br>

 <?php echo date (" h: i : s A");   ?>

    The Local Time is </br>

<?php date_default_timezone_set('Asia/Kolkata');

echo date ("h: i : s A");   ?>

 </p> 
</head> 
</html> 
