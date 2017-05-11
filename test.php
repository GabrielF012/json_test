<?php
    include('function.php');

?>

<html>
        <head>
            <style>
                table, th, td {
                 border: 1px solid black;
                 border-collapse: collapse;
                }

                table th {
                    background-color: black;
                    color: white;
                }

                table tr:nth-child(even){
                    background-color: #eee;
                }

                table tr:nth-child(odd){
                    background-color: #fff;
                }
            </style>
        </head>
        <body>
          <form action='index.php'>
              <p><input type="submit" value="Retour"></p>
          </form>
          <h2>Liste des artistes</h2>
          <br>
              <table>
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Prenom</th>
                  <th>Nom</th>
                  <th>Style</th>
                  <th>Profil</th>
                  <th>Supprimer</th>
                </tr>
              </thead>
              <tbody>
          <?php
            $json = file_get_contents("artiste.json");

            $data = json_decode($json, true);
            foreach($data['artiste'] as $artist){
              $n = $artist['nom'];
              $p = $artist['prenom'];
              $i = $artist['id'];
              $u = $artist['folder'];
              $pp = $artist['profil'];
              $source = "images/" .$u. "/" .$pp;
              foreach($artist['style'] as $style) {
                  $s[] = $style;
              }



          echo  '<tr>';
          echo      '<td>' .$i. '</td>';
          echo      '<td>' .$p. '</td>';
          echo      '<td>' .$n. '</td>';
          echo      '<td>';
          foreach($artist['style'] as $style) {
            echo   NomStyle($style). " ";
          }
          echo      '</td>';
          echo      '<td><img src="'.$source.'" height="128px" width="128px"/></td>';
          echo      "<td><form action='DeleteArtiste.php' method='POST'/><input type='hidden' name='q' value='".$artist['id']."'/>
                    <input type='submit' value='Supprimer'></form></td>";
          echo   '</tr>';
          echo    '</tbody>';
            }
          ?>
              </table>
        </body>
</html>
