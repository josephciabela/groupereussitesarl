<?php
session_start();
if (!isset($_SESSION['admin_logged']) || $_SESSION['admin_logged'] !== true) {
    header('Location: login.php');
    exit;
}

$configPath = __DIR__ . '/../data/video_modal.json';
$uploadsDir = __DIR__ . '/../assets/uploads';
if (!is_dir($uploadsDir)) mkdir($uploadsDir, 0755, true);

$type = $_POST['type'] ?? 'video';
$title = trim($_POST['title'] ?? '');
$description = trim($_POST['description'] ?? '');
$src = '';

if (!empty($_FILES['media']) && $_FILES['media']['error'] === UPLOAD_ERR_OK) {
    $tmp = $_FILES['media']['tmp_name'];
    $name = basename($_FILES['media']['name']);
    $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
    $allowed = ['mp4','jpg','jpeg','png','webp'];
    if (!in_array($ext, $allowed)) {
        die('Type de fichier non autorisé');
    }
    $destName = 'modal_media.' . $ext;
    $dest = $uploadsDir . '/' . $destName;
    if (move_uploaded_file($tmp, $dest)) {
        $src = 'assets/uploads/' . $destName;
        $type = in_array($ext, ['mp4']) ? 'video' : 'image';
    }
}

$data = ['type' => $type, 'title' => $title, 'description' => $description];
if ($src) $data['src'] = $src;

file_put_contents($configPath, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
header('Location: dashboard.php');
exit;
