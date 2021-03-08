<?php
$count = 0;

if (IsSet($_COOKIE["pcounter"]))
  $count = $_COOKIE["pcounter"] + 1;
else 
  $count = 1;

SetCookie("pcounter", $count, time() + 3600 * 24); // trvanlivost 24h

echo $count;

?>
