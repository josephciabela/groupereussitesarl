<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../config/config.php';

/** @var PDO $connexion */

$projectId = $_GET['id'] ?? null;
$message = '';
$messageType = '';
$project = null;

// Récupérer le projet
if (!$projectId) {
    header('Location: add-project.php');
    exit;
}

$stmt = $connexion->prepare("SELECT * FROM projects WHERE id = ?");
$stmt->execute([$projectId]);
$project = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$project) {
    header('Location: add-project.php?error=not_found');
    exit;
}

// Traitement de la modification
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category = $_POST['category'] ?? '';
    $status = $_POST['status'] ?? '';
    $title = $_POST['title'] ?? '';
    $description = $_POST['description'] ?? '';
    $location = $_POST['location'] ?? '';

    if (empty($category) || empty($status) || empty($title) || empty($description)) {
        $message = "Veuillez remplir tous les champs obligatoires.";
        $messageType = "error";
    } else {
        $updateStmt = $connexion->prepare("UPDATE projects SET category = ?, status = ?, title = ?, description = ?, location = ? WHERE id = ?");
        $updateStmt->execute([$category, $status, $title, $description, $location, $projectId]);

        $message = "Projet modifié avec succès !";
        $messageType = "success";

        // Rafraîchir les données
        $stmt = $connexion->prepare("SELECT * FROM projects WHERE id = ?");
        $stmt->execute([$projectId]);
        $project = $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier le Projet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/main.css">
    <style>
        body {
            background: #f5f5f5;
        }
        .edit-project-container {
            max-width: 700px;
            margin: 40px auto;
            padding: 0 20px;
        }
        .edit-project-card {
            background: var(--surface-color);
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 8px 24px rgba(0,0,0,.06);
        }
        .edit-project-card h2 {
            color: var(--heading-color);
            margin-bottom: 10px;
            font-weight: 600;
        }
        .edit-project-card .subtitle {
            color: #666;
            margin-bottom: 25px;
            font-size: 0.95rem;
        }
        .edit-project-card input,
        .edit-project-card textarea,
        .edit-project-card select {
            width: 100%;
            padding: 12px 15px;
            border-radius: 8px;
            border: 1px solid #ddd;
            margin-bottom: 15px;
            font-size: 1rem;
            font-family: inherit;
            background: #fff;
        }
        .edit-project-card input:focus,
        .edit-project-card textarea:focus,
        .edit-project-card select:focus {
            outline: none;
            border-color: var(--accent-color);
            box-shadow: 0 0 0 3px rgba(var(--accent-rgb), 0.1);
        }
        .edit-project-card label {
            display: block;
            color: var(--heading-color);
            font-weight: 600;
            margin-top: 15px;
            margin-bottom: 8px;
        }
        .edit-project-message {
            padding: 15px 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-weight: 500;
        }
        .edit-project-message.success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .edit-project-message.error {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        .button-group {
            display: flex;
            gap: 10px;
            margin-top: 25px;
        }
        .button-group button,
        .button-group a {
            flex: 1;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            transition: background 0.3s ease;
        }
        .button-group button[type="submit"] {
            background: var(--accent-color);
            color: var(--contrast-color);
        }
        .button-group button[type="submit"]:hover {
            background: var(--nav-hover-color);
        }
        .button-group a {
            background: #e0e0e0;
            color: #333;
        }
        .button-group a:hover {
            background: #d0d0d0;
        }
    </style>
</head>

<body>

<div class="edit-project-container">
    <div class="edit-project-card">
        <h2>Modifier le projet</h2>
        <div class="subtitle"><?= htmlspecialchars($project['title']) ?></div>

        <?php if ($message): ?>
            <div class="edit-project-message <?= $messageType ?>">
                <?= htmlspecialchars($message) ?>
            </div>
        <?php endif; ?>

        <form action="" method="POST">
            <label for="category">Catégorie *</label>
            <input type="text" id="category" name="category" value="<?= htmlspecialchars($project['category']) ?>" required>

            <label for="status">Statut *</label>
            <select id="status" name="status" required>
                <option value="en_cours" <?= $project['status'] === 'en_cours' ? 'selected' : '' ?>>En cours</option>
                <option value="acheve" <?= $project['status'] === 'acheve' ? 'selected' : '' ?>>Achevé</option>
            </select>

            <label for="title">Titre du projet *</label>
            <input type="text" id="title" name="title" value="<?= htmlspecialchars($project['title']) ?>" required>

            <label for="description">Description *</label>
            <textarea id="description" name="description" required rows="6"><?= htmlspecialchars($project['description']) ?></textarea>

            <label for="location">Localisation</label>
            <input type="text" id="location" name="location" value="<?= htmlspecialchars($project['location'] ?? '') ?>">

            <div class="button-group">
                <button type="submit">Enregistrer les modifications</button>
                <a href="add-project.php">Annuler</a>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
