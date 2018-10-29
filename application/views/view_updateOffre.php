<h2>Modification de l'offre</h2>

<label>Numéro de l'offre : </label><input id="numOffre" type='text' value='<?php echo $_GET['idOffre']; ?>' disabled><br>

<label>Description de l'offre : </label><input id="descOffre" type='text' value='<?php echo $_GET['descOffre']; ?>'><br>

<label>Date de l'offre : </label><input id="dateOffre" type='date' value='<?php echo $_GET['dateOffre']; ?>'><br>

<label>Nom du service : </label><input id="nomService" type='text' value='<?php echo $_GET['nomServ']; ?>' disabled><br>

<input id="valider" type="button" value='Valider' onclick='updateOffre();'><br>
<input id="annuler" type="button" value='Annuler' onclick='CloseWindow();'>