<!DOCTYPT html>
<html>
<head>
<title>Enregistrement d'un lecteur</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body >
	<form method="post" action="validelecteur.php">
        <div>
    <table>
        <img src="img/avatar.svg" style="width: 60px; height: 60px;">
		<tr><h2>Enregistrement d'un lecteur</h2></br></tr>
		<tr><td><label>Nom</label></td><td>:</td><td><input type="text" name="nom"></td></tr>
		<tr><td><label>Prénom</label></td><td>:</td><td><input type="text" name="prenom"></td></tr>
        <tr><td><label>Mot de pass</label></td><td>:</td><td><input type="password" name="mdp"></td></tr>
		<tr><td><label>Adresse</label></td><td>:</td><td><input type="text" name="adresse"></td></tr>
		<tr><td><label>Ville</label></td><td>:</td><td><input type="text" name="ville"></td></tr>
		<tr><td><label>Code Postal</label></td><td>:</td><td><input type="number" name="postal"></td></tr>
    </table>
    </br>
        <input type="submit"  name="login" value="Enregistrer">
    </div>
	</form>
</body>
</html>