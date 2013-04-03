<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <link rel="stylesheet" href="Style.css" />
        <title>Accueil</title>
    </head>
    <body>
        <div id="corps">
        <div class="center">
        <img  src="Images/logo.png" alt='logo' />
        
        <div>
         <?php include("menu.html" ); ?>
        </div></div>
        <div id="container">
            
            <fieldset class="center">
                <legend>Connexion</legend>
                
                <form method="REQUEST" action="index.php">
                    
                    <label for="log">Login</label><br />
	<input type="text" name="log" id="log" size="30" />
        <br>
        <label for="pass">Mot de passe</label><br />
	<input type="password" name="pass" id="pass" size="30" />
        <br />
        <input type="submit" value="Envoyer" />
                    
                </form>
                
            </fieldset>
            
        </div>
        </div>
       
        
        <?php
        if (isset($_REQUEST['log'])&& isset($_REQUEST['pass'])) //Verifie que les valeurs du formulaire ont bien été entrées.
        {
            
            $login=$_REQUEST['log'];
            $mdp=$_REQUEST['pass'];
       
       
             $user='root';
             $pass2='root';
             $dbh = new PDO('mysql:host=localhost;dbname=Projet', $user, $pass2);
                           
             foreach( $dbh->query("SELECT pass FROM users Where  login='$login'")as $row)
                        
                    if ($row['pass'] != $mdp)
                       {
                                             echo "<p id='erreur'> mauvais mot de passe</p>";
                         }
                    else 
                        {             
                                               header('Location: compterendu.php'); //redirige vers le compte rendu si connexion établie           
                         }
                                        
                                        
               }
        ?>
    </body>
</html>