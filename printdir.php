<?php
$fichier = file('82cdb247144509ccf3946e4aaad15614.txt');

$total = count($fichier); // Nombre total des lignes du fichier

for($i = 0; $i < $total; $i++) 
{ // Départ de la boucle

echo $fichier[$i]; // On affiche ligne par ligne le contenu du fichier

} // Fin de la boucle

?>
