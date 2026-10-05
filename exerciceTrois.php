<?php

$chaine = "Hello  world  how are you  fine  thank you!";

$chaine = trim($chaine);

echo "<B>Chaine initiale :<BR></B>" . $chaine;

$chaine = ucwords($chaine);

$tabChaine = explode(" ",$chaine);

$tabChaine[count($tabChaine)-1] = strtoupper($tabChaine[count($tabChaine)-1]);

$taille = substr_count($chaine, ' ') + 1;

$chaine = implode(" ", $tabChaine);

echo "<BR><B>Chaine finale :<BR></B>" . $chaine;
echo "<BR>Il y a " . $taille . " mots dans la chaine.";