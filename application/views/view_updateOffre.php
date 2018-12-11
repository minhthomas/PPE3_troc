<h2 align="center">Modification de l'offre</h2>

<label>Numéro de l'offre : </label><input id="numOffre" type='text' value='<?php echo $_GET['idOffre']; ?>' class="form-control input-lg" disabled><br>

<label>Description de l'offre : </label><input id="descOffre" type='text' value='<?php echo $_GET['descOffre']; ?>' class="form-control input-lg"><br>

<label>Date de l'offre : </label><input id="dateOffre" type='date' value='<?php echo $_GET['dateOffre']; ?>' class="form-control input-lg"><br>

<label>Nom du service : </label><input id="nomService" type='text' value='<?php echo $_GET['nomServ']; ?>' class="form-control input-lg" disabled><br>

<input id="valider" class="btn btn-primary btn-block btn-lg" type="button" value='Valider' onclick='updateOffre();'>
<input id="annuler" class="btn btn-success btn-block btn-lg" type="button" value='Annuler' onclick='CloseWindow();'>