<?php

if (!empty($_POST)){
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];

    if (file_exists('artiste.json')){
      $artiste = json_decode(file_get_contents("artiste.json"), true);
      $id = count($artiste['artiste']);
      $artiste['artiste'][] = array('id' => $id+1, 'nom' => $nom, 'prenom' => $prenom);
    } else {
      $artiste['artiste'][] = array('id' => 1, 'nom' => $nom, 'prenom' => $prenom);
    }

    file_put_contents('artiste.json', json_encode($artiste));
  }


$json = file_get_contents("artiste.json");

$data = json_decode($json, true);

foreach($data['artiste'] as $artist){
    $n = $artist['nom'];
    $p = $artist['prenom'];
    $s = $artist['id'];
    echo "$p<br>$n<br>$s<br><br>";
}

  //header("Location: form.php");
 ?>
