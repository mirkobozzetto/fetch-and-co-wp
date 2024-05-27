<?php
get_header();
// pour acceder aux fonctions de wordpress

$liste = array(
    "prenom" => "Jean",
    "nom"    => "Dupont",
);
echo json_encode($liste);
