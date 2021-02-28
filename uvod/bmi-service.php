<?php

// výsledkem skriptu je JSON
Header("Content-type: application/json");

// skript lze volat i z jiných domén
Header("Access-Control-Allow-Origin: *");

// pomocí proudu php://input čteme data zaslaná metodou POST
$json = file_get_contents("php://input");

// JSON naparsujeme do PHP objektu
$data = json_decode($json);

// načteme údaje
$vaha = $data->vaha;
$vyska = $data->vyska;

// kontrola, zda jsou zadány číselné údaje
if (!is_numeric($vaha)) $vaha = 0;
if (!is_numeric($vyska)) $vyska = 0;

// pro nulovou výšku by došlo k chybě
if ($vyska != 0)
  // provedení výpočtu a vrácení výsledku jako JSON
  echo json_encode(array('bmi' => $vaha / pow($vyska / 100, 2)));
else 
  echo json_encode(array('bmi' => 0));

?>
