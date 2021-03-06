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
    <script>
        $(function() {
            $(".cssDemandeDeals2").on("click", function() {
                $(".cssDemandeDeals2").css("background-color", "white");
                $(this).css("background-color", "grey");
            });

            $(".cssOffreDeals2").on("click", function() {
                $(".cssOffreDeals2").css("background-color", "white");
                $(this).css("background-color", "grey");
            });
        });
    </script>
</head>
<body>
    <div class="fondDemande">
        <h1 id='Offres'>Ses Offres</h1>
    </div>

    <div class="cssDivOffre" id='divOffre'>
        <?php
            foreach ($lesOffresUser as $uneOffreUser)
            {
        ?>
                <div class="cssOffreDeals2" onclick='setidOffreSelectedUser(<?php echo $uneOffreUser->idOffre ?>, <?php echo $uneOffreUser->idService ?>)'>
                    <p class="">
                        <strong><?php echo $uneOffreUser->nomService ?></strong><br>
                        <?php echo $uneOffreUser->descriptionOffre ?><br>
                        <?php echo $uneOffreUser->dateOffre; ?>
                    </p>
                </div>
        <?php    
            }
        ?>
        <br>
    </div>

    <div class="fondDemande">
        <h1 id='Demandes'>Ses Demandes</h1>
    </div>

    <div class="cssDivDemande" id='divDemande'>
        <?php
            foreach ($lesDemandesUser as $uneDemandeUser)
            {
        ?>
                <div class="cssDemandeDeals2" onclick='setidDemandeSelectedUser(<?php echo $uneDemandeUser->idDemande ?>, <?php echo $uneDemandeUser->idService ?>)'>
                    <p class="">
                        <strong><?php echo $uneDemandeUser->nomService ?></strong><br>
                        <?php echo $uneDemandeUser->descriptionDemande ?><br>
                        <?php echo $uneDemandeUser->dateDemande; ?>
                    </p>
                </div>
        <?php    
            }
        ?>
        <br>
    </div>

    <input type='button' value='Valider le deal' onclick='CreateDeal()' style="color: black;">
</body>