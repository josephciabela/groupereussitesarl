<?php
session_start();
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../functions.php';

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

// Fetch contact messages and questionnaire submissions if DB available
$messages = [];
$questionnaires = [];
if (!empty($connexion)) {
  try {
    $stmt = $connexion->query('SELECT id, nom AS name, tel, email, message, created_at FROM contact_messages ORDER BY created_at DESC LIMIT 200');
    $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);
  } catch (Exception $e) {
    error_log('Error fetching messages: ' . $e->getMessage());
    $messages = [];
  }
  try {
    $stmt = $connexion->query('SELECT id, client_name, client_email, client_phone, payload, created_at FROM questionnaire_submissions ORDER BY created_at DESC LIMIT 200');
    $questionnaires = $stmt->fetchAll(PDO::FETCH_ASSOC);
  } catch (Exception $e) {
    error_log('Error fetching questionnaires: ' . $e->getMessage());
    $questionnaires = [];
  }
}

?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Admin Dashboard</title>
  <!-- Favicons: use same as site -->
  <link href="../assets/img/favicon.jpg" rel="icon">
  <link href="../assets/img/favicon.jpg" rel="apple-touch-icon">
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
        
        <div class="card admin-card p-3 mt-4">
          <h5 class="mb-3">Messages Contact</h5>
          <?php if (empty($messages)): ?>
            <div class="text-muted">Aucun message enregistré.</div>
          <?php else: ?>
            <div class="table-responsive">
              <table class="table table-sm">
                <thead>
                  <tr><th>Nom</th><th>Téléphone</th><th>Email</th><th>Message</th><th>Reçu</th></tr>
                </thead>
                <tbody>
                  <?php foreach ($messages as $m): ?>
                    <tr>
                      <td><?php echo htmlspecialchars($m['name']); ?></td>
                      <td><?php echo htmlspecialchars($m['tel']); ?></td>
                      <td><?php echo htmlspecialchars($m['email']); ?></td>
                      <td style="max-width:360px;word-break:break-word"><?php echo nl2br(htmlspecialchars($m['message'])); ?></td>
                      <td><?php echo htmlspecialchars($m['created_at']); ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          <?php endif; ?>
        </div>

        <div class="card admin-card p-3 mt-4">
          <h5 class="mb-3">Questionnaires soumis</h5>
          <?php if (empty($questionnaires)): ?>
            <div class="text-muted">Aucune soumission.</div>
          <?php else: ?>
            <div class="table-responsive">
              <table class="table table-sm">
                <thead>
                  <tr><th>Nom</th><th>Téléphone</th><th>Email</th><th>Détails</th><th>Reçu</th></tr>
                </thead>
                <tbody>
                  <?php foreach ($questionnaires as $q): ?>
                    <tr>
                      <td><?php echo htmlspecialchars($q['client_name']); ?></td>
                      <td><?php echo htmlspecialchars($q['client_phone']); ?></td>
                      <td><?php echo htmlspecialchars($q['client_email']); ?></td>
                      <td style="max-width:420px;word-break:break-word">
                        <?php
                          $pl = json_decode($q['payload'], true);
                          if (is_array($pl)) {
                            $full = json_encode($pl, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
                          } else {
                            $full = $q['payload'];
                          }
                          // Replace checkbox values "on" with "oui" for display
                          $full = str_replace('"on"', '"oui"', $full);
                          $preview = mb_strimwidth($full, 0, 120, '...');
                        ?>
                        <div class="small text-muted" style="white-space:pre-wrap;"><?php echo nl2br(htmlspecialchars($preview)); ?></div>
                        <div class="mt-2">
                          <button type="button" class="btn btn-sm btn-outline-primary view-payload-btn" data-payload-id="payload-<?php echo intval($q['id']); ?>">Voir</button>
                        </div>
                        <pre id="payload-<?php echo intval($q['id']); ?>" class="d-none"><?php echo htmlspecialchars($full); ?></pre>
                      </td>
                      <td><?php echo htmlspecialchars($q['created_at']); ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          <?php endif; ?>
        </div>
      </main>
    </div>
  </div>

  <!-- Modal to view full payload -->
  <div class="modal fade" id="viewPayloadModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Détails de la soumission</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <pre id="modalPayloadContent" style="white-space:pre-wrap;">&nbsp;</pre>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('click', function(e) {
      if (e.target && e.target.classList && e.target.classList.contains('view-payload-btn')) {
        var id = e.target.getAttribute('data-payload-id');
        var src = document.getElementById(id);
        var text = src ? src.textContent : '';
        var modalPre = document.getElementById('modalPayloadContent');
        modalPre.textContent = text || 'Aucun contenu.';
        try {
          if (typeof bootstrap !== 'undefined') {
            var modalEl = document.getElementById('viewPayloadModal');
            var modal = new bootstrap.Modal(modalEl);
            modal.show();
          } else {
            // fallback
            alert(modalPre.textContent);
          }
        } catch (err) {
          alert(modalPre.textContent);
        }
      }
    });
  </script>

</body>
</html>
