<?php
$tableau=array("bonjour","tous","le","monde");
$resultas="";
foreach($tableau as $value) {
    $resultas .=$value;
}
$resultas=trim($resultas);
echo "voici le nouveau tableau:".$resultas;
?>