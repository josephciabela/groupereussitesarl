<?php
session_start();
if (!isset($_SESSION['admin_logged']) || $_SESSION['admin_logged'] !== true) {
    header('Location: login.php');
    exit;
}

$configPath = __DIR__ . '/../data/video_modal.json';
$data = ['type' => 'video', 'src' => 'assets/video/Main-video-on-site.mp4', 'title' => 'Actualités sur nos activités', 'description' => 'Découvrez en vidéo nos projets récents et notre engagement.'];
if (file_exists($configPath)) {
    $read = file_get_contents($configPath);
    $json = json_decode($read, true);
    if (is_array($json)) $data = array_merge($data, $json);
}

?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Admin Dashboard</title>
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/css/main.css" rel="stylesheet">
  <style>.preview{max-width:100%;height:auto;max-height:360px;object-fit:cover}</style>
</head>
<body class="p-4">
  <div class="container-fluid admin-animated">
    <div class="admin-header d-flex justify-content-between align-items-center mb-4">
      <div class="d-flex align-items-center gap-3">
        <img src="../assets/img/favicon.jpg" alt="logo" style="height:48px;border-radius:6px">
        <div>
          <h4 class="mb-0">Espace Admin</h4>
          <div class="small text-muted">Gérer le contenu du modal Actualités</div>
        </div>
      </div>
      <div>
        <a href="deconnexion.php" class="btn btn-outline-secondary">Logout</a>
      </div>
    </div>

    <div class="row">
      <aside class="col-lg-3 admin-sidebar mb-4">
        <div class="card admin-card p-3">
          <h6 class="mb-2">Utilisateurs</h6>
          <ul class="list-group mb-3">
            <?php foreach ($users as $u): ?>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <span><?php echo htmlspecialchars($u['username']); ?></span>
                <form method="post" action="save_users.php" onsubmit="return confirm('Supprimer cet utilisateur ?');">
                  <input type="hidden" name="action" value="delete">
                  <input type="hidden" name="username" value="<?php echo htmlspecialchars($u['username']); ?>">
                  <button class="btn btn-sm btn-danger">Suppr.</button>
                </form>
              </li>
            <?php endforeach; ?>
          </ul>

          <h6>Ajouter</h6>
          <form method="post" action="save_users.php" class="row g-2">
            <input type="hidden" name="action" value="add">
            <div class="col-12"><input name="username" class="form-control admin-form-input" placeholder="Nom d'utilisateur" required></div>
            <div class="col-12"><input name="password" class="form-control admin-form-input" placeholder="Mot de passe" required></div>
            <div class="col-12"><button class="btn btn-success w-100">Ajouter</button></div>
          </form>
        </div>
      </aside>

      <main class="col-lg-9 admin-main">
        <div class="card admin-card p-3 mb-4">
          <h5 class="mb-3">Éditeur Modal</h5>
          <form action="save_modal.php" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-4 mb-3">
                <label class="form-label">Type</label>
                <select name="type" class="form-control admin-form-input">
                  <option value="video" <?php if($data['type']==='video') echo 'selected';?>>Video</option>
                  <option value="image" <?php if($data['type']==='image') echo 'selected';?>>Image</option>
                </select>
              </div>
              <div class="col-md-8 mb-3">
                <label class="form-label">Title</label>
                <input name="title" class="form-control admin-form-input" value="<?php echo htmlspecialchars($data['title']);?>">
              </div>
              <div class="col-12 mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control admin-form-input"><?php echo htmlspecialchars($data['description']);?></textarea>
              </div>
              <div class="col-12 mb-3">
                <label class="form-label">Upload media (mp4, jpg, png, webp) — optional</label>
                <input type="file" name="media" class="form-control admin-form-input">
              </div>
              <div class="col-12">
                <button class="btn btn-primary">Save</button>
              </div>
            </div>
          </form>
        </div>

        <div class="card admin-card p-3">
          <h5 class="mb-3">Preview</h5>
          <div class="d-flex gap-4 flex-column flex-md-row">
            <div style="flex:1">
              <?php if ($data['type'] === 'video'): ?>
                <video class="preview" controls muted loop playsinline style="width:100%;height:480px;object-fit:cover">
                  <source src="../<?php echo ltrim($data['src'], '/'); ?>" type="video/mp4">
                </video>
              <?php else: ?>
                <img class="preview" src="../<?php echo ltrim($data['src'], '/'); ?>" alt="preview" style="width:100%;height:480px;object-fit:cover">
              <?php endif; ?>
            </div>
            <div style="width:360px">
              <h4 class="mt-0"><?php echo htmlspecialchars($data['title']);?></h4>
              <p><?php echo nl2br(htmlspecialchars($data['description']));?></p>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
</body>
</html>
