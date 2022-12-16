<?php
    //recup infos de session
    session_start();
    $loginSession=$_SESSION['login'];
    $passwordSession=$_SESSION['password'];

    // connexion db
    require 'connect_db.php' ;

    // requete
    $request = $mysqli -> query("SELECT * FROM utilisateurs");  
    //verifie qu'on est connecté en admin
    if ($loginSession==="admin" and $passwordSession==="admin"){

?>

<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8">

<head>
    <title>Profil</title>
    <link href="CSS/admin.css" rel="stylesheet" type="text/css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

</head>

<body>

   <!-- Menu de naviguation -->
   <?php include 'Nav/Nav.php' ?>

   <br><br><br>
   <section id="main">
    <div id="box">
        <table>
            <thead>
                <tr>
                    <td><strong>login</strong></td>
                    <td><strong>password</strong></td>
                    <td><strong>id</strong></td>
                
                </tr>
            </thead>
            <tbody>
                <?php
                    while(($result = $request -> fetch_array()) != null)
                    {
                        echo "<tr>";
                        echo "<td>".$result['login']."</td>";
                        echo "<td>".$result['password']."</td>";
                        echo "<td>".$result['id']."</td>";
                        echo "</tr>";
                    }
                ?>
        </table>
        </div>
    </section>
    <?php
}
else{
    echo "Vous n'avez pas le droit d'etre ici";
    header('Location:http://localhost/Reservation_salles/profil.php'); //redirigé vers la page profil.php
}
?>
</body>
</html>