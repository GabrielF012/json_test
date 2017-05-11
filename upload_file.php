<?php
list($width, $height) = getimagesize($_FILES['userfile']['tmp_name']);
$pre = substr($_POST['prenom'], 0, 3);
$nom = substr($_POST['nom'], 0, 3);
$username = $pre . $nom;
mkdir('images/' . $username . '/');
$uploaddir = 'images/'. $username . '/';
echo $uploaddir;
$uploadfilename = $_FILES['userfile']['name'];
$ext = pathinfo($uploadfilename, PATHINFO_EXTENSION);
$filename = "profil." . $ext;
$uploadfile = $uploaddir . $filename;


echo "<p>";

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
    echo "L'image est valide et a été enregistré avec succès. \n";
}else{
    echo "Erreur d'enregistrement";
}

echo "</p>";
echo "<p>" . $width . "+" . $height . "</p>";
echo "<p>" . $ext . "</p>";
echo '<pre>';
echo 'Some debug element:';
print_r($_FILES);
print "</pre>";
?>

<form action='reference.php'>
    <p><input type="submit" value="Retour"></p>
</form>
