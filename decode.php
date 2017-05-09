<?php
$json = file_get_contents("artiste.json");

$data = json_decode($json, true);

foreach($data['Style'] as $style){
  /*if ($artist['Style'] == "Animal"){
    $nom = $artist['Nom'];
    echo "$nom<br>";
  }*/
  $n = $style['nom'];
  $i = $style['id'];
  echo "$i<br>$n<br>";
}

/*$array = [1,4,6,3,5];
$json_en = json_encode($array);
var_dump($json_en);
array_push($array, 55,76,8,90);
$json_en = json_encode($array);
var_dump($json_en);*/
?>
