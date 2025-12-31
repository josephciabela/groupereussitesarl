<?php
// Database configuration (use environment variables in production)
// By default DB is disabled locally. Set USE_DB=1 in env to enable.
$use_db = getenv('USE_DB') ?: '0';
$db_host = getenv('DB_HOST') ?: 'localhost';
$db_name = getenv('DB_NAME') ?: '';
$db_user = getenv('DB_USER') ?: 'root';
$db_pass = getenv('DB_PASS') ?: '';

$connexion = null;
if ((string)$use_db === '1' && $db_name !== '') {
    try {
        $dsn = "mysql:host={$db_host};dbname={$db_name};charset=utf8mb4";
        $connexion = new PDO($dsn, $db_user, $db_pass);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        // Don't kill the script in non-critical environments; log and continue
        error_log('Erreur PDO : ' . $e->getMessage());
        $connexion = null;
    }
}

// Site email and SMTP configuration (read from environment variables when available)
$site_email = getenv('SITE_EMAIL') ?: 'info@groupereussitesarl.com';

$smtp_config = [
    'host' => getenv('SMTP_HOST') ?: 'smtp.lws.fr',
    'username' => getenv('SMTP_USER') ?: getenv('SMTP_USERNAME') ?: '',
    'password' => getenv('SMTP_PASS') ?: getenv('SMTP_PASSWORD') ?: '',
    'port' => getenv('SMTP_PORT') ? (int)getenv('SMTP_PORT') : 587,
    // 'secure' => 'tls' or 'ssl' or ''
    'secure' => getenv('SMTP_SECURE') ?: 'tls',
    'from_email' => getenv('SMTP_FROM') ?: 'no-reply@groupereussitesarl.com',
    'from_name' => getenv('SMTP_FROM_NAME') ?: 'Groupe Reussite SARL',
    // debug: 0 en prod, 2 for debug local
    'debug' => getenv('SMTP_DEBUG') !== false ? (int)getenv('SMTP_DEBUG') : 0,
];