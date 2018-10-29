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
        <li id="nav-deco"><a onclick='deconnection()'>Déconnexion</a></li>
    </ul>

    <h1 id='Offres'>Mes Offres</h1>
    <?php echo '<a href="'.base_url().'index.php/Ctrl_Acceuil/setAddOffre">Ajouter</a>'?>
    <hr>
    <div class="cssDivOffre" id='divOffre'>
        <?php
            foreach ($lesOffres as $uneOffre)
            { 
        ?>
                <div class="cssDivOffre2" onclick="openWindowOffre('<?php echo $uneOffre->idOffre ?>', '<?php echo $uneOffre->nomService ?>', '<?php echo $uneOffre->descriptionOffre ?>', '<?php echo $uneOffre->dateOffre ?>')">
                    <p class=""><?php echo $uneOffre->nomService ?></p>
                    <p class=""><?php echo $uneOffre->descriptionOffre ?></p>
                    <p class=""><?php echo $uneOffre->dateOffre; ?></p>
                </div>
        <?php    
            }
        ?>
        <br>
    </div>

    <h1 id='Demandes'>Mes Demandes</h1>
    <?php echo '<a href="'.base_url().'index.php/Ctrl_Acceuil/setAddDemande">Ajouter</a>'?>
    <hr>
    <div class="cssDivDemande" id='divDemande'>
        <?php
            foreach ($lesDemandes as $uneDemande)
            { 
        ?>
                <div class="cssDivDemande2" onclick="openWindowDemande('<?php echo $uneDemande->idDemande ?>', '<?php echo $uneDemande->nomService ?>', '<?php echo $uneDemande->descriptionDemande ?>', '<?php echo $uneDemande->dateDemande ?>')">
                    <p class=""><?php echo $uneDemande->nomService ?></p>
                    <p class=""><?php echo $uneDemande->descriptionDemande ?></p>
                    <p class=""><?php echo $uneDemande->dateDemande; ?></p>
                </div>
        <?php    
            }
        ?>
        <br>
    </div>

    <h1 id='Deals'>Mes Deals</h1>
    <hr>
    <div class="cssDivDeals" id='divDeals'>
        <?php
            // var_dump($lesDeals);
            // var_dump($leServiceUser2);
            $i=0;
            foreach ($lesDeals as $unDeal)
            {
        ?>
                    <div class="cssDivDeals2">
                        <p class="infos_Deals">
                            <img class='creator_deal' src="<?php echo $unDeal->photoUser ?>"><br>
                            <strong><?php echo $unDeal->nomUser ?></strong><br>
                            <?php echo $unDeal->dateDeal; ?>

                            <?php echo $unDeal->nomService ?><br> 
                            vs<br>

                            <?php 
                                echo $leServiceUser2[$i]->nomService; 
                                $i++;
                            ?>
                            
                            <br>
                            <?php echo $unDeal->noteUser1 ?> - <?php echo $unDeal->noteUser2 ?><br>
                            <input type='button' value='Afficher' onclick='AfficherDeals()'>
                        </p>
                    </div>
        <?php
            }
        ?>
        <br>
    </div>

    <div id="fenetreUpdate" class="cssFenetre">
        <div class="contentForm">
            <div id="updateForm"></div>
        </div>
    </div>
    
</body>
</html>