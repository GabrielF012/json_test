<?php

include('function.php');

if (!empty($_POST)){

  //$data = json_decode(file_get_contents("artiste.json"), true);
    $prenom = $_POST['prenom'];
    $nomf = $_POST['nom'];
    $pre = substr($prenom, 0, 3);
    $nom = substr($nomf, 0, 3);
    $foldername = $pre . $nom;
    mkdir('images/' . $foldername . '/');
    $uploaddir = 'images/'. $foldername . '/';
    $uploadfilename = $_FILES['userfile']['name'];
    $ext = pathinfo($uploadfilename, PATHINFO_EXTENSION);
    $filename = "profil" . $foldername . "." . $ext;
    $uploadfile = $uploaddir . $filename;
    move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
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
      $artiste['artiste'][] = array('id' => $id+1, 'nom' => $nomf, 'prenom' => $prenom, 'style' => $style, 'folder' => $foldername, 'profil' => $filename);
    } else {
      $artiste['artiste'][] = array('id' => 1, 'nom' => $nomf, 'prenom' => $prenom, 'style' => $style, 'folder' => $foldername, 'profil' => $filename);
    }

    file_put_contents('artiste.json', json_encode($artiste));
  }
  header("Location: test.php");
 ?>
