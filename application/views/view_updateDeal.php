<?php 
    $this->load->library('session');
    $nameOfConnectUser = $_SESSION['allInfosUser']['nomUser'];

    if ($nameOfConnectUser == $nomUser1[0]->nomUser) {
        // User1 est connectée
        echo "<img src='".$nomUser2[0]->photoUser."' class='photoOfUser'>";

        echo "<h2 align='center'>Modification du deal</h2><label>Numéro du deal : </label><input type='text' id='txtIdDeal' value='".$_GET['idDeal']."' class='form-control input-lg' disabled><br>";

        echo "<label>Votre service : </label>
        <input type='text' value='".$nomServiceUser1[0]->nomService."' class='form-control input-lg' disabled><br>

        <label>Service de : ".$nomUser2[0]->nomUser."</label>
        <input type='text' value='".$nomServiceUser2[0]->nomService."' class='form-control input-lg' disabled><br>

        <label>Votre note : </label>
        <input type='text' id='txtNoteUser1' value='".$lesInfosDeal[0]->noteUser1."' class='form-control input-lg'><br>
    
        <label>La note de : ".$nomUser2[0]->nomUser."</label>
        <input type='text' id='txtNoteUser2' value='".$lesInfosDeal[0]->noteUser2."' class='form-control input-lg' disabled><br>";
    }
    else {
        // User2 est connectée
        echo "<img src='".$nomUser1[0]->photoUser."' class='photoOfUser'>";

        echo "<h2 align='center'>Modification du deal</h2><label>Numéro du deal : </label><input type='text' id='txtIdDeal' value='".$_GET['idDeal']."' class='form-control input-lg' disabled><br>";

        echo "<label>Votre service : </label>
        <input type='text' value='".$nomServiceUser2[0]->nomService."' class='form-control input-lg' disabled><br>

        <label>Service de : ".$nomUser1[0]->nomUser."</label>
        <input type='text' value='".$nomServiceUser1[0]->nomService."' class='form-control input-lg' disabled><br>

        <label>Votre note : ".$nomUser1[0]->nomUser."</label>
        <input type='text' id='txtNoteUser1' value='".$lesInfosDeal[0]->noteUser1."' class='form-control input-lg'><br>

        <label>La note de : </label>
        <input type='text' id='txtNoteUser2' value='".$lesInfosDeal[0]->noteUser2."' class='form-control input-lg' disabled><br>";
    }
?>

<input id="valider" class="btn btn-primary btn-block btn-lg" type="button" value='Valider' onclick='updateDeal();'>
<input id="annuler" class="btn btn-success btn-block btn-lg" type="button" value='Annuler' onclick='CloseWindow();'>