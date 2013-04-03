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
        <div/>
        <div>
         <?php include("menu.html" ); ?>
        </div>
        </div>
      
        
         <div id="container">
             <fieldset>
                 <legend>Inscription</legend>
        <form method="REQUEST" action="ajouterPers.php" class="inscription">
    <p>
        <label for="nom">Nom</label><br />
	<input type="text" name="nom" id="nom" size="30" />
        <br>
        <label for="prenom">Prénom</label><br />
	<input type="text" name="prenom" id="prenom" size="30" />
        <br />
						
	
        <br>
        <label for="login">Login</label><br />
	<input type="text" name="log" id="log" size="30" />
        <br />
						
	<br />
					
	<label for="mdp">Mot de passe</label><br />
	<input type="password" name="pass" id="pass" size="30" /><br />
						
	<label for="mdp_confirm">Confirmez votre mot de passe</label><br />
	<input type="password" name="pass2" id="pass2" size="30" />
        <br />
						
	<br />
						
	<label for="mail">Adresse email</label><br />
	<input type="email" name="mail" id="mail" size="30" /><br />
						
	<label for="mail_confirm">Confirmez votre adresse email</label><br />
	<input type="email" name="mail_confirm" id="mail_confirm" size="30" />
        <br />
						
	<br />
						
	<input type="submit" value="Valider" class="valider" />
        <input type="reset" value ="Effacer"/>
    </p>
</form>
   </fieldset>
        </div>


        
        
        
        
    </body>
</html>