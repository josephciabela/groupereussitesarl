<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once(__DIR__ . '/../config/config.php');
require_once(__DIR__ . '/../functions.php');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Content-Type: text/plain; charset=utf-8');
    echo 'Méthode non autorisée';
    exit;
}

 $nom     = trim($_POST['nom'] ?? '');
 $tel     = trim($_POST['tel'] ?? '');
 $email   = trim($_POST['email'] ?? '');
 $message = trim($_POST['message'] ?? '');

if (!$nom || !$email || !$message) {
    header('Content-Type: text/plain; charset=utf-8');
    echo 'Champs obligatoires manquants';
    exit;
}

// Email validation
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Content-Type: text/plain; charset=utf-8');
    echo 'Adresse e-mail invalide';
    exit;
}

// Envoi email (pas d'enregistrement en base)
$mail = envoyer_mail_contact($nom, $tel, $email, $message);

header('Content-Type: text/plain; charset=utf-8');
if ($mail) {
    // `validate.js` attend la chaîne exacte "OK"
    echo 'OK';
    exit;
} else {
    echo 'Erreur lors de l\'envoi';
    exit;
}
