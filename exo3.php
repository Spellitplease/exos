<?php include 'index.php';?>
<h1>Cercle  - Périmètre et Aire</h1>
<div class="exo">
<form class="exo3" action = "#" method= "get">
    <label for ="rayon">Rayon: </label> 
    <input type="number" name="rayon" id="rayon" value="0">
    <div class="check">
        <div class="list">
    <label for ="perimetre">Périmètre</label>
    <input type="checkbox" name="perimetre" id="perimetre" value="perimetre">
        </div>
        <div class="list">
    <label for ="aire">Aire</label>
    <input type="checkbox" name="aire" id="aire" value="aire">
         </div>
    </div>
    <input type="submit" value="Envoyer">
</form>
<p> Saisir une valeur dans le champs ci-dessus</p>
</div>