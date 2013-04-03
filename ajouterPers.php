

<?php
   $nom=$_REQUEST['nom'];
    $prenom=$_REQUEST['prenom'];
    $mail=$_REQUEST['mail'];
    $log=$_REQUEST['log'];
    $password=$_REQUEST['pass'];
    
    
                    
                            $user='root';
                            $pass='root';
                            $dbh = new PDO('mysql:host=localhost;dbname=Projet', $user, $pass);
                            $req = "INSERT INTO CLIENT (CLI_NOM,CLI_PRENOM,CLI_MAIL) VALUES ('$nom','$prenom','$mail')"or die("erreur !!!");
                            $req2="INSERT INTO users (login,pass) values ('$log','$password')";
                            $dbh->query($req);
                            $dbh->query($req2);
                            
          
                           
                           

        
        ?>