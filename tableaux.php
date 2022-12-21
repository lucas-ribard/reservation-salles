<?php

function BT_reserve($HeureD,$HeureF,$User_id,$J,$TD){
    ?>
        <form action="" method="post">
            <!-- Le jour et l'heure sont remonté via un formulaire invisible-->
            <input name="H_deb" type="hidden" value="<?php echo $HeureD?>">             <!-- Heure Début -->
            <input name="H_fin" type="hidden" value="<?php echo $HeureF?>">             <!-- Heure Fin -->
            <input name="IDUSER" type="hidden" value="<?php echo $User_id?>">           <!-- ID utiliateur -->
            <input name="jour" type="hidden" value="<?php echo $J?>">
            <input name="Date" type="hidden" value="<?php echo $TD?>">                <!-- Jour de la semaine -->
            <input type="submit" name="BT_res" value="Reserver" id="BT_sub">
        </form>  
<?php
}

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
        $Res_D_debut = date('d-m-Y', $DATE_Debut); //on recup la date de debut
        
        //infos de fin
        $DATE_Fin = strtotime($DATE_Fin);
        $Res_H_fin = date('H:i', $DATE_Fin); //on recup l'heure de fin
        $Res_D_fin = date('d-m-Y', $DATE_Fin); //on recup la date de fin

        



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

function RECUP_user($mysqli,$Res_id_user){
    if (!empty($Res_id_user)){
        $request = $mysqli -> query("SELECT * FROM `utilisateurs` where `id` = '$Res_id_user'"); 
        $result = $request -> fetch_array() ;
        $Utilisateur=$result['login'];
        return $Utilisateur;
    }
}

//   ------- init variables -------
$Jours=array('Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche');
$date=date('d-m-Y',strtotime('-1 Monday')); //commence les dates a lundi dernier
$dateSave=array(); // init l'array qui contient les dates
$data_rq_array=array();

// connexion db
require 'connect_db.php' ;

//recupere l'id de lutilisateur
$request = $mysqli -> query("SELECT * FROM `utilisateurs` where `login` = '$loginSession' AND `password` = '$passwordSession'"); 
$result = $request -> fetch_array() ;
$User_id=$result['id'];




//compte le nombre de reservation
$request = $mysqli -> query("SELECT MAX(`id`) as `max_id` FROM `reservations` WHERE 1");
$nbrequetes=mysqli_fetch_assoc($request);
$nbrequetes= $nbrequetes['max_id'];

?>



<table>
    <thead>
        <tr>
            <td>Horaires</td>
            <?php
                for($i=0;$i<=6;$i++){
                    //le jour ($j) est pris depuis l'array jours
                    $J=$Jours[$i];
                    
                    //lors de la premiere boucle, on n'ajoute pas +1 jours a la date
                    if($i!=0){
                        $date= date('d-m-Y', strtotime("+1 day", strtotime($date)));
                        array_push($dateSave,$date);  
                    }else{
                        array_push($dateSave,$date);
                    }

                    
            ?>
                <td><strong><?php echo $J,"<br>",$date;?></strong></td>
                <?php
            }
            ?>
        </tr>
    </thead>

    <tbody>
        
        <!-- 1 ligne par heure-->
        <?php
        //boucle pour afficher les lignes
        for($l=0;$l<=11;$l++){
        ?>
        <tr>
            <th>
                <?php //on incremente l'heure en fonction de la ligne ($l)
                    $HeureD = strtotime('08:00') + (60*60)*$l;
                    $HeureF = strtotime('09:00') + (60*60)*$l;

                    $HeureD = date('H:i', $HeureD);
                    $HeureF = date('H:i', $HeureF);
                        
                    echo $HeureD. ' - '. $HeureF; 
                ?>
            </th>
            <!--    on ajoute une case par jour     -->
            <?php
            for($i=0;$i<=6;$i++){       //pour chaque jour de la semaine
                $J=$Jours[$i];

                if($i==0){             
                    $TD=$dateSave[0];
                     }
                else{                                           
                $TD=$dateSave[$i]; 
                }
                if($J === "Samedi" or $J === "Dimanche"){       //sauf samedi et dimanche
                    ?><th style="background-color:rgb(67, 64, 92);color:white;">Fermé</th>
                    <?php
                }
                else{
                    
                    $reservedetect=0;
                    for($R=0;$R<=$nbrequetes;$R++){ //teste pour regarder chaque requetes
                        $data_rq_array=DATA_Requete($mysqli,$R);

                        if($data_rq_array[0]>= $HeureD and $data_rq_array[2] <= $HeureF and $TD === $data_rq_array[1] and $TD === $data_rq_array[3]){//  si le jour et la date corresponde a un emplacement reservé  
                            $reservedetect=1;
                            break;
                        }
  
                    }
                    if($reservedetect==1){
                        $Res_id_user=$data_rq_array[7];
                        $Utilisateur=RECUP_user($mysqli,$Res_id_user);
                        ?><th style="background-color:rgb(194, 190, 233)"><?php
                        echo "<u>Réservé par ",$Utilisateur,"</u><br>";
                        echo "<i>",$data_rq_array[5],"</i>";
                        echo "</th>";

                                
                    }      
                    else{
                        echo "<th>";
                        BT_reserve($HeureD,$HeureF,$User_id,$J,$TD);
                        echo "</th>";
                    }
                    
                   
                }
            }
        }
            ?>
                
        </tr>
        <!-- FIN ligne du tableau-->         
    </tbody>
</table>
        
        
        