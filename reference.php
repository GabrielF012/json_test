<?php
  $prenomarray = array("Pierre", "Paule", "Karl", "Bobby");
  $nomarray = array("Coulombe", "Garreth", "Allard", "Jacques");

  for($i=0; $i<4 ;$i++){
      $temp['artiste'][] = array('id' => $i, 'nom' => $nomarray[$i], 'prenom' => $prenomarray[$i]);
  }

  file_put_contents('artiste.json', json_encode($temp));

  echo "Finish<br><br>";

  $artist = json_decode(file_get_contents("artiste.json"), true);

  //echo json_encode($artist);

  $id = count($artist['artiste']);

  $prenomarray = array("Jocelyn", "Rachid", "Lennox", "Lou");
  $nomarray = array("Aucoin", "Lepine", "Le May", "Bouchard");

  for($i=0; $i<4 ;$i++){
      $artist['artiste'][] = array('id' => $id+$i, 'nom' => $nomarray[$i], 'prenom' => $prenomarray[$i]);
  }

  echo json_encode($artist);

  file_put_contents('artiste.json', json_encode($artist));
?>
