<?php
$tab=array(5,8,40,6,27,9,4,2,10,5,8,40,23);


$doublon=array();
$array_count= count($tab);
for($i= 0;$i<$array_count;$i++){
    $doublon[$tab[$i] ]= $tab[$i];
}  
echo" tableau sans doublons <pre>" ;
print_r($doublon);


?>