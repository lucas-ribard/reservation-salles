<?php
$Jours=array('Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche');
$date=date("d-m-Y");
?>


        <table>
            <thead>
                <tr>
                <td>Horaires</td>
                <?php
                    for($i=0;$i<=4;$i++){
                        $J=$Jours[$i];
                        ?>
                        <td><strong><?php echo $J,"<br>",$date;?></strong></td>
                        <?php
                    }
                        ?>
                </tr>
            </thead>

            <tbody>
            <!-- Premiere ligne du tableau-->
            <tr>
                <th>
                <?php //on choisit l'heure
                    $HeureD=date('08:00');
                    $HeureF=date('09:00');
                    echo $HeureD. ' - '. $HeureF; ?></th>
                    <!-- on ajoute une case par jour-->
                    <?php
                    for($i=0;$i<=4;$i++){
                        $J=$Jours[$i];
                        ?>
                        <th>
                            <form action="" method="post">
                                <!-- Le jour et l'heure sont remonté via un formulaire invisible-->
                                <input name="ValDX" type="hidden" value="<?php echo $HeureD?>">
                                <input name="ValFX" type="hidden" value="<?php echo $HeureF?>">
                                <input name="ValY" type="hidden" value="<?php echo $J?>">
                                <input type="submit" name="BT_res" value="Reserver">
                        </form>  
                    </th>
                <?php
                }
                ?>
            </tr>


            <tr>
                <th>
                <?php  //on choisit l'heure
                $HeureD=date('09:00');
                $HeureF=date('10:00');
                echo $HeureD. ' - '. $HeureF; ?></th>
                 <!-- on ajoute une case par jour-->
                <?php
                for($i=0;$i<=4;$i++){
                    $J=$Jours[$i];
                    ?>
                    <th>
                        <form action="" method="post">
                            <!-- Le jour et l'heure sont remonté via un formulaire invisible-->
                            <input name="ValDX" type="hidden" value="<?php echo $HeureD?>">
                            <input name="ValFX" type="hidden" value="<?php echo $HeureF?>">
                            <input name="ValY" type="hidden" value="<?php echo $J?>">
                            <input type="submit" name="BT_res" value="Reserver">
                        </form>  
                    </th>
                <?php
                }
                ?> 
            </tr>


                <tr>
                    <th>
                    <?php  //on choisit l'heure
                    $HeureD=date('10:00');
                    $HeureF=date('11:00');
                    echo $HeureD. ' - '. $HeureF; ?></th>
                    <!-- on ajoute une case par jour-->
                    <?php
                    for($i=0;$i<=4;$i++){
                        $J=$Jours[$i];
                        ?>
                        <th>
                            <form action="" method="post">
                                <!-- Le jour et l'heure sont remonté via un formulaire invisible-->
                                <input name="ValDX" type="hidden" value="<?php echo $HeureD?>">
                                <input name="ValFX" type="hidden" value="<?php echo $HeureF?>">
                                <input name="ValY" type="hidden" value="<?php echo $J?>">
                                <input type="submit" name="BT_res" value="Reserver">
                            </form>  
                        </th>
                        <?php
                    }
                    ?>
                       
                </tr>

                <tr>
                    <th>
                    <?php  //on choisit l'heure
                    $HeureD=date('11:00');
                    $HeureF=date('12:00');
                    echo $HeureD. ' - '. $HeureF; ?></th>
                    <!-- on ajoute une case par jour-->
                    <?php
                    for($i=0;$i<=4;$i++){
                        $J=$Jours[$i];
                        ?>
                        <th>
                            <form action="" method="post">
                                <!-- Le jour et l'heure sont remonté via un formulaire invisible-->
                                <input name="ValDX" type="hidden" value="<?php echo $HeureD?>">
                                <input name="ValFX" type="hidden" value="<?php echo $HeureF?>">
                                <input name="ValY" type="hidden" value="<?php echo $J?>">
                                <input type="submit" name="BT_res" value="Reserver">
                            </form>  
                        </th>
                        <?php
                    }
                    ?>
                       
                </tr>
                   
                <tr>
                    <th>
                    <?php  //on choisit l'heure
                    $HeureD=date('12:00');
                    $HeureF=date('13:00');
                    echo $HeureD. ' - '. $HeureF; ?></th>
                    <!-- on ajoute une case par jour-->
                    <?php
                    for($i=0;$i<=4;$i++){
                        $J=$Jours[$i];
                        ?>
                        <th>
                            <form action="" method="post">
                                <!-- Le jour et l'heure sont remonté via un formulaire invisible-->
                                <input name="ValDX" type="hidden" value="<?php echo $HeureD?>">
                                <input name="ValFX" type="hidden" value="<?php echo $HeureF?>">
                                <input name="ValY" type="hidden" value="<?php echo $J?>">
                                <input type="submit" name="BT_res" value="Reserver">
                            </form>  
                        </th>
                        <?php
                    }
                    ?>
                       
                </tr>
                    
                <tr>
                    <th>
                    <?php  //on choisit l'heure
                    $HeureD=date('13:00');
                    $HeureF=date('14:00');
                    echo $HeureD. ' - '. $HeureF; ?></th>
                    <!-- on ajoute une case par jour-->
                    <?php
                    for($i=0;$i<=4;$i++){
                        $J=$Jours[$i];
                        ?>
                        <th>
                            <form action="" method="post">
                                <!-- Le jour et l'heure sont remonté via un formulaire invisible-->
                                <input name="ValDX" type="hidden" value="<?php echo $HeureD?>">
                                <input name="ValFX" type="hidden" value="<?php echo $HeureF?>">
                                <input name="ValY" type="hidden" value="<?php echo $J?>">
                                <input type="submit" name="BT_res" value="Reserver">
                            </form>  
                        </th>
                        <?php
                    }
                    ?>
                       
                </tr>

                <tr>
                    <th>
                    <?php  //on choisit l'heure
                    $HeureD=date('14:00');
                    $HeureF=date('15:00');
                    echo $HeureD. ' - '. $HeureF; ?></th>
                    <!-- on ajoute une case par jour-->
                    <?php
                    for($i=0;$i<=4;$i++){
                        $J=$Jours[$i];
                        ?>
                        <th>
                            <form action="" method="post">
                                <!-- Le jour et l'heure sont remonté via un formulaire invisible-->
                                <input name="ValDX" type="hidden" value="<?php echo $HeureD?>">
                                <input name="ValFX" type="hidden" value="<?php echo $HeureF?>">
                                <input name="ValY" type="hidden" value="<?php echo $J?>">
                                <input type="submit" name="BT_res" value="Reserver">
                            </form>  
                        </th>
                        <?php
                    }
                    ?>
                       
                </tr>
                <tr>
                    <th>
                    <?php  //on choisit l'heure
                    $HeureD=date('15:00');
                    $HeureF=date('16:00');
                    echo $HeureD. ' - '. $HeureF; ?></th>
                    <!-- on ajoute une case par jour-->
                    <?php
                    for($i=0;$i<=4;$i++){
                        $J=$Jours[$i];
                        ?>
                        <th>
                            <form action="" method="post">
                                <!-- Le jour et l'heure sont remonté via un formulaire invisible-->
                                <input name="ValDX" type="hidden" value="<?php echo $HeureD?>">
                                <input name="ValFX" type="hidden" value="<?php echo $HeureF?>">
                                <input name="ValY" type="hidden" value="<?php echo $J?>">
                                <input type="submit" name="BT_res" value="Reserver">
                            </form>  
                        </th>
                        <?php
                    }
                    ?>
                       
                </tr>
                <tr>
                    <th>
                    <?php  //on choisit l'heure
                    $HeureD=date('16:00');
                    $HeureF=date('17:00');
                    echo $HeureD. ' - '. $HeureF; ?></th>
                    <!-- on ajoute une case par jour-->
                    <?php
                    for($i=0;$i<=4;$i++){
                        $J=$Jours[$i];
                        ?>
                        <th>
                            <form action="" method="post">
                                <!-- Le jour et l'heure sont remonté via un formulaire invisible-->
                                <input name="ValDX" type="hidden" value="<?php echo $HeureD?>">
                                <input name="ValFX" type="hidden" value="<?php echo $HeureF?>">
                                <input name="ValY" type="hidden" value="<?php echo $J?>">
                                <input type="submit" name="BT_res" value="Reserver">
                            </form>  
                        </th>
                        <?php
                    }
                    ?>
                       
                </tr>
                <tr>
                    <th>
                    <?php  //on choisit l'heure
                    $HeureD=date('17:00');
                    $HeureF=date('18:00');
                    echo $HeureD. ' - '. $HeureF; ?></th>
                    <!-- on ajoute une case par jour-->
                    <?php
                    for($i=0;$i<=4;$i++){
                        $J=$Jours[$i];
                        ?>
                        <th>
                            <form action="" method="post">
                                <!-- Le jour et l'heure sont remonté via un formulaire invisible-->
                                <input name="ValDX" type="hidden" value="<?php echo $HeureD?>">
                                <input name="ValFX" type="hidden" value="<?php echo $HeureF?>">
                                <input name="ValY" type="hidden" value="<?php echo $J?>">
                                <input type="submit" name="BT_res" value="Reserver">
                            </form>  
                        </th>
                        <?php
                    }
                    ?>
                       
                </tr>
                <tr>
                    <th>
                    <?php  //on choisit l'heure
                    $HeureD=date('18:00');
                    $HeureF=date('19:00');
                    echo $HeureD. ' - '. $HeureF; ?></th>
                    <!-- on ajoute une case par jour-->
                    <?php
                    for($i=0;$i<=4;$i++){
                        $J=$Jours[$i];
                        ?>
                        <th>
                            <form action="" method="post">
                                <!-- Le jour et l'heure sont remonté via un formulaire invisible-->
                                <input name="ValDX" type="hidden" value="<?php echo $HeureD?>">
                                <input name="ValFX" type="hidden" value="<?php echo $HeureF?>">
                                <input name="ValY" type="hidden" value="<?php echo $J?>">
                                <input type="submit" name="BT_res" value="Reserver">
                            </form>  
                        </th>
                        <?php
                    }
                    ?>
                       
                </tr>
                    
            </tbody>
                
        </table>









        <!-- la premiere version d'une ligne :

                        on revient de loin



         <tr>
                        <th><?php //echo date('08:00'). ' - '. date('09:00'); ?></th>
                        <th>
                            <form action="" method="post">
                                <input name="ValDX" type="hidden" value="8">
                                <input name="ValFX" type="hidden" value="9">
                                <input name="ValY" type="hidden" value="Lundi">
                                <input type="submit" name="BT_res" value="Reserver">
                            </form>  
                        </th>
                        <th>
                            <form action="" method="post">
                                <input name="ValDX" type="hidden" value="8">
                                <input name="ValFX" type="hidden" value="9">
                                <input name="ValY" type="hidden" value="Mardi">
                                <input type="submit" name="BT_res" value="Reserver">
                            </form>  
                        </th>
                        <th>
                            <form action="" method="post">
                                <input name="ValDX" type="hidden" value="8">
                                <input name="ValFX" type="hidden" value="9">
                                <input name="ValY" type="hidden" value="Mercredi">
                                <input type="submit" name="BT_res" value="Reserver">
                            </form>  
                        </th>
                        <th>
                            <form action="" method="post">
                                <input name="ValDX" type="hidden" value="8">
                                <input name="ValFX" type="hidden" value="9">
                                <input name="ValY" type="hidden" value="Jeudi">
                                <input type="submit" name="BT_res" value="Reserver">
                            </form>  
                        </th>
                        <th>
                            <form action="" method="post">
                                <input name="ValDX" type="hidden" value="8">
                                <input name="ValFX" type="hidden" value="9">
                                <input name="ValY" type="hidden" value="Vendredi">
                                <input type="submit" name="BT_res" value="Reserver">
                            </form>  
                        </th>
                        <th>
                            <form action="" method="post">
                                <input name="ValDX" type="hidden" value="8">
                                <input name="ValFX" type="hidden" value="9">
                                <input name="ValY" type="hidden" value="Samedi">
                                <input type="submit" name="BT_res" value="Reserver">
                            </form>  
                        </th>
                        <th>
                            <form action="" method="post">
                                <input name="ValDX" type="hidden" value="8">
                                <input name="ValFX" type="hidden" value="9">
                                <input name="ValY" type="hidden" value="dimanche">
                                <input type="submit" name="BT_res" value="Reserver">
                            </form>  
                        </th>
                    </tr>
                    -->