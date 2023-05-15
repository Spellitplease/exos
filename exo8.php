
<?php include 'index.php';?>
<h1>Selection du personnage</h1>
<form action="#" method="POST">
    <label for="perso">Personnage : </label>
    <select name="perso" id="perso" onChange = "submit()">
        <option value="p1" >Luke</option>
        <option value="p2" selected>Katy</option>
        <option value="p3" >Marc</option>
    </select> <br/>
</form>

<h2> Personnage : </h2>
<div class='gauche'><img src = 'sources/images/pl