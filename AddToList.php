<?php

include('function.php');

if (!empty($_POST)){

  //$data = json_decode(file_get_contents("artiste.json"), true);
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $style = array();
    if(isset($_POST['portrait'])){
      $style[] = AjoutStyle('portrait');
    }
    if(isset($_POST['animal'])){
      $style[] = AjoutStyle('animal');
    }
    if(isset($_POST['paysage'])){
        $style[] = AjoutStyle('paysage');
    }
    if(isset($_POST['abstrait'])){
        $style[] = AjoutStyle('abstrait');
    }

    if (file_exists('artiste.json')){
      $artiste = json_decode(file_get_contents("artiste.json"), true);
      $id = count($artiste['artiste']);
      $artiste['artiste'][] = array('id' => $id+1, 'nom' => $nom, 'prenom' => $prenom, 'style' => $style);
    } else {
      $artiste['artiste'][] = array('id' => 1, 'nom' => $nom, 'prenom' => $prenom, 'style' => $style);
    }

    file_put_contents('artiste.json', json_encode($artiste));
  }
  header("Location: test.php");
 ?>
