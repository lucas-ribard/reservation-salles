<?php
    //recup infos de session
    session_start();
    $loginSession=$_SESSION['login'];
    $passwordSession=$_SESSION['password'];
    $ID_user=$_SESSION['IDuser'];
    $Hdeb=$_SESSION['Hdeb'];
    $date=$_SESSION['Date'];
    $temp=$date;
    //on reorganise la date dans le bon sens
    $date = strtotime($date);
    $date = date('Y-m-d', $date); //date ok

    // connexion db
    require 'connect_db.php' ;

    function DATA_Requete($mysqli,$R){
        // recupere l'info de la requette 
    
        if ($R!=NULL){
            $request = $mysqli -> query("SELECT * FROM `reservations` WHERE `id`='$R'");
            $resultRESERVATION = $request -> fetch_array() ;
    
            $Res_id=$resultRESERVATION["id"];
            $Res_titre=$resultRESERVATION["titre"];
            $Res_description=$resultRESERVATION["description"];
            $DATE_Debut=$resultRESERVATION["debut"];
            $DATE_Fin=$resultRESERVATION["fin"];
            $Res_id_user=$resultRESERVATION["id_utilisateur"];
    
            
            // ----- sépare les date de réservation en différentes variables Heure et Date --------
            // infos du début
            $DATE_Debut = strtotime($DATE_Debut);
            $Res_H_debut = date('H:i', $DATE_Debut); //on récupere l'heure dans RES_H_debut
            $Res_D_debut = date('Y-m-d', $DATE_Debut); //on recup la date de debut
            
            //infos de fin
            $DATE_Fin = strtotime($DATE_Fin);
            $Res_H_fin = date('H:i', $DATE_Fin); //on recup l'heure de fin
            $Res_D_fin = date('Y-m-d', $DATE_Fin); //on recup la date de fin
    
            /*
            $array=($Res_H_debut,$Res_D_debut,$Res_H_fin,$Res_D_fin,$Res_id,$Res_titre,$Res_description,$Res_id_user);*/
            //il marche pas autrement
            $data_rq_array[0]=$Res_H_debut;
            $data_rq_array[1]=$Res_D_debut;
            $data_rq_array[2]=$Res_H_fin;
            $data_rq_array[3]=$Res_D_fin;
            $data_rq_array[4]=$Res_id;
            $data_rq_array[5]=$Res_titre;
            $data_rq_array[6]=$Res_description;
            $data_rq_array[7]=$Res_id_user;
            return $data_rq_array;
        }
       
    }



    //compte le nombre de reservation
    $request = $mysqli -> query("SELECT MAX(`id`) as `max_id` FROM `reservations` WHERE 1");
    $nbrequetes=mysqli_fetch_assoc($request);
    $nbrequetes= $nbrequetes['max_id'];

    

    if(!empty($_GET['BT_Form'])) {
        
        $ID_user=$_GET["idUserForm"];
        $NTitre=$_GET["TitreForm"];
        $NTitre = mysqli_real_escape_string($mysqli,htmlspecialchars($NTitre)); 
        $NheureD=$_GET["HoraireForm"];

        $NheureF = strtotime($NheureD)+ (60*59); //ajoute 59min a lheure de début
        $NheureF = date('H:i',$NheureF);
        $NDate=$_GET["dateForm"];
        $Ndesc=$_GET["DescriptionForm"];
        $Ndesc = mysqli_real_escape_string($mysqli,htmlspecialchars($Ndesc)); 

        

        $reservedetect=0;

        for($R=0;$R<=$nbrequetes;$R++){ //teste pour regarder chaque requetes

            $data_rq_array=DATA_Requete($mysqli,$R);

            if($data_rq_array[0]>= $NheureD and $data_rq_array[2] <= $NheureF and $NDate === $data_rq_array[3]){//  si le jour et la date corresponde a un emplacement reservé  
            $reservedetect=1;
            break;
            }
           
            
            }
            if($reservedetect==1){
                $message = "Cet Horaire est déja réservé"; 
            }      
            else{
                $message = "envoie requete";
                /*unset($_SESSION['IDuser']); //on nuke les var session
                unset($_SESSION['Hdeb']) ;
                unset($_SESSION['Date']) ;*/

                $DateFullD=$NDate." ".$NheureD;
                $DateFullF=$NDate." ".$NheureF;

                $sql = "INSERT INTO `reservations`(`titre`, `description`, `debut`, `fin`, `id_utilisateur`) VALUES ('$NTitre','$Ndesc','$DateFullD','$DateFullF','$ID_user')"; 
                if ($mysqli->query($sql) === TRUE) {
                    header('location:http://localhost/Reservation_salles/planning.php'); 
                }
            }

    }

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="CSS/Reservation.css" rel="stylesheet" type="text/css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <title>Reservation</title>
    </head>

    <body>
            <!-- Menu de naviguation -->
        <?php include 'Nav/Nav.php' ?>

        
        <section id="main">
        
            <div class="box">
            <h1>Reserver la salle</h1>
                
                <form method="get">
                    <input name="idUserForm" type="hidden" value="<?php echo $ID_user?>">            <!-- id de l'utilisateur pour associer un utilisateur à la reservation -->

                    <label for="TitreForm">Titre :</label><br>
                    <input type="text" name="TitreForm" placeholder="Titre de la Reservation" size="30" maxlength="40" required><br><br>

                    <label for="dateForm">Date :</label><br>
                    <input type="date" name="dateForm" value="<?php echo date($date); ?>"  required><br><br>

                    <label for="HoraireForm">Horaire:</label><br>
                    <input type="time" name="HoraireForm" value="<?php echo $Hdeb; ?>" min="08:00" max="20:00" required><br><br>

                    <label for="DescriptionForm">Description:</label><br>
                    <textarea rows="10" cols="60"  name="DescriptionForm" placeholder="Description de votre Reservation" required></textarea><br><br>
                    
                    <input type="submit" name="BT_Form" value="Reserver la salle"><br><br>
                </form>
                <?php echo "<error>",$message,"</error>" ;?>
            </div>
        </section>
        
    </body>
</html>