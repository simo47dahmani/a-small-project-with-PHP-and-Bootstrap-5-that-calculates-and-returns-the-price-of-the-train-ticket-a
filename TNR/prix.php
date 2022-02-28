<!DOCTYPE html>
<html lang="en">
    <head>
        <!--Bootstrap.min.css-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Réservation</title>
    </head>
    <body>
            <!-- La partie header -->
            <header>
                <div class="container-fluid p-1  bg-dark">
                    <div class="container p-0">
                        <h1 class="bg-warning fs-1 mt-1 text-capitalize text-dark text-center p-2 rounded">
                            la société privée des chemins de fer
                        </h1>
                    </div>
                </div>
            </header>

                                             <!--La parite php -->

            <?php

            /* 

            J'utiliserai le tableau "$message_erreur" pour accumuler toutes les messages erreurs et les 
            afficher en ordre.
             */ 

            $message_erreur = array();


            /*

                
                    je teste si l'utilisateur a bien entré les données obligatoires à savoir:
                    -> La ville de départ
                    -> La ville d'arrivée
                    -> Le choix de calsse

                    
            */
                

                if (isset($_POST["villeDepart"]) && $_POST["villeDepart"] != "aucune") {
                    $villeDepart = $_POST["villeDepart"];
                }else{
                    
                    array_push($message_erreur, "Vous n'avez pas choisi une ville de départ");
                }


                if (isset($_POST["villeArrivee"]) && $_POST["villeArrivee"] != "aucune") {
                    $villeArrivee = $_POST["villeArrivee"];
                }else{
                
                    array_push($message_erreur, "Vous n'avez pas choisi une ville d'arrivée");
                }


                if (isset($_POST["classe"])) {
                    $classe = $_POST["classe"];
                }else{

                    array_push($message_erreur, "Vous n'avez pas choisi de classe");
                }

                /* 
                *************************************************************************************
                La création de la fonction tarrifVoyage qui déterminera le tarrif du voyage seulement 
                *************************************************************************************
                */

                function tarrifVoyage($vd, $va, $c){

                    /*
                        Je vais déclarer des variables et les affecter les noms des ville ainsi que leurs tarrifs. 
                        Cela m'aidera au future à changer facilement le nom de la ville et leurs tarif sans 
                        avoir besoin à parcourir tout le code.
                    */
                    
                    $ville_1 = "casablanca";

                    $ville_2 = "mohammedia";

                    $ville_3 = "rabat";

                    $ville_4 = "sale";

                    $ville_5 = "kenitra";
                    
                    global $prix_du_billet;
                    global $ligne_supportée;
                    $prix_du_billet = 0;
                    $ligne_supportée = true;

                    switch ($vd) {
                        case $ville_1:
                            switch ($va) {
                                case $ville_1:
                                    ?>
                                        <div class="container-fluid">
                                            <div class="row">
                                                
                                                <?php
                                                    echo '<div class="col-12  bg-danger w-100 text-white text-center text-bold mt-5 fs-2"> Vous ne pouvez pas choisir la même ville à la fois pour le départ et pour l\'arrivé.</div>';
                                                ?>
                                                
                                            </div>
                                        </div>
                                    <?php
                                    break;
    
                                case $ville_2:
                                        if ($c == "1ereClasse") {
                                            $prix_du_billet = 20;
                                        }
                                        else{
                                            $prix_du_billet = 15;
                                        }
                                    break;
    
                                case $ville_3:
                                        if ($c == "1ereClasse") {
                                            $prix_du_billet = 50;
                                        }
                                        else{
                                            $prix_du_billet = 40;
                                        }
                                    break;
    
                                case $ville_4:
                                        if ($c == "1ereClasse") {
                                            $prix_du_billet = 55;
                                        }
                                        else{
                                            $prix_du_billet = 50;
                                        }
                                    break;
    
                                case $ville_5:
                                        if ($c == "1ereClasse") {
                                            $prix_du_billet = 85;
                                        }
                                        else{
                                            $prix_du_billet = 70;
                                        }
                                    break;
                            }
                            break;
                        
                        case $ville_2:
                            switch ($va) {
                                case $ville_1:
                                    ?>
                                        <div class="container-fluid">
                                            <div class="row">
                                                
                                                <?php
                                                    echo '<div class="col-12  bg-danger w-100 text-white text-center text-bold mt-5 fs-2"> Cette ligne n\'est pas supporté.</div>';
                                                ?>
                                                
                                            </div>
                                        </div>
                                    <?php
                                    $ligne_supportée = false;
                                    break;
    
                                case $ville_2:
                                    ?>
                                        <div class="container-fluid">
                                            <div class="row">
                                                
                                                <?php
                                                    echo '<div class="col-12  bg-danger w-100 text-white text-center text-bold mt-5 fs-2"> Vous ne pouvez pas choisir la même ville à la fois pour le départ et pour l\'arrivé.</div>';
                                                ?>
                                                
                                            </div>
                                        </div>
                                    <?php
                                    break;
    
                                case $ville_3:
                                        if ($c == "1ereClasse") {
                                            $prix_du_billet = 40;
                                        }
                                        else{
                                            $prix_du_billet = 30;
                                        }
                                    break;
    
                                case $ville_4:
                                        if ($c == "1ereClasse") {
                                            $prix_du_billet = 45;
                                        }
                                        else{
                                            $prix_du_billet = 40;
                                        }
                                    break;
    
                                case $ville_5:
                                        if ($c == "1ereClasse") {
                                            $prix_du_billet = 65;
                                        }
                                        else{
                                            $prix_du_billet = 50;
                                        }
                                    break;
                            }
                            break;
                                
        
                        case $ville_3:
                            switch ($va) {
                                case $ville_1:
                                ?>
                                        <div class="container-fluid">
                                            <div class="row">
                                                
                                                <?php
                                                    echo '<div class="col-12  bg-danger w-100 text-white text-center text-bold mt-5 fs-2"> Cette ligne n\'est pas supporté.</div>';
                                                ?>
                                                
                                            </div>
                                        </div>
                                    <?php
                                    $ligne_supportée = false;
                                    break;
    
                                case $ville_2:
                                    ?>
                                        <div class="container-fluid">
                                            <div class="row">
                                                
                                                <?php
                                                    echo '<div class="col-12  bg-danger w-100 text-white text-center text-bold mt-5 fs-2"> Cette ligne n\'est pas supporté.</div>';
                                                ?>
                                                
                                            </div>
                                        </div>
                                    <?php
                                    $ligne_supportée = false;
                                    break;
    
                                case $ville_3:
                                    ?>
                                        <div class="container-fluid">
                                            <div class="row">
                                                
                                                <?php
                                                    echo '<div class="col-12  bg-danger w-100 text-white text-center text-bold mt-5 fs-2"> Vous ne pouvez pas choisir la même ville à la fois pour le départ et pour l\'arrivé.</div>';
                                                ?>
                                                
                                            </div>
                                        </div>
                                    <?php
                                    break;
    
                                case $ville_4:
                                    if ($c == "1ereClasse") {
                                        $prix_du_billet = 20;
                                    }
                                    else{
                                        $prix_du_billet = 15;
                                    }
                                    break;
    
                                case $ville_5:
                                    if ($c == "1ereClasse") {
                                        $prix_du_billet = 40;
                                    }
                                    else{
                                        $prix_du_billet = 30;
                                    }
                                    break;
                            }
                            break;
                                
    
                        case $ville_4:
                            switch ($va) {
                                case $ville_1:
                                    ?>
                                        <div class="container-fluid">
                                            <div class="row">
                                                
                                                <?php
                                                    echo '<div class="col-12  bg-danger w-100 text-white text-center text-bold mt-5 fs-2"> Cette ligne n\'est pas supporté.</div>';
                                                ?>
                                                
                                            </div>
                                        </div>
                                    <?php
                                    $ligne_supportée = false;
                                    break;
    
                                case $ville_2:
                                    ?>
                                        <div class="container-fluid">
                                            <div class="row">
                                                
                                                <?php
                                                    echo '<div class="col-12  bg-danger w-100 text-white text-center text-bold mt-5 fs-2"> Cette ligne n\'est pas supporté.</div>';
                                                ?>
                                                
                                            </div>
                                        </div>
                                    <?php
                                    $ligne_supportée = false;
                                    break;
    
                                case $ville_3:
                                    ?>
                                        <div class="container-fluid">
                                            <div class="row">
                                                
                                                <?php
                                                    echo '<div class="col-12  bg-danger w-100 text-white text-center text-bold mt-5 fs-2"> Cette ligne n\'est pas supporté.</div>';
                                                ?>
                                                
                                            </div>
                                        </div>
                                    <?php
                                    $ligne_supportée = false;
                                    break;
    
                                case $ville_4:
                                    ?>
                                        <div class="container-fluid">
                                            <div class="row">
                                                
                                                <?php
                                                    echo '<div class="col-12  bg-danger w-100 text-white text-center text-bold mt-5 fs-2"> Cette ligne n\'est pas supporté.</div>';
                                                ?>
                                                
                                            </div>
                                        </div>
                                    <?php
                                    $ligne_supportée = false;
                                    break;
    
                                case $ville_5:
                                    if ($c == "1ereClasse") {
                                        $prix_du_billet = 20;
                                    }
                                    else{
                                        $prix_du_billet = 15;
                                    }
                                    break;
                            }
                            break;
                        
                        case $ville_5:
                            if ($va == $ville_1 || $va == $ville_2 || $va == $ville_3 || $va == $ville_4) {
                                ?>
                                    <div class="container-fluid">
                                        <div class="row">
                                                
                                            <?php
                                                echo '<div class="col-12  bg-danger w-100 text-white text-center text-bold mt-5 fs-2"> Cette ligne n\'est pas supporté.</div>';
                                             ?>
                                                
                                        </div>
                                    </div>
                                <?php
                                $ligne_supportée = false;
                            }else {
                                ?>
                                    <div class="container-fluid">
                                        <div class="row">
                                            
                                            <?php
                                                echo '<div class="col-12  bg-danger w-100 text-white text-center text-bold mt-5 fs-2"> Vous ne pouvez pas choisir la même ville à la fois pour le départ et pour l\'arrivé.</div>';
                                            ?>
                                            
                                        </div>
                                    </div>
                                <?php
                            }
                    }
                    if ($ligne_supportée = true && $prix_du_billet >0) {
                        return $prix_du_billet;
                    }else{
                        return NULL;
                    }
                        
    
                }
                
                

                /******************Affichage des valeurs manquée******************/

                if(count($message_erreur) >= 1){
                    ?>
                        <div class="container-fluid">
                            <div class="row">
                                
                                <?php
                                for ($i=0; $i < count($message_erreur); $i++) { 
                                    echo '<div class="col-12  bg-danger w-100 text-white text-center text-bold mt-5 fs-2">' . $message_erreur[$i] . '</div>';
                                }
                                echo '<div class="col-12  bg-danger w-100 text-white text-center text-bold mt-5 fs-2">Veuillez retourner à la <a href="index.html" class="text-warning"/>page tarrif</a></div>';
                                
                                ?>
                                
                            </div>
                        </div>
                    <?php
                    
                
                }else{
                    /******************L'appel de la fonction tarrifVoyage************/
                    $tarrif_V = tarrifVoyage($villeDepart, $villeArrivee, $classe);
                    if (is_null($tarrif_V)) {
                        echo '<div class="col-12  bg-danger w-100 text-white text-center text-bold mt-5 fs-2"> Veuillez revoir les données entrées dans cette page <a href="index.html" class="text-warning"/>page tarrif</a></div>';
                    }else {
                        echo $tarrif_V;
                    }
                }

                
            ?>


            <!--La partie main et résultat de la réservation -->
            <main>
            </main>
    </body>
</html>