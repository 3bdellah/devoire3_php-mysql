
<!DOCTYPT html>
<html>
<head>
<title>Authentification d'un lecteur</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
     <?php
    if($_POST){
        $nom=$_POST["nom"];
        $mdp=$_POST["mdp"];
        //open connection
            $host = 'localhost';
            $username = 'root';
            $password ='';
            $dbname ='librairie';
            
            //On essaie de se connecter
            $conn = mysqli_connect($host, $username, $password,$dbname);
            $query= "SELECT * FROM lecteurs WHERE lecnom='$nom' and lecmotdepasse='$mdp'";
               
                    $result=mysqli_query($conn,$query);
                    
                   if(mysqli_num_rows($result)==1)
                   {
                       session_start();
                       
                       $_SESSION['librairie']='true';
                       setcookie("nom",$nom);
                       setcookie("mdp",$mdp);
                       header('location:validelecteur.php'); 
                       
                   }else{
                       
                       header('location:gestionlecter.php');
                   }
        
    }
        ?>
  
<body >
	<form method="post" >
        <div class="center">
    <table>
        <img src="img/avatar.svg" style="width: 60px; height: 60px;"></br>
		<tr><h2>Authentification d'un lecteur</h2></tr>
    <tr><td><label for="nom">NOM</label></td><td><input type="text" name="nom"></td></tr>
    <tr><td><label for="mdp">Mot de pass</label></td><td><input type="password" name="mdp"></td></tr>
    </table>
            </br>
        <input type="submit"  name="login" value="login">
        </div>
    </form>
</body>
</html>