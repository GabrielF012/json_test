<?php
include('function.php');

$data = json_decode(file_get_contents("artiste.json"), true);

$artist = $data['artiste'];
foreach($artist as $value){
    if ($value['id'] == 1){
        $nom = $value['nom'];
        $prenom = $value['prenom'];
        $profil = $value['profil'];
        $folder = $value['folder'];
        $photop = $value['profil'];
        $source = "images/" .$folder. "/" .$photop;
        foreach($value['style'] as $s){
            $style[] = Nomstyle($s);
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>
  <body>
    <h1>Profil de <?php echo $prenom . " " . $nom?></h1>
    <p><img src="<?php echo $source;?>" height="128px" width="128px"/></p>
    <p>Voici mes styles de peinture: <br><?php foreach($style as $s){ echo "<li>" . $s . "</li><br>"; }?></p>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>