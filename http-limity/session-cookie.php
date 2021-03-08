<?php
$count = 0;

if (IsSet($_COOKIE["counter"]))
  $count = $_COOKIE["counter"] + 1;
else 
  $count = 1;

SetCookie("counter", $count);

echo $count;

?>