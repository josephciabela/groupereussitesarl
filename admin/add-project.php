<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../config/config.php';
$targetDir = __DIR__ . '/../assets/img/uploads/projects/';

/** @var PDO $connexion */

// Message pour succès ou erreur
$message = '';
$messageType = '';

// Traitement du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $category = $_POST['category'] ?? '';
    $status = $_POST['status'] ?? '';
    $title = $_POST['title'] ?? '';
    $description = $_POST['description'] ?? '';
    $location = $_POST['location'] ?? '';

    if (isset($_FILES['cover_image']) && $_FILES['cover_image']['error'] === 0) {
        $coverTmp = $_FILES['cover_image']['tmp_name'];
        $coverName = uniqid() . '-' . basename($_FILES['cover_image']['name']);
        $coverPath = $targetDir . $coverName;

        if (move_uploaded_file($coverTmp, $coverPath)) {
            $stmt = $connexion->prepare("INSERT INTO projects (category, status, title, description, location, cover_image, created_at) VALUES (?, ?, ?, ?, ?, ?, NOW())");
            $stmt->execute([$category, $status, $title, $description, $location, $coverName]);
            $projectId = $connexion->lastInsertId();

            // IMAGES SUPPLÉMENTAIRES
            if (isset($_FILES['images'])) {
                foreach ($_FILES['images']['tmp_name'] as $index => $tmpName) {
                    if (!empty($tmpName) && $_FILES['images']['error'][$index] === 0) {
                        $imageName = uniqid() . '-' . basename($_FILES['images']['name'][$index]);
                        $imagePath = $targetDir . $imageName;

                        if (move_uploaded_file($tmpName, $imagePath)) {
                            $stmtImg = $connexion->prepare(
                                "INSERT INTO projects_images (project_id, image_path) VALUES (?, ?)"
                            );
                            $stmtImg->execute([$projectId, $imageName]);
                        }
                    }
                }
            }

            $message = "Projet ajouté avec succès !";
            $messageType = "success";
        } else {
            $message = "Erreur : le dossier n'est pas accessible en écriture.";
            $messageType = "error";
        }
    } else {
        $message = "Veuillez choisir une image principale.";
        $messageType = "error";
    }
}

// Récupération des projets pour affichage
$stmt = $connexion->prepare("SELECT * FROM projects ORDER BY created_at DESC");
$stmt->execute();
$projects = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Gestion des messages de succès/erreur depuis URL
$urlMessage = '';
$urlMessageType = '';
if (isset($_GET['success']) && $_GET['success'] === 'deleted') {
    $urlMessage = 'Projet supprimé avec succès !';
    $urlMessageType = 'success';
} elseif (isset($_GET['error']) && $_GET['error'] === 'not_found') {
    $urlMessage = 'Projet introuvable.';
    $urlMessageType = 'error';
} elseif (isset($_GET['error']) && $_GET['error'] === 'invalid') {
    $urlMessage = 'ID du projet invalide.';
    $urlMessageType = 'error';
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Projet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/main.css">
</head>

<body style="background: #f5f5f5;">

<div class="add-project-wrapper">
    <!-- MESSAGE GLOBAL (succès/erreur) -->
    <?php if ($message || $urlMessage): ?>
        <div style="grid-column: 1 / -1;">
            <div class="add-project-message <?= $messageType ?: $urlMessageType ?>">
                <?= htmlspecialchars($message ?: $urlMessage) ?>
            </div>
        </div>
    <?php endif; ?>

    <!-- FORMULAIRE D'AJOUT -->
    <div class="add-project-card">
        <h3>Ajouter un projet</h3>

        <?php if ($message): ?>
            <div class="add-project-message <?= $messageType ?>">
                <?= htmlspecialchars($message) ?>
            </div>
        <?php endif; ?>

        <form action="" method="POST" enctype="multipart/form-data">
            <input type="text" id="category" name="category" placeholder="Ex: Rénovation, Construction..." required>

            <label for="status">Statut *</label>
            <select id="status" name="status" required>
                <option value="">-- Choisir un statut --</option>
                <option value="en_cours">En cours</option>
                <option value="acheve">Achevé</option>
            </select>

            <label for="title">Titre du projet *</label>
            <input type="text" id="title" name="title" placeholder="Titre du projet" required>

            <label for="description">Description *</label>
            <textarea id="description" name="description" placeholder="Description détaillée du projet" required rows="5"></textarea>

            <label for="location">Localisation</label>
            <input type="text" id="location" name="location" placeholder="Lieu du projet">

            <label for="cover_image">Image principale *</label>
            <input type="file" id="cover_image" name="cover_image" accept="image/*" required>

            <label for="images">Images supplémentaires (max 7)</label>
            <div id="images-container">
                <input type="file" name="images[]" accept="image/*">
            </div>
            <button type="button" onclick="addImageField()">+ Ajouter une image</button>

            <button type="submit">Ajouter le projet</button>
        </form>
    </div>

    <!-- LISTE DES PROJETS -->
    <div class="add-project-card">
        <h3>Projets existants</h3>

        <div class="projects-list-section">
            <?php if (empty($projects)): ?>
                <div class="projects-list-empty">Aucun projet enregistré</div>
            <?php else: ?>
                <div class="projects-table-wrapper">
                    <table class="projects-table">
                        <thead>
                            <tr>
                                <th>Nom du projet</th>
                                <th>Catégorie</th>
                                <th>Statut</th>
                                <th>Localisation</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($projects as $p): ?>
                                <tr>
                                    <td class="project-title-col">
                                        <strong><?= htmlspecialchars($p['title']) ?></strong>
                                    </td>
                                    <td>
                                        <span class="project-list-badge category"><?= htmlspecialchars($p['category']) ?></span>
                                    </td>
                                    <td>
                                        <span class="project-list-badge status <?= $p['status'] === 'acheve' ? 'completed' : 'ongoing' ?>">
                                            <?= $p['status'] === 'acheve' ? 'Achevé' : 'En cours' ?>
                                        </span>
                                    </td>
                                    <td>
                                        <?= htmlspecialchars($p['location'] ?: 'Non spécifiée') ?>
                                    </td>
                                    <td class="actions-col">
                                        <a href="edit-project.php?id=<?= $p['id'] ?>" class="btn-action edit-btn" title="Modifier">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <a href="delete-project.php?id=<?= $p['id'] ?>" class="btn-action delete-btn" title="Supprimer" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce projet ? Cette action est irréversible.');">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<script>
    function addImageField() {
        const container = document.getElementById('images-container');
        if (container.children.length >= 7) {
            alert("Maximum 7 images");
            return;
        }
        const input = document.createElement('input');
        input.type = 'file';
        input.name = 'images[]';
        input.accept = 'image/*';
        input.style.marginBottom = '15px';
        container.appendChild(input);
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>