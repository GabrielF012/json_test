<form action='form.php'>
    <p><input type="submit" value="OK"></p>
</form>
<br><br>
<?php
  $json = file_get_contents("artiste.json");

  $data = json_decode($json, true);

  foreach($data['artiste'] as $artist){
      $n = $artist['nom'];
      $p = $artist['prenom'];
      $s = $artist['id'];
      echo "$p<br>$n<br>$s<br><br>";
  }
?>
