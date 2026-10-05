<?php

$TAB = ['t1' => "Atelier N°2", 't2' => "Bonjour tout le monde", 't3' => "Vous"];

$JSON = json_encode($TAB, JSON_UNESCAPED_UNICODE);
echo "Chaine JSON : " . $JSON . "\n";

if (strpos($JSON, "Bonjour") !== false){
    echo "Le mot Bonjour est dans la chaine";
}
else{
    echo "Le mot Bonjour n'est pas dans la chaine\n";
}