<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="JS/mesFonctions.js"></script>
    <script src="JQuery/jquery-3.1.1.js"></script> 
</head>
<body>

    <div id="pagelogin">
        <form  method='get' action='<?php echo base_url() ?>index.php/GestionLogin/login'>
            <label>Identifiant</label><br/>
            <input type="text" name="loginuser"><br/>
            <label>Mot de passe</label><br/>
            <input type="password" name="mdp"><br/> 
            <input type="submit" value="Connexion" name="btnConnexion"><br/><br/>
        </form>
        

        <form  method='get' action='<?php echo base_url() ?>index.php/GestionIncription/openinscription'>
            <input type="submit" value="Incripition" name="btnIncripition"><br/><br/>
        </form>

    </div>
</body>
</html>