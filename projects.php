<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/config/config.php';
/** @var PDO $connexion */

$stmt = $connexion->prepare("SELECT * FROM projects ORDER BY created_at DESC");
$stmt->execute();
$projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projets</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<header id="header" class="header sticky-top">
    <?php include('header-footer/header.php') ?>
</header>

<main class="projects p-5 page-wrapper">

    <div class="projects-grid card-box">
        <?php foreach ($projects as $p): ?>

            <div class="project-item project-row" data-aos="zoom-in">

                <div class="project-content flex-grow-1">
                    <div class="project-header d-flex justify-content-between align-items-center mb-2">
                        <span class="project-category badge"
                              style="background:var(--soft-accent-color);color:#000">
                            <?= htmlspecialchars($p['category']) ?>
                        </span>

                        <span class="project-status <?= $p['status']==='acheve'?'completed':'in-progress' ?>">
                            <?= $p['status']==='acheve'?'Achevé':'En cours' ?>
                        </span>
                    </div>

                    <h3 class="project-title"><?= htmlspecialchars($p['title']) ?></h3>

                    <div class="project-details">
                        <p><?= nl2br(htmlspecialchars($p['description'])) ?></p>

                        <div class="project-location">
                            <i class="bi bi-geo-alt-fill"></i>
                            <span><?= htmlspecialchars($p['location']) ?></span>
                        </div>
                    </div>

                    <a href="#"
                       class="project-link btn btn-sm mt-2"
                       style="background:var(--nav-hover-color);color:var(--contrast-color)"
                       data-bs-toggle="modal"
                       data-bs-target="#projectModal<?= $p['id'] ?>">
                        Voir les images
                    </a>
                </div>

                <div class="project-visual">
                    <img src="<?= PROJECTS_IMG . htmlspecialchars($p['cover_image']) ?>"
                         class="img-fluid rounded">
                </div>

            </div>

            <!-- MODAL -->
            <div class="modal fade" id="projectModal<?= $p['id'] ?>">
                <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content card-box">
                        <div class="modal-header">
                            <h5><?= htmlspecialchars($p['title']) ?></h5>
                            <button class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <?php
                                $imgStmt = $connexion->prepare(
                                    "SELECT image_path FROM project_images WHERE project_id=? LIMIT 7"
                                );
                                $imgStmt->execute([$p['id']]);
                                foreach ($imgStmt->fetchAll(PDO::FETCH_ASSOC) as $img):
                                ?>
                                    <div class="col-md-4 mb-3">
                                        <img src="<?= PROJECTS_IMG . htmlspecialchars($img['image_path']) ?>"
                                             class="img-fluid rounded">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
    </div>

</main>



  <footer id="footer" class="footer dark-background">
    <?php
    include('header-footer/footer.php')
    ?>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>



  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>
