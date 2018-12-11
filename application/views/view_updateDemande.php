<h2 align="center">Modification de la demande</h2>

<label>Numéro de la demande : </label><input id="numDemande" type='text' value='<?php echo $_GET['idDemande']; ?>' class="form-control input-lg" disabled><br>

<label>Description de la demande : </label><input id="descDemande" type='text' value='<?php echo $_GET['descDemande']; ?>' class="form-control input-lg"><br>

<label>Date de la demande : </label><input id="dateDemande" type='date' value='<?php echo $_GET['dateDemande']; ?>' class="form-control input-lg"><br>

<label>Nom du service : </label><input id="nomService" type='text' value='<?php echo $_GET['nomServ']; ?>' class="form-control input-lg" disabled><br>

<input id="valider" class="btn btn-primary btn-block btn-lg" type="button" value='Valider' onclick='updateDemande();'>
<input id="annuler" class="btn btn-success btn-block btn-lg" type="button" value='Annuler' onclick='CloseWindow();'>