<!DOCTYPE html>
<meta charset="utf-8"/>

<h2>Naparsovaná data POST</h2>

Jméno: <?php echo $_POST['jmeno']?> <br/>
Věk: <?php echo $_POST['vek']?> <br/>

<h2>Informace o nahraném souboru</h2>

Jméno souboru: <?php echo $_FILES['image']['name']?> <br/>
Typ souboru: <?php echo $_FILES['image']['type']?> <br/>
Velikost souboru: <?php echo $_FILES['image']['size']?> <br/>
Kam byl soubor na serveru dočasně uložen: <?php echo $_FILES['image']['tmp_name']?> <br/>
Kód zpracování uploadu: <?php echo $_FILES['image']['error']?> <br/>
Úplná cestu k souboru na klientovi: <?php echo $_FILES['image']['full_path']?> <br/>

<?php

$imageData = file_get_contents($_FILES['image']['tmp_name']);

echo "<img src='data:{$_FILES['image']['type']};base64,{base64_encode($imageData)}'/>";

?>

