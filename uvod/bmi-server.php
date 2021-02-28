<!DOCTYPE html>
<?php
  $vaha = isset($_POST["vaha"]) ? $_POST["vaha"] : "";
  $vyska = isset($_POST["vyska"]) ? $_POST["vyska"] : "";
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Výpočet BMI</title>
  </head>
  <body>
    <h1>Výpočet BMI</h1>

    <form method="post">
      Váha: <input name="vaha" value="<?php echo htmlspecialchars($vaha, ENT_QUOTES) ?>"><br>
      Výška: <input name="vyska" value="<?php echo htmlspecialchars($vyska, ENT_QUOTES) ?>"><br>
      <input type="submit" value="Spočítej BMI">
    </form>

<?php
if (is_numeric($vaha) && is_numeric($vyska)):
?>

  <h2>Vaše BMI je <?php echo number_format($vaha / pow($vyska / 100, 2), 2)  ?></h2>
  
<?php
endif;
?>

  </body>
</html>
