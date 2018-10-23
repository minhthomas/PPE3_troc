<h2>Modification de la demande</h2>

<label>Numéro de la demande : </label><input id="numDemande" type='text' value='<?php echo $_GET['idDemande']; ?>' disabled><br>

<label>Description de la demande : </label><input id="descDemande" type='text' value='<?php echo $_GET['descDemande']; ?>'><br>

<label>Date de la demande : </label><input id="dateDemande" type='date' value='<?php echo $_GET['dateDemande']; ?>'><br>

<label>Nom du service : </label><input id="nomService" type='text' value='<?php echo $_GET['nomServ']; ?>' disabled><br>

<input id="valider" type="button" value='Valider' onclick='updateDemande();'><br>
<input id="annuler" type="button" value='Annuler' onclick='CloseWindow();'>