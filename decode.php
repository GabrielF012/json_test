<?php
$json = file_get_contents("test.json");

$data = json_decode($json, true);

foreach($data['artiste'] as $artist){
  /*if ($artist['Style'] == "Animal"){
    $nom = $artist['Nom'];
    echo "$nom<br>";
  }*/
  $n = $artist['Nom'];
  $p = $artist['Prenom'];
  $s = $artist['Style'];
  echo "$p<br>$n<br>$s<br><br>";
}

$array = [1,4,6,3,5];
$json_en = json_encode($array);
var_dump($json_en);
array_push($array, 55,76,8,90);
$json_en = json_encode($array);
var_dump($json_en);
?>
