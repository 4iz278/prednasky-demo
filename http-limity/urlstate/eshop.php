<?php
  $zbozi = array("pivo", "chleba", "med");
  $kosik = array();

  // obnovení stavu košíku z URL
  foreach($zbozi as $z)
  {
    if (isset($_REQUEST[$z]) && is_numeric($_REQUEST[$z]))
    {
      $kosik[$z] = $_REQUEST[$z];
    }
  }

  // aktualizace košíku, pokud bylo něco přidáno
  if (isset($_REQUEST["pridej"]))
  {
    if (isset($kosik[$_REQUEST["pridej"]]))
    {
    $kosik[$_REQUEST["pridej"]]++;
    }
    else
    {
    $kosik[$_REQUEST["pridej"]] = 1;
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
        <h1>Eshop roku – stav držíme v URL</h1>

        <h2>Katalog</h2>

        <ul>
<?php
  foreach ($zbozi as $z) {
    echo "<li>" . $z . " – <a href='?pridej=$z&" . http_build_query($kosik) . "'>přidej do košíku</a></li>";
}
?>
        </ul>

        <h2>Košík</h2>

        <ul>
<?php
  foreach ($kosik as $z => $pocet) {
    echo "<li>" . $z . " – " . $pocet . " ks</li>";
}
?>
        </ul>

    </body>
</html>