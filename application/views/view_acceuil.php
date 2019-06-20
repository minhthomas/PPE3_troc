<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bienvenue sur la page d'acceuil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="<?php echo base_url(); ?>JQuery/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Bootstrap/css/bootstrap-theme.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>CSS/mesStyles.css" />
    
    <!-- CSS Pour les icones -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <script src="<?php echo base_url() ?>JS/mesFonctions.js"></script>
</head>
<body>
<ul id="nav">
        <div class='infosConnectUser'>
            <p class='welcome_user'><?php echo $_SESSION['allInfosUser']['nomUser']; ?></p>
            <img class='img_user' src='<?php echo $_SESSION['allInfosUser']['photoUser']; ?>'>
        </div>

        <li id="nav-Home"><a href="#">Accueil</a></li>
        <li id="nav-Offres"><a href="#Offres">Offres</a></li>
        <li id="nav-Demandes"><a href="#Demandes">Demandes</a></li>
        <li id="nav-Deals"><a href="#Deals">Deals</a></li>
        <li id="nav-deco"><a href='<?php echo base_url(); ?>index.php/GestionLogin/Logout'>Déconnexion</a></li>
    </ul>

    
    <div class="fondDemande">
        <h1 id='Offres'>Mes Offres <a class='lienplus' href='<?php echo base_url(); ?>index.php/Ctrl_Acceuil/AddOffre'>+</a></h1>
    </div>
   
    <hr>
    <div class="cssDivOffre" id='divOffre'>
        <?php
            foreach ($lesOffres as $uneOffre)
            {
        ?>
                <div class="cssDivOffre2" onclick='openWindowOffre(<?php echo $uneOffre->idOffre ?>)'>
                    <i class="far fa-heart fa-2x"></i>
                    <p class="infos_Offre">
                        <strong><?php echo $uneOffre->nomService ?></strong><br>
                        <?php echo $uneOffre->descriptionOffre ?><br>
                        <?php echo $uneOffre->dateOffre; ?><br>
                        <?php echo $uneOffre->LibelleRegion; ?>
                    </p>
                </div>
        <?php    
            }
        ?>
        <br>
    </div>


    <div class="fondDemande">
        <h1 id='Demandes'>Mes Demandes <a class='lienplus' href='<?php echo base_url(); ?>index.php/Ctrl_Acceuil/AddDemande'>+</a></h1>             
    </div>
    <hr>
    <div class="cssDivDemande" id='divDemande'>
        <?php
            foreach ($lesDemandes as $uneDemande)
            {
        ?>
                <div class="cssDivDemande2" onclick='openWindowDemande(<?php echo $uneDemande->idDemande ?>)'>
                    <i class="far fa-flag fa-2x"></i>
                    <p class="infos_Demande">
                        <strong><?php echo $uneDemande->nomService ?></strong><br>
                        <?php echo $uneDemande->descriptionDemande ?><br>
                        <?php echo $uneDemande->dateDemande; ?><br>
                        <?php echo $uneDemande->LibelleRegion; ?>
                    </p>
                </div>
        <?php    
            }
        ?>
        <br>
    </div>

    <h1 id='Deals'>Mes Deals <a class='lienplus' href='<?php echo base_url(); ?>index.php/Ctrl_Acceuil/AddDeal'>+</a></h1>
    <hr>
    <div class="cssDivDeals" id='divDeals'>
        <?php
            $i=0;
            // var_dump($lesDeals);
            // var_dump($lesInfosUser2);
            foreach ($lesDeals as $unDeal)
            {
                if ($unDeal->idEtat == 2)
                {
                    echo "<div class='DealsValider'>";
                
            ?>
                    <p class="infos_Deals">
                        <img class='creator_deal' src="<?php echo $lesInfosUser2[$i]->photoUser ?>"><br>
                        <strong><?php echo $lesInfosUser2[$i]->nomUser ?></strong><br>
                        <?php echo $unDeal->dateDeal; ?>

                        <?php echo $unDeal->nomService ?><br> 
                        
                        vs<br>

                        <?php 
                            echo $lesInfosUser2[$i]->nomService; 
                            $i++;
                        ?>
                        
                        <br>
                        <?php echo $unDeal->noteUser1 ?> - <?php echo $unDeal->noteUser2 ?><br>
                        <input type='button' value='Afficher' onclick='openWindowDeals(<?php echo $unDeal->idDeal ?>)' style='color: red;'>
                    </p>
            <?php
                    echo "</div>";
                }
                else {
                    echo "<div class='DealsNonValider'>";
            ?>
                    <p class="infos_Deals">
                        <img class='creator_deal' src="<?php echo $lesInfosUser2[$i]->photoUser ?>"><br>
                        <strong><?php echo $lesInfosUser2[$i]->nomUser ?></strong><br>
                        <?php echo $unDeal->dateDeal; ?>

                        <?php echo $unDeal->nomService ?><br> 
                        
                        vs<br>

                        <?php 
                            echo $lesInfosUser2[$i]->nomService; 
                            $i++;
                        ?>
                        
                        <br>
                        <?php echo $unDeal->noteUser1 ?> - <?php echo $unDeal->noteUser2 ?><br>
                        <input type='button' value='Afficher' onclick='openWindowDeals(<?php echo $unDeal->idDeal ?>)' style='color: red;'>
                    </p>
            <?php
                    echo "</div>";
                }
            }
        ?>
        <br>
    </div>

    <div id="fenetreUpdate" class="cssFenetre">
        <div class="contentForm">
            <div id="divUpdateForm"></div>
        </div>
    </div>
    
</body>
</html>