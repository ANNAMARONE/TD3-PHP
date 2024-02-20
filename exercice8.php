<?php
$tableau=array(14,12,17,20,13,9,15,10);
function CalculeMediane($tableau){

    $taille=count($tableau);
  if ($taille===0){
    return 0;
  }
if($taille%2=== 1){
   $milieu=floor($taille/2);
  return $tableau[$milieu];
}
else{
    $milieu1=$taille/2-1;
    $milieu2=$taille/2;
    return $tableau[$milieu1]-$tableau[$milieu2]/2;

}
}
echo "la médiane du tableau est ".CalculeMediane($tableau);
?>