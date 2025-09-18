<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$message = "Bienvenue sur le projet Capteur de Distance !";
$date_du_jour = date("d/m/Y");

$template = file_get_contents('template_accueil.html');
if ($template === false) {
    die("Erreur : impossible de charger le template.");
}

$template = str_replace('{{message}}', $message, $template);
$template = str_replace('{{date_du_jour}}', $date_du_jour, $template);

echo $template;
?>
