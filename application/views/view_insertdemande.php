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
                <h2>Ajouter une Demande </h2>
                <hr class="colorgraph">
                    <div class="row">
                        <div class="form-group">
                            <label >Id demande</label>
                            <br>
                            <?php
                            foreach ($LesDemandes as $undemande)
                            {
                                ?>
                                <input type='text' id="txtnextdemande" value="<?php echo $undemande->iddemande?>" class="form-control input-lg" disabled>
                                <?php
                            }
                            ?>
                            <br>
                        </div>
                    </div>
                    <div class="row">    
                            <div class="form-group">
                            <label>Description Demande</label><br>
                            <input id='txtadddescDemande' type='text' class="form-control input-lg"><br>
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
                            </select>
                            <br>
                        </div>
                    </div>

                    
                    <hr class="colorgraph">
                    <div class="row"> 
                        <div class="col-xs-6 col-md-6">   
                            <input id='btnaddoffre' class="btn btn-primary btn-block btn-lg" type='button' value='Valider' onclick='addDemande()'>
                        </div>
                        <div class="col-xs-6 col-md-6">
                            <form method='POST' action='<?php echo base_url(); ?>index.php/Ctrl_Acceuil/'>
                                <input type="submit" class="btn btn-success btn-block btn-lg" value='Annuler'>
                            </form>
                        </div>
                    </div>
        </div>
    </div>
</div>

</body>
</html>