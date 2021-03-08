<?php
  session_start();

  $zbozi = array("pivo", "chleba", "med");

  // aktualizace košíku, pokud bylo něco přidáno
  if (isset($_REQUEST["pridej"]))
  {
    if (isset($_SESSION['kosik'][$_REQUEST["pridej"]]))
    {
      $_SESSION['kosik'][$_REQUEST["pridej"]]++;
    }
    else
    {
      $_SESSION['kosik'][$_REQUEST["pridej"]] = 1;
    }
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Eshop roku</title>
    </head>
    <body>
        <h1>Eshop roku – stav držíme v session</h1>

        <h2>Katalog</h2>

        <ul>
<?php
  foreach ($zbozi as $z) {
    echo "<li>" . $z . " – <a href='?pridej=$z'>přidej do košíku</a></li>";
}
?>
        </ul>

        <h2>Košík</h2>

        <ul>
<?php
  foreach ($_SESSION['kosik'] as $z => $pocet) {
    echo "<li>" . $z . " – " . $pocet . " ks</li>";
}
?>
        </ul>

    </body>
</html>