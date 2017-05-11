<h1>Ajouter</h1>
<form action='AddToList.php' method="post" enctype="multipart/form-data">
    <p>Prenom:<input type="text" name="prenom"</p>
    <p>Nom:<input type="text" name="nom"</p>
    <input type="hidden" name="MAX_FILE_SIZE" value="1024000000"/>
    <p>Profil: <input name="userfile" type="file" /></p>
    <table>
      <tr>
        <td><input type="checkbox" name="portrait"/>Portrait</td>
        <td><input type="checkbox" name="animal"/>Animal</td>
        <td><input type="checkbox" name="paysage"/>Paysage</td>
        <td><input type="checkbox" name="abstrait"/>Abstrait</td>
      </tr>
    </table>
    <p><input type="submit" value="OK"></p>
</form>
