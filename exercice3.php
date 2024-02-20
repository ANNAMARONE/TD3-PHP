<?php 
function rotatationDroit($tab, $positions) {
    $longueur= count($tab);
    $rota = array();

    // Calculer l'indice de départ après la rotation
    $calcule = ($longueur - $positions) % $longueur;

    // Copier les éléments déplacés dans le tableau résultant
    for ($i = 0; $i < $longueur; $i++) {
        $rota[] = $tab[($calcule + $i) % $longueur];
    }

    return $rota;
}

// Exemple d'utilisation
$tableauOriginale = array(1, 2, 3, 4, 5, 6);
$positionsRotation = 2;

$rotationT = rotatationDroit($tableauOriginale, $positionsRotation);

// Afficher le tableau résultant
echo "Tableau original : " . implode(", ", $tableauOriginale) . "<br>";
echo "Tableau après rotation à droite de $positionsRotation positions : " . implode(", ", $rotationT);

?>