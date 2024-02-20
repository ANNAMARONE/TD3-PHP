<?php
$mots=array("helloworld") ;
function compteVoyelles($mots){
$voyelles=array("a","o","i","u","y","e") ;

$nbrVoyelles=0;

for($i= 0;$i<strlen($mots);$i++){
$lettre=$mots[$i];
if (in_array($lettre,$voyelles)) {
    $nbrVoyelles ++;

}

}
return $nbrVoyelles;
}

foreach($mots as $mot){
    $nbrVoyelles=compteVoyelles($mot);
}
echo"le mot contient ".$nbrVoyelles." voyelles";

?>