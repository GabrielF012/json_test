<?php

if (!empty($_POST)){
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];

    if (file_exists('artiste.json')){
      $temp = json_decode(file_get_contents("artiste.json"), true);
      $id = count($temp['artiste']);
      $artiste['artiste'][] = array('id' => $id+1, 'nom' => $nom, 'prenom' => $prenom);
    } else {
      $artiste['artiste'][] = array('id' => 1, 'nom' => $nom, 'prenom' => $prenom);
    }

    file_put_contents('artiste.json', json_encode($artiste));
  }

  header("Location: form.php");
 ?>
