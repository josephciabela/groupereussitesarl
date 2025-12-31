<?php


//Démarrage de la session
session_start();



//include('config/config.php');

// Ce fichier va rassembler l'ensemble des fonctionnalités de notre site web

//$GLOBALS['connexion']->exec("SET NAMES 'utf8'");

function inserer_contact($nom, $prenom, $email, $tel, $message)
{

    //ETAPE1 Placez le bloc try-catch
    try {
        // If no DB connection configured, skip insertion gracefully
        if (empty($GLOBALS['connexion'])) {
            return false;
        }
        //ETAPE2 Récuperation de la connexion
        $connexion = $GLOBALS['connexion'];

        //ETAPE3 Création de la requette à éxécuter
        $sql = "INSERT INTO contact (nom, prenom, email, tel, message)
        VALUES (?,?,?,?,?)"; //marker quand cela demande des informations supplementaire

        //ETAPE4 : Préparation de la requete sql
        $sql = $connexion->prepare($sql);

        //ETAPE5 : Execution de la requette
        $sql->execute([$nom, $prenom, $email, $tel, $message]);

        //ETAPE6 : Retourner le résultat attendu
        return true;
    } catch (Exception $exception) {
        echo $exception;
        return false;
    }
}

//deuxieme FUNCTION
function verification_user($email, $password)
{
    try {

        $connexion = $GLOBALS['connexion'];
        $sql = "SELECT * FROM admin WHERE email = ? AND password = ?";
        $sql = $connexion->prepare($sql);
        $sql->execute([$email, $password]);

        // Nous recuperons toute la ligne de notre requette dans la variable user
        $user = $sql->fetch(); //recuperer

        if ($user) {

            // Nous stockons toutes la ligne de notre requette dans la variable user
            $_SESSION['admin_id'] =  $user['admin_id'];
            $_SESSION['email'] = $user['email'];

            return true;
        }
    } catch (Exception $exception) {
        echo $exception;
        return false;
    }
}


//troisieme FUNCTION
function verification_session()
{

    if (!isset($_SESSION['admin_id']) && !isset($_SESSION['email'])) //si les sessions en questions n'existent pas
    {
        header('Location: login.php');
    }
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Use Composer autoload to load PHPMailer and other dependencies
require_once __DIR__ . '/vendor/autoload.php';

function envoyer_mail_contact($nom, $tel, $email, $message)
{
    $mail = new PHPMailer(true);
    try {
        // Use config values if available
        $cfg = $GLOBALS['smtp_config'] ?? [];
        // If SMTP credentials provided, use SMTP. Otherwise fallback to PHP mail() transport.
        if (!empty($cfg['username'])) {
            $mail->isSMTP();
        } else {
            $mail->isMail();
        }
        $mail->Host       = $cfg['host'] ?? 'localhost';
        $mail->SMTPAuth   = isset($cfg['username']) && $cfg['username'] !== '';
        if (!empty($cfg['username'])) {
            $mail->Username = $cfg['username'];
        }
        if (!empty($cfg['password'])) {
            $mail->Password = $cfg['password'];
        }
        $secure = strtolower($cfg['secure'] ?? '');
        if ($secure === 'ssl') {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        } elseif ($secure === 'tls') {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        }
        $mail->Port       = $cfg['port'] ?? 587;

        // From must be a valid sender on your domain
        $from_email = $cfg['from_email'] ?? ($GLOBALS['site_email'] ?? 'no-reply@example.com');
        $from_name = $cfg['from_name'] ?? 'Website';
        // If SMTP authentication is used and username is an email, prefer it as the From to avoid SPF issues
        if (!empty($cfg['username']) && filter_var($cfg['username'], FILTER_VALIDATE_EMAIL)) {
            $mail->setFrom($cfg['username'], $from_name);
        } else {
            $mail->setFrom($from_email, $from_name);
        }
        $mail->addAddress($GLOBALS['site_email'] ?? 'destinataire@exemple.com');

        // Add reply-to so recipient can reply to the sender
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $mail->addReplyTo($email, $nom);
        }

        $mail->isHTML(true);
        $mail->Subject = 'Nouveau message de contact';
        // sanitize user content
        $safe_nom = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
        $safe_tel = htmlspecialchars($tel, ENT_QUOTES, 'UTF-8');
        $safe_email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
        $safe_message = nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8'));

        $mail->Body    = "<p>Nom: {$safe_nom}<br>Téléphone: {$safe_tel}<br>Email: {$safe_email}<br>Message:<br>{$safe_message}</p>";

        // Disable verbose debug in production; set to 2 only for local debug
        $mail->SMTPDebug = 0;
        $mail->Debugoutput = 'html';

        $mail->send();
        return true;
    } catch (Exception $e) {
        error_log('Erreur SMTP : ' . $mail->ErrorInfo);
        return false;
    }
}
