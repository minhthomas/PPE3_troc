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
    <input type='search' id='txtRecherche' placeholder='Saisir votre demande' onkeyup='rechercherOffre()' style="color: black;">
    <form method='POST' action='<?php echo base_url(); ?>index.php/Ctrl_Acceuil/'>
        <input type="submit" class="btn btn-success btn-block btn-lg" style='width: 100px;' value='Annuler'>
    </form>

    <div class="fondDemande">
        <h1 id='Demandes'>Mes Demandes</h1>
    </div>

    <div class="cssDivDemande" id='divDemande'>
        <?php
            foreach ($lesDemandes as $uneDemande)
            {
        ?>
                <div class="" onclick=''>
                    <p class="infos_Demande">
                        <strong><?php echo $uneDemande->nomService ?></strong><br>
                        <?php echo $uneDemande->descriptionDemande ?><br>
                        <?php echo $uneDemande->dateDemande; ?>
                    </p>
                </div>
        <?php    
            }
        ?>
        <br>
    </div>

    <hr>

    <div class="fondDemande">
        <h1 id='Offres'>Mes Offres</h1>
    </div>

    <div class="cssDivOffre" id='divOffre'>
        <?php
            foreach ($lesOffres as $uneOffre)
            {
        ?>
                <div class="" onclick=''>
                    <p class="infos_Offre">
                        <strong><?php echo $uneOffre->nomService ?></strong><br>
                        <?php echo $uneOffre->descriptionOffre ?><br>
                        <?php echo $uneOffre->dateOffre; ?>
                    </p>
                </div>
        <?php    
            }
        ?>
        <br>
    </div>

    <div id="viewUser"></div>
    <div id="viewOffresEtDemandes"></div>
</body>