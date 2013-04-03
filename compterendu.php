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
        <?php
         $user='root';
        $pass='root';
        $dbh = new PDO('mysql:host=localhost;dbname=Projet', $user, $pass);
         $dbh2 = new PDO('mysql:host=localhost;dbname=Projet', $user, $pass);
        ?>
      
        
         <div id="container">
          <p>Compte-rendu<br>
          Voici la liste des praticiens:</p>
          <SELECT>
          <?php foreach($dbh->query('SELECT PRA_NOM, PRA_PRENOM From PRATICIEN') as $row)
          {
             
             
              echo "<OPTION>".$row['PRA_NOM']." ".$row["PRA_PRENOM"]."</OPTION><br>";
            
                  
              
          }
    $dbh = null;?></SELECT>
          <SELECT>
         
          <?php foreach($dbh2->query('SELECT MED_NOMCOMMERCIAL From MEDICAMENT') as $row2)
          {
             
             
              echo "<OPTION>".$row2['MED_NOMCOMMERCIAL']."</OPTION><br>";
            
                  
              
          }
    $dbh2 = null;?></SELECT>
          
          <FORM method="REQUEST" action="compterendu.php">
	<TEXTAREA NAME="zonetxt" cols=70 rows=20> </TEXTAREA><br>
        <input type="submit" value="Envoyer" class="valider" />
          </FORM>
        </div>

        <?php 
       
        if (isset($_REQUEST['zonetxt']))
        {
        $observ=$_REQUEST['zonetxt'];
        
        
        $user='root';
        $pass='root';
        
      $dbh3 = new PDO('mysql:host=localhost;dbname=Projet', $user, $pass);
        $req = "INSERT INTO COMPTE_RENDU (OBSERV_CR) VALUES ('$observ')";

        $dbh3->query($req);
        }
        
        ?>
    </body>
</html>