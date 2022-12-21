<?php
  session_start();
  $loginSession=$_SESSION['login'];
  $passwordSession=$_SESSION['password'];
?>


<link rel="stylesheet" type="text/css" href="Nav/Nav.css"/>
 <!-- menu nav -->
  <ul id="nav">
        <li><a href="/reservation-salles/index.php">Acceuil</a></li>
        <li><a href="/reservation-salles/planning.php">Le Planning</a></li>
        
       
        <!-- cette partie de menu nav change si l'utilisateur est connecté-->
        <?php 
        //si l'utilisateur est connecté
        if (!empty($loginSession) ){
            echo "<li><a href=",'/reservation-salles/profil.php',">Bienvenue ",$loginSession,"</a></li>"; //affiche bienvenu $Utilisateur
            echo "<li><a href=",'/reservation-salles/connexion.php',">Se déconnecter</a></li>";      //affiche se déconnecter (envoie a la page de login car il déco automatiquement)
            } 
            //si l'utilisateur n'est pas connecté
            else{
                echo "<li><a href=","/reservation-salles/inscription.php",">S'inscrire</a></li>";// affiche s'inscire
                echo "<li><a href=",'/reservation-salles/connexion.php',">Se Connecter</a></li>";//affiche se conecter
            }
        ?>
    </ul>
    <!--  fin menu nav -->



<!--  Pour case active :  a refaire apres
    class="active"
    -->