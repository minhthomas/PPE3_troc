<html>
<head>
    <script src="<?php echo base_url() ?>JS/mesFonctions.js"></script>
    <script src="<?php echo base_url() ?>JQuery/jquery-3.1.1.js"></script>
   
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <script src="<?php echo base_url(); ?>JQuery/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Bootstrap/css/bootstrap-theme.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>CSS/mesStyles.css" />

    <script src="<?php echo base_url() ?>./Css/style.css"></script>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page de connexion - Troc De Temps</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>
<div class="container">

<div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        <form  method='get' action='<?php echo base_url() ?>index.php/GestionLogin/login'>
            <fieldset>
                <h2>Please Sign In</h2>
                <hr class="colorgraph">
                <!-- Input Identifiant -->
                <div class="form-group">
                    <input type="text" placeholder="Identifiant" name="loginuser" class="form-control input-lg">
                </div>
                <!-- Input Mot de Pass -->
                <div class="form-group">
                    <input type="password" placeholder="Mot De Passe" name="mdp" class="form-control input-lg">
                </div>
                <!-- Bouton connexion -->
                <hr class="colorgraph">
                <div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
                        <input type="submit" value="Connexion" name="btnConnexion" class="btn btn-lg btn-success btn-block">
					</div>

        </form>
                <!-- Bouton Inscription -->

					<div class="col-xs-6 col-sm-6 col-md-6">
                        <form  method='get' action='<?php echo base_url() ?>index.php/GestionIncription/openinscription'>
                            <input type="submit" value="Incripition" name="btnIncripition" class="btn btn-lg btn-primary btn-block">
                        </form>
					</div>
                </div>
            </fieldset>
	</div>
</div>

</div>
        

</body>
</html>