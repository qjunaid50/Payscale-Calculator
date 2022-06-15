<!-- 7th Payscale Calculator -->
<html>
<head>
<title>7th Payscale Calculator</title>
<link rel="stylesheet" href="2.css">
</head>
<body>
<form>
<form action="1.php" form name="" method="get">
Name: <input type="text" name="name"><br>
State: <input type="text" name="state"><br>
Payscale:<select name="pay">
<option>18000</option>
<option>25500</option>
<option>29200</option>
<option>32500</option>
<option>44000</option>
<option>56100</option>
</select><br>


<input type="submit" value="Submit" id="btn">
</form>


<?php
$a = $_REQUEST["name"];
$b = $_REQUEST["state"];
$c = $_REQUEST["pay"];
echo("$a");
?>



</body>
</html>