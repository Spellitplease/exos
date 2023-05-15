<?php include 'index.php';?>
<h1> Affichage d'une pyramide</h1>
<div class="exo">
<form action = "" method= "post">
    <label for ="hauteur">Hauteur de la pyramide : </label> 
    <input type="number" name="hauteur" id="hauteur" min="1" max="50" value="0">
    <input type="submit" value="Envoyer">
</form>
<p> Saisir une valeur dans le champs ci-dessus</p>
</div>

<div class="bloc"></div>

<?php
   if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['hauteur'])) {
    // Vérifier si la méthode de la requête est POST et si le champ 'hauteur' est présent dans les données envoyées

    $hauteur = $_POST['hauteur'];
    // Récupérer la valeur du champ 'hauteur' depuis la superglobale $_POST

    echo '<div class="pyramide">';
    // Commencer la div qui contiendra la pyramide

    for ($i = 1; $i <= $hauteur; $i++) {
        // Boucle pour générer chaque ligne de la pyramide

        for ($j = 1; $j <= $i; $j++) {
            // Boucle pour générer les blocs noirs dans chaque ligne

            echo 'x';
            // Afficher un bloc noir
        }

        echo '<br>';
        // Aller à la ligne après chaque ligne de blocs
    }

    echo '</div>';
    // Fermer la div de la pyramide
}

    ?>