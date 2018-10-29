<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bienvenue sur la page d'acceuil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="<?php echo base_url(); ?>JQuery/jquery-3.1.1.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Bootstrap/css/bootstrap-theme.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>CSS/mesStyles.css" />
    
    <script src="<?php echo base_url() ?>JS/mesFonctions.js"></script>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <h2>Ajouter une Offre </h2>
                <hr class="colorgraph">
                    <div class="row">
                            <div class="form-group">
                                <label>Votre Numéro D'offre</label><br>
                                <?php
                                foreach ($LesOffres as $unoffre)
                                {
                                    ?>
                                    <input type='text' id="txtnextidoffre" class="form-control input-lg" value="<?php echo $unoffre->idoffre?>" disabled>
                                    <?php
                                }
                                ?>
                                <br>
                            </div>
                        
                    </div>
                                
                    <div class="row">    
                            <div class="form-group">
                                <label>Description Offres</label><br>
                                <input id='txtadddescOffre' class="form-control input-lg" type='text'><br>
                            </div>
                    </div>

                    <div class="row">
                            <div class="form-group">          
                                <label>Nom du Service</label><br>
                                <select class="form-control input-lg" id='idservice'>
                                <?php
                                    foreach($lesServices as $unservice)
                                    {
                                        ?>
                                        <option class="form-control input-lg" value='<?php echo $unservice->idService;?>'> <?php echo $unservice->nomService?></option>
                                        <?php
                                    }
                                ?>
                                </select><br>
                            </div>
                    </div>

                    <hr class="colorgraph">
                    <div class="row">            
                        <div class="col-xs-6 col-md-6">               
                            <input id='btnaddoffre' type='button' class="btn btn-primary btn-block btn-lg" value='Valider' onclick='addOffre()'>
                        </div>
                        <div class="col-xs-6 col-md-6">
                            <input id="annuler" type="button" value='Annuler' class="btn btn-success btn-block btn-lg" onclick='CloseWindow();'>
                        </div>
                    </div>
                    
        </div>
    </div>
</div>

</body>
</html>