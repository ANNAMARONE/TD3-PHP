<?php
 $tab1=array(5,8,40,6,27);
 $tab2=array(8,7,3,24,6);
 $elementsCommuns = array_intersect($tab1, $tab2);

 // Afficher les éléments communs
 echo "Les éléments communs sont : ";
 foreach ($elementsCommuns as $element) {
     echo $element . " ";
 }
?>