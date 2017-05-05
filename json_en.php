<?php

$nom = "Boucher";
$prenom = "Bob";
$id = '3';

$json = array(
    "artiste" => array('id' => $id, 'prenom' => $prenom, 'nom' => $nom)
);

echo json_encode($json);

if (file_exists('artiste.json')){
    echo "The file exists";
} else {
    file_put_contents('artiste.json', json_encode($json));
}