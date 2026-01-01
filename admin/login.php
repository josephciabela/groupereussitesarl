<?php
session_start();

// Read admin users from JSON file
$usersFile = __DIR__ . '/../data/admin_users.json';
$users = [];
if (file_exists($usersFile)) {
  $raw = file_get_contents($usersFile);
  $json = json_decode($raw, true);
  if (is_array($json)) $users = $json;
}

if (isset($_SESSION['admin_logged']) && $_SESSION['admin_logged'] === true) {
  header('Location: dashboard.php');
  exit;
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $u = trim($_POST['username'] ?? '');
  $p = $_POST['password'] ?? '';
  $found = false;
  foreach ($users as $usr) {
    if ($usr['username'] === $u) {
      // support plaintext passwords stored in file
      if (isset($usr['password']) && $usr['password'] === $p) {
        $found = true;
        break;
      }
      // support hashed password
      if (isset($usr['password']) && password_verify($p, $usr['password'])) {
        $found = true;
        break;
      }
    }
  }
  if ($found) {
    $_SESSION['admin_logged'] = true;
    header('Location: dashboard.php');
    exit;
  } else {
    $error = 'Identifiants invalides';
  }
}
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Admin Login</title>
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/css/main.css" rel="stylesheet">
  <style>
    body{display:flex;align-items:center;justify-content:center;height:100vh;background:var(--background-color)}
    .admin-login-brand{display:flex;align-items:center;gap:12px;margin-bottom:12px}
    .admin-login-brand img{height:48px;border-radius:6px}
    .login-sub {color:var(--heading-color);opacity:0.9}
  </style>
</head>
<body>

  <div class="d-flex align-items-center justify-content-center" style="min-height:70vh;">
    <div class="card p-4 admin-card admin-animated" style="width:420px">
      <div class="admin-login-brand">
        <img src="../assets/img/favicon.jpg" alt="logo">
        <div>
          <h4 class="mb-0">Espace Admin</h4>
          <div class="login-sub">Groupe Reussite SARL</div>
        </div>
      </div>

      <?php if ($error): ?><div class="alert alert-danger"><?php echo htmlspecialchars($error);?></div><?php endif; ?>

      <form method="post" class="mt-2">
        <div class="mb-3">
          <label class="form-label small text-muted">Nom d'utilisateur</label>
          <input name="username" class="form-control admin-form-input" placeholder="Nom d'utilisateur" required>
        </div>
        <div class="mb-3">
          <label class="form-label small text-muted">Mot de passe</label>
          <input name="password" type="password" class="form-control admin-form-input" placeholder="Mot de passe" required>
        </div>
        <div class="d-flex justify-content-between align-items-center">
          <button class="btn btn-primary">Se connecter</button>
          <a href="../" class="btn btn-link">Retour au site</a>
        </div>
      </form>

      <div class="mt-3 text-muted small">Seul l'administrateur a accès à cette zone.</div>
    </div>
  </div>

</body>
</html>
