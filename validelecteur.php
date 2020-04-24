
<?php
session_start();

    
if(isset($_SESSION['librairie'])){

        $nom=$_COOKIE["nom"];
        $mdp=$_COOKIE["mdp"];

            $host = 'localhost';
            $username = 'root';
            $password = '';
            $dbname ='librairie';
            $conn = mysqli_connect($host, $username, $password,$dbname);
            $query= "SELECT * FROM lecteurs WHERE lecnom='$nom' and lecmotdepasse='$mdp'";
            $result=mysqli_query($conn,$query);
            $lecteur=mysqli_fetch_array($result);
            $nom=$lecteur[1];
            $prenom=$lecteur[2];
            $adresse=$lecteur[3];
            $ville=$lecteur[4];
            $postal=$lecteur[5];
    echo "<h3>vous etes enregistré dans la base de la bibliothéque</h3>";
    echo '<h3>vous avez maintenant la possibilité de réserver des livres ou vous <a href="livreform.php">identifiant ici<a/></h3>';
    
}else{
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $adresse=$_POST["adresse"];
    $ville=$_POST["ville"];
    $postal = $_POST["postal"];
}
    
?>
<!DOCTYPT html>
<html>
<head>
<title>Validation d'un lecteur</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body >
    
    <div>
    <table>
        <img src="img/avatar.svg" style="width: 60px; height: 60px;">
		<tr><h2>Validation d'un lecteur</h2></br></tr>
        <tr><td>Nom</td><td>:</td><td style="color: darkgreen"><?= $nom ?></td></tr>
		<tr><td>Prénom</td><td>:</td><td style="color: darkgreen"><?= $prenom ?></td></tr>
		<tr><td>Adresse</td><td>:</td><td style="color: darkgreen"><?= $adresse ?></td></tr>
		<tr><td>Ville</td><td>:</td><td style="color: darkgreen"><?= $ville ?></td></tr>
		<tr><td>Code Postal</td><td>:</td><td style="color: darkgreen"><?= $postal ?></td></tr>
    
    </table>
    </br> 
    </div>
</body>
</html>