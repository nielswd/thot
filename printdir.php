<?php
print_r("toto");
$fichier = file("e3c23645298cfcb355466bbf58012fea.txt"); // Nom du fichier à afficher
 
$total = count($fichier); // Nombre total des lignes du fichier

for($i = 0; $i < $total; $i++) 
{ // Départ de la boucle

print_r($fichier[$i]); // On affiche ligne par ligne le contenu du fichier

} // Fin de la boucle

?>
