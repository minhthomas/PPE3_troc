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
<?php
// if(isset($_GET['btnConnexion']))   
// {
//     foreach($LesUser as $unUser)
//     {
//         $id = $unUser->login;
//         $mdp = $unUser->mdp;
//         if($_GET['id'] == $id || $_Get['mdp'] == $mdp)
//         {
//             echo "oui";
//         }
//         else
//         {
//             echo "non";
//         }
//         // {
//         //     echo 'oui';
//         // }
//         // else
//         // {
//         //     echo 'non';
//         // }
//     }
//     // if(empty($_GET['id']))
//     // {
//     //     echo 'empty';
//     // }

// }
?>
    <div id="pagelogin">
        <form method='get' action='index.php/GestionLogin/Login'>
            <label>Identifiant</label><br/>
            <input type="text" name="loginuser"><br/>
            <label>Mot de passe</label><br/>
            <input type="password" name="mdp"><br/> 
            <input type="submit" value="Connexion" name="btnConnexion"><br/><br/>
        </form>
    </div>
</body>
</html>