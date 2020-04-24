<?php
require'DB.class.php';
$DB=new DB();
error_reporting(E_ERROR|E_PARSE);
?>
<!DOCTYPT html>
<html>
<head>
<title>Validation d'un lecteur</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body >
<?php 
    
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $titre=$_POST["titre"];
    $categorie=$_POST["categorie"];
    $isbn=$_POST["isbn"];

    
?>
    <div>
    <table>
        <img src="img/bk.png" style="width: 60px; height: 60px;">
		<tr><h2>Validation d'un livre</h2></br></tr>
        <tr><td>Nom de l'auteur</td><td>:</td><td style="color: darkgreen"><?= $nom ?></td></tr>
		<tr><td>Prénom de l'auteur</td><td>:</td><td style="color: darkgreen"><?= $prenom ?></td></tr>
		<tr><td>Titre</td><td>:</td><td style="color: darkgreen"><?= $titre ?></td></tr>
		<tr><td>Catégorie</td><td>:</td><td style="color: darkgreen"><?= $categorie ?></td></tr>
		<tr><td>Numéro ISBN</td><td>:</td><td style="color: darkgreen"><?= $isbn ?></td></tr>
    
    </table>
    </br> 
    </div>
</body>
</html>