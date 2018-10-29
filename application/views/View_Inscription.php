
<html>
<head>
    <script src="<?php echo base_url() ?>JS/mesFonctions.js"></script>
    <script src="<?php echo base_url() ?>JQuery/jquery-3.1.1.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url(); ?>JQuery/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Bootstrap/css/bootstrap-theme.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Bootstrap/css/bootstrap.css" />
    <script src="<?php echo base_url() ?>./Css/style.css"></script>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page de connexion - Troc De Temps</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <form method='get' action='<?php echo base_url()?>index.php/GestionLogin/inscription'>
                    <h2>Veuillez Vous Inscrire</h2>
                        <hr class="colorgraph">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type='text' placeholder="Nom" class="form-control input-lg" name='txtnom'><br>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type='text' placeholder="Prénom" class="form-control input-lg" name='txtprenom'><br>
                                    </div>
                                </div>
                            </div>
                                    <div class="form-group">
                                        <input type='text' placeholder="Login" class="form-control input-lg" name='txtlogin'><br>
                                    </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type='password' placeholder="Mot de Passe" class="form-control input-lg" name='txtmdp'><br>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type='password' placeholder="Confirmer Mot de Passe" class="form-control input-lg" name='txtmdpconfirmer'><br><br>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="row">
                                <div class="col-xs-6 col-md-6">
                                    <input type='submit' value='Inscription' name='btnInscription' class="btn btn-primary btn-block btn-lg">  
                                </div>
                                <div class="col-xs-6 col-md-6">
                                    <?php echo '<a href="'.base_url().'index.php/GestionLogin/index" class="btn btn-success btn-block btn-lg" >Se Connecter</a>'?>
                                </div>
                            </div>
            </form>
        </div>    
    </div>
</div>
</body>
</html>