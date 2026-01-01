<?php
// Test SMTP using the centralized config (reads env vars when available)
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config/config.php';

use PHPMailer\PHPMailer\PHPMailer;

$mail = new PHPMailer(true);
try {
    $cfg = $smtp_config ?? [];
    if (!empty($cfg['username'])) {
        $mail->isSMTP();
        $mail->Host = $cfg['host'] ?? 'smtp.lws.fr';
        $mail->SMTPAuth = true;
        $mail->Username = $cfg['username'];
        if (!empty($cfg['password'])) {
            $mail->Password = $cfg['password'];
        }
        $secure = strtolower($cfg['secure'] ?? '');
        if ($secure === 'ssl') {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        } elseif ($secure === 'tls') {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        }
        $mail->Port = $cfg['port'] ?? 587;
    } else {
        // No SMTP credentials: fallback to PHP mail() transport (local)
        $mail->isMail();
    }
    // Ensure From is valid for the transport
    $mail->addAddress($site_email ?? 'info@groupereussitesarl.com');
    $mail->setFrom($cfg['from_email'] ?? ($site_email ?? 'no-reply@example.com'), $cfg['from_name'] ?? 'Groupe Reussite SARL');

    $mail->isHTML(true);
    $mail->Subject = 'Test SMTP';
    $mail->Body = 'SMTP fonctionne correctement';

    $mail->SMTPDebug = $cfg['debug'] ?? 0;

    $mail->send();
    echo 'OK SMTP';
} catch (Exception $e) {
    error_log('SMTP test error: ' . $mail->ErrorInfo);
    echo 'Erreur SMTP (voir logs)';
}
