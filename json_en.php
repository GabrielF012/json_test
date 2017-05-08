<?php

$nom = "Pelletier";
$prenom = "Lucie";
$id = '5';
$artistarray = array(
  'id' => $id, 'Nom' => $nom, 'Prenom' => $prenom
);

var_dump($artistarray);
$json['artiste'][] = $artistarray;

echo json_encode($json);

if (file_exists('artiste.json')){
    echo "The file exists";
} else {
    file_put_contents('artiste.json', json_encode($json));
}
