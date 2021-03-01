<!DOCTYPE html>
<meta charset="utf-8"/>

<h2>Surová data</h2>

Standardní vstup: <?php echo file_get_contents('php://input') ?> <br/>

<h2>Naparsovaná data požadavku</h2>

Jméno: <?php echo $_REQUEST['jmeno']?> <br/>
Věk: <?php echo $_REQUEST['vek']?> <br/>

<h2>Naparsovaná data GET</h2>

Jméno: <?php echo $_GET['jmeno']?> <br/>
Věk: <?php echo $_GET['vek']?> <br/>

<h2>Naparsovaná data POST</h2>

Jméno: <?php echo $_POST['jmeno']?> <br/>
Věk: <?php echo $_POST['vek']?> <br/>

