
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

    <form method='get' action='<?php echo base_url()?>index.php/GestionIncription/inscription'>
        <label>Nom et Prénom</label><br>
        <input type='text' name='txtnom'><br>
        <label>Login</label><br>
        <input type='text' name='txtlogin'><br>
        <label>Mot de Passe</label><br>
        <input type='text' name='txtmdp'><br>
        <input type='submit' value='Inscription' name='btnInscription'>

        <?php
    

    ?>
    </form>






</body>
</html>