<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../config/config.php';

/** @var PDO $connexion */

$projectId = $_GET['id'] ?? null;

if (!$projectId) {
    header('Location: add-project.php?error=invalid');
    exit;
}

// Vérifier que le projet existe
$stmt = $connexion->prepare("SELECT * FROM projects WHERE id = ?");
$stmt->execute([$projectId]);
$project = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$project) {
    header('Location: add-project.php?error=not_found');
    exit;
}

// Supprimer les images associées du serveur
$imgStmt = $connexion->prepare("SELECT image_path FROM project_images WHERE project_id = ?");
$imgStmt->execute([$projectId]);
$images = $imgStmt->fetchAll(PDO::FETCH_ASSOC);

$targetDir = __DIR__ . '/../assets/img/uploads/projects/';

// Supprimer l'image de couverture
$coverImagePath = $targetDir . $project['cover_image'];
if (file_exists($coverImagePath)) {
    unlink($coverImagePath);
}

// Supprimer les images supplémentaires
foreach ($images as $img) {
    $imagePath = $targetDir . $img['image_path'];
    if (file_exists($imagePath)) {
        unlink($imagePath);
    }
}

// Supprimer les enregistrements d'images de la base de données
$deleteImgStmt = $connexion->prepare("DELETE FROM project_images WHERE project_id = ?");
$deleteImgStmt->execute([$projectId]);

// Supprimer le projet de la base de données
$deleteStmt = $connexion->prepare("DELETE FROM projects WHERE id = ?");
$deleteStmt->execute([$projectId]);

// Rediriger vers add-project.php avec message de succès
header('Location: add-project.php?success=deleted');
exit;
?>
