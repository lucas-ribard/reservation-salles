<?php
    //on ouvre et récupere les variables sessions
    session_start();
    $loginSession=$_SESSION['login'];
    $passwordSession=$_SESSION['password'];


if(!empty($_POST['BT_res'])) {
    $H_deb=$_POST['H_deb'];
    $H_fin=$_POST['H_fin'];
    $jour=$_POST['jour'];
    $ID_User=$_POST['IDUSER'];
    $date=$_POST['Date']; //ai-je besoin de toutes ces var ? probablement pas , mais elle sont la

    if(!empty($ID_User)){
        echo "test : Réservé de ",$H_deb," à ",$H_fin," le ",$jour," ",$date," par ",$_SESSION['login'],$ID_User;
        $_SESSION['IDuser']=$ID_User;
        $_SESSION['Hdeb']=$H_deb;
        $_SESSION['Date']=$date;
        header("location:reservation-form.php");
    }
    else{
        //echo "test : Réservé de ",$H_deb," à ",$H_fin," le ",$jour," ",$date," Aucun utilisateur est connecté";
        header("location:connexion.php");
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="CSS/planning.css" rel="stylesheet" type="text/css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Planning</title>
</head>

<body>

    <!-- Menu de naviguation -->
    <?php include 'Nav/Nav.php' ?>

    <section id="main">
            <h1>Planning de la semaine</h1>
            <!-- tableau -->
            <?php include 'tableaux.php' ?>    
                
    </section>
</body>

</html>