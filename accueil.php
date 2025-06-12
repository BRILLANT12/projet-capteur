<?php
// Variables dynamiques
$message = "Bienvenue sur le projet Capteur de Distance !";
$date_du_jour = date("d/m/Y");

// Charger le template HTML
$template = file_get_contents('template_accueil.html');

// Remplacer les marqueurs par les vraies valeurs
$template = str_replace('{{message}}', $message, $template);
$template = str_replace('{{date_du_jour}}', $date_du_jour, $template);

// Afficher le résultat final
echo $template;
?>
