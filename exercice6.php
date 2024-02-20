<?php
 $tab1=array(5,8,40,6,27);
 
 function elementsansdoublon($tableau) {
$tableauUnique=array_unique($tableau);
return $tableauUnique;
 }
$tableauExemple=array("10","2","3","11","4","3","4","5") ;
$résultats=elementsansdoublon($tableauExemple);
print_r($résultats);
?>