<!DOCTYPT html>
<html>
<head>
<title>Enregistrement d'un livre</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body >
	<form method="post" action="validelivre.php">
        <div>
    <table>
        
            <img src="img/bk.png" style="width: 60px; height: 60px;">
		<tr><h2>Enregistrement d'un livre</h2></br></tr>
		<tr><td><label>Nom de l'auteur</label></td><td>:</td><td><input type="text" name="nom"></td></tr>
		<tr><td><label>Prénom de l'auteur</label></td><td>:</td><td><input type="text" name="prenom"></td></tr>
		<tr><td><label>Titre</label></td><td>:</td><td><input type="text" name="titre"></td></tr>
		<tr><td><label>Catégorie</label></td><td>:</td><td><select  name="categorie">
            <option value="Roman">Roman</option>
            <option value="Théâtraux">Théâtraux</option>
            <option value="romance">romance</option>
            <option value="Science-fiction">Science-fiction</option>
            <option value="Policier">Policier</option>
            <option value="bande dessinée">bande dessinée</option>
            </select></td></tr>
		<tr><td><label>Numéro ISBN</label></td><td>:</td><td><input type="text" name="isbn"></td></tr>
    </table>
    </br>
        <input type="submit"  name="login" value="Enregistrer">
    </div>
	</form>
</body>
</html>