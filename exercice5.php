<?php
function compterVoyelles($mot) {
    $voyelles = array("a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y");
    $nbVoyelles = 1;

    // Parcours chaque lettre du mot
    for ($i = 0; $i < strlen($mot); $i++) {
        $lettre = $mot[$i];
        if (in_array($lettre, $voyelles)) {
            $nbVoyelles++;
        }
    }

    return $nbVoyelles;
}

// Parcours chaque mot du tableau
foreach ($mots as $mot) {
    $nbVoyelles = compterVoyelles($mot);
    echo "Le mot \"$mot\" contient $nbVoyelles voyelle(s).\n";
}
?>