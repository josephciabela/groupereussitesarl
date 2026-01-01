<?php
// Simple admin header
?>
<header class="admin-topbar" style="background:linear-gradient(90deg,#fff,#fff);border-bottom:1px solid rgba(0,0,0,0.05);">
  <div class="container d-flex align-items-center justify-content-between py-2">
    <div class="d-flex align-items-center gap-3">
      <a href="../" class="d-flex align-items-center text-decoration-none">
        <img src="../assets/img/favicon.jpg" alt="logo" style="height:40px;border-radius:6px">
        <span style="margin-left:8px;color:var(--heading-color);font-weight:700">GROUPE REUSSITE</span>
      </a>
    </div>
    <nav>
      <?php if (isset($_SESSION['admin_logged']) && $_SESSION['admin_logged'] === true): ?>
        <a href="dashboard.php" class="btn btn-sm btn-outline-secondary me-2">Dashboard</a>
        <a href="deconnexion.php" class="btn btn-sm btn-outline-danger">Logout</a>
      <?php else: ?>
        <a href="login.php" class="btn btn-sm btn-primary">Admin Login</a>
      <?php endif; ?>
    </nav>
  </div>
</header>
