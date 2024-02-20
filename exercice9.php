<?php 
$texte=(" ANNA marone ");
$frequence=count_chars($texte,1);
echo "Fréquence de chaque caractère :\n";
foreach($frequence as $caractére=>$occurrence) {
    echo"le caractére $caractére  apparaît $occurrence fois"; 
}

?>