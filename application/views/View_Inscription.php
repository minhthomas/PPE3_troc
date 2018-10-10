
<html>
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <form method='get' action='<?php echo base_url()?>index.php/GestionIncription/inscription'>
        <label>Nom</label><br>
        <input type='text' name='txtnom'><br>
        <label>Prénom</label><br>
        <input type='text' name='txtprenom'><br>
        <label>Login</label><br>
        <input type='text' name='txtlogin'><br>
        <label>Mot de Passe</label><br>
        <input type='password' name='txtmdp'><br>
        <label>Confirmer Mot de Passe</label><br>
        <input type='password' name='txtmdpconfirmer'><br><br>
        <input type='submit' value='Inscription' name='btnInscription'>
    </form>






</body>
</html>