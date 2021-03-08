<?php session_start() ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>První stránka se session proměnnou</title>
</head>
<body>
<?php
$_SESSION["x"] = 10;
?>
Proměnná x je zaregistrována a má hodnotu <?php echo $_SESSION["x"]?>. 
Podívejte se na <a href="session-dalsi.php">další stránku</a>,
kde uvidíte, zda zůstane obsah session proměnné x zachován.

<form action="session-dalsi.php">
<input type="submit" value="Přechod na další stránku z formuláře">
</form>
  
</body>
</html>
