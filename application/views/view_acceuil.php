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
    
    <script src="<?php echo base_url() ?>JS/mesFonctions.js"></script>
</head>
<body>
    <ul id="nav">
        <li id="nav-Home"><a href="#">Accueil</a></li>
        <li id="nav-Offres"><a href="#Offres">Offres</a></li>
        <li id="nav-Demandes"><a href="#Demandes">Demandes</a></li>
        <li id="nav-Deals"><a href="#Deals">Deals</a></li>
        <li id="nav-deco"><a href="#">Déconnexion</a></li>
    </ul>

    <h1 id='Offres'>Mes Offres</h1>
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
    </div>

    <div id="fenetreUpdate" class="cssFenetre">
        <div class="contentForm">
            <div id="updateForm"></div>
        </div>
    </div>
    
</body>
</html>
