<?php include 'index.php';?>
<h1> Affichage des tables de multiplications</h1>
<div class="exo">
<form action ="" method= "post">
    <label for ="nombre">Table de multiplication: </label> 
    <input type="number" name="nombre" id="nombre"  min="1" max="10" value="0">
    <input type="submit" value="Envoyer">
</form>
<p> Saisir une valeur dans le champs ci-dessus</p>
</div>

<?php
    if (isset($_POST['nombre'])) {
        // Vérifier si la variable 'nombre' a été soumise via le formulaire
    
        $nombre = $_POST['nombre'];
        // Récupérer la valeur du champ 'nombre' depuis la superglobale $_POST
    
        echo "<h3>Table de multiplication pour le nombre $nombre :</h3>";
        // Afficher le titre de la table de multiplication pour le nombre sélectionné
    
        echo "<table>";
        // Commencer la balise de table HTML
    
        for ($i = 1; $i <= 10; $i++) {
            // Boucle pour générer les lignes de la table de multiplication
    
            $resultat = $nombre * $i;
            // Calculer le résultat de la multiplication
    
            echo "<tr>";
            // Commencer une nouvelle ligne de la table
    
            echo "<td>$nombre x $i</td>";
            // Afficher la multiplication sous forme de texte
    
            echo "<td>=</td>";
            // Afficher le signe égal
    
            echo "<td>$resultat</td>";
            // Afficher le résultat de la multiplication
    
            echo "</tr>";
            // Fermer la ligne de la table
        }
    
        echo "</table>";
        // Fermer la balise de table HTML
    }
    
 ?>









