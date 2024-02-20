<?php 
$tab=array(12,40,20,100,80);

$produit=1;

for($i=1;$i<count($tab);$i++){
   
    $produit*=$tab[$i]; 
}
echo "le produit des élément du tables est ".$produit;
?>