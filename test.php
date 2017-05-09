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
              $s = $artist['id'];
          echo  '<tr>';
          echo      '<td>' .$s;'.</td>';
          echo      '<td>' .$p;'.</td>';
          echo      '<td>' .$n;'.</td>';
          echo      "<td><form action='DeleteArtiste.php' method='POST'/><input type='hidden' name='q' value='".$artist['id']."'/>
                    <input type='submit' value='Supprimer'></form></td>";
          echo   '</tr>';
                  //echo "$p<br>$n<br>$s<br><br>";
          echo    '</tbody>';
            }
          ?>
              </table>
        </body>
</html>
