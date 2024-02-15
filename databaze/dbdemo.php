<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Ukázka databáze</title>
</head>
<body>
<h1>Seznam zaměstnanců</h1>

<table border="1">
<thead>
<tr>
<th>Osobní číslo</th>
<th>Jméno</th>
<th>Adresa</th>
</tr>
</thead>
<tbody>
<?php

try 
{
  // připojení k databázi
  $db = new PDO("mysql:host=localhost;dbname=jkj;charset=utf8", "jkj", "heslo");

  // zaslání dotazu a čtení výsledku
  foreach ($db->query("SELECT * FROM Zamestnanci ORDER BY Jmeno") as $radka)
  {
    // zpracování jednotlivých řádek výsledku
    echo "<tr>";    
    echo "<td title='", htmlspecialchars($radka["Jmeno"], ENT_QUOTES),"'>", htmlspecialchars($radka["OsobniCislo"]), "</td>";
    echo "<td>", htmlspecialchars($radka["Jmeno"]), "</td>";
    echo "<td>", htmlspecialchars($radka["Adresa"]), "</td>";
    echo "</tr>\n";
  }
  //for ($i = 0; $i < 100; $i++)
    //$db->query("INSERT INTO Zamestnanci VALUES ($i, 'Pepa $i', '', '', " . $i*1000 . ")");
}
catch (PDOException $e)
{
  // obsluha případné chyby při práci s databází
  echo "Při práci s databází došlo k chybě: " . $e->getMessage();
}

?>
</tbody>
</table>
</body>
</html>
