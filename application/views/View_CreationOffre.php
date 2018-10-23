<!-- <p>Numéro de l'offre</p><br> -->

<!-- <p>Description de l'offre</p>
<br>
<input type="text" id="">
<br>
<p>Date de l'offre</p>
<br>
<input type="text" id="">
<br>
<p>Nom du service</p>
<br>
<select>
    <option></option>
</select>
<br>
<input type="submit" value="Valider">
<br>
<input type="submit" value="Home">
-->

<p>Numéro de l'offre</p><br>
<?php
foreach ($Lesoffres as $unoffre)
{
    ?>
    <input type='text' id="<?php echo $unoffre->idoffre ?>" value="<?php echo $unoffre->idoffre ?>">
    <?php
    
}

?>
<br>
<p>Description de l'offre</p>
<input type="text" id="txtdesoffre">
<br>
<p>Date de l'offre</p>
<br>
<input type="date" id="txtdateoffre" >
<br>
<p>Nom du service</p>
<br>
<select>
    <option></option>
</select>


