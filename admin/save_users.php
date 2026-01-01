<?php
session_start();
if (!isset($_SESSION['admin_logged']) || $_SESSION['admin_logged'] !== true) {
    header('Location: login.php');
    exit;
}

$usersFile = __DIR__ . '/../data/admin_users.json';
$users = [];
if (file_exists($usersFile)) {
    $raw = file_get_contents($usersFile);
    $json = json_decode($raw, true);
    if (is_array($json)) $users = $json;
}

$action = $_POST['action'] ?? '';
if ($action === 'add') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';
    if ($username && $password) {
        // prevent duplicate
        foreach ($users as $u) if ($u['username'] === $username) { header('Location: dashboard.php'); exit; }
        $users[] = ['username' => $username, 'password' => $password];
        file_put_contents($usersFile, json_encode($users, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES));
    }
}
if ($action === 'delete') {
    $username = $_POST['username'] ?? '';
    if ($username) {
        $new = [];
        foreach ($users as $u) {
            if ($u['username'] !== $username) $new[] = $u;
        }
        // ensure at least one user remains
        if (count($new) === 0) {
            // do not delete last user
            header('Location: dashboard.php'); exit;
        }
        file_put_contents($usersFile, json_encode($new, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES));
    }
}

header('Location: dashboard.php');
exit;
