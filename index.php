<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Acceuil</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.jpg" rel="icon">
  <link href="assets/img/favicon.jpg" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header sticky-top">
    <?php
    include('header-footer/header.php')
    ?>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <video class="hero-video" autoplay muted loop playsinline>
        <source src="assets/video/Main-video-on-site.mp4" type="video/mp4">
      </video>
      <div class="hero-overlay"></div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content" data-aos="fade-right" data-aos-delay="200">
              <span class="subtitle">REUSSIR AU PLUS QUE PARFAIT</span><br>
              <h1 class="shadow-lg bg-white p-2 Banner-Gr-title">GROUPE REUSSITE SARL</h1>
              <p class="text-white mt-3 shadow-lg">Chaque projet est une opportunité
                unique de repousser les limites,
                d’explorer de nouvelles perspectives
                et de transformer les idées
                audacieuses en réussites concrètes.</p>

              <div class="trust-badges shadow-lg">
                <div class="badge-item badge-item p-2">
                  <i class="bi bi-building-check"></i>
                  <div class="badge-text">
                    <span class="count">230+</span>
                    <span class="label">Projets Réalisés</span>
                  </div>
                </div>
                <div class="badge-item badge-item p-2">
                  <i class="bi bi-trophy"></i>
                  <div class="badge-text">
                    <span class="count">10+</span>
                    <span class="label">Ans d'expérience</span>
                  </div>
                </div>
                <div class="badge-item badge-item p-2">
                  <i class="bi bi-people"></i>
                  <div class="badge-text">
                    <span class="count">100%</span>
                    <span class="label">Satisfaction Client</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Images - Caroussel -->
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="hero-image position-relative">

              <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                <div class="carousel-inner">

                  <div class="carousel-item active">
                    <img src="assets/img/caroussel-banner-1.webp" class="img-fluid" alt="Banner 1">
                  </div>

                  <div class="carousel-item">
                    <img src="assets/img/caroussel-banner-2.webp" class="img-fluid" alt="Banner 2">
                  </div>

                  <div class="carousel-item">
                    <img src="assets/img/caroussel-banner-3.webp" class="img-fluid" alt="Banner 3">
                  </div>

                </div>
              </div>

            </div>
          </div>
        </div>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center g-5">
          <div class="col-lg-6">
            <div class="about-content" data-aos="fade-right" data-aos-delay="200">
              <h2>Qui sommes-nous ?</h2>
              <p class="lead">GROUPE REUSSITE SARL se positionne comme votre partenaire de
                confiance pour la concrétisation de vos projets de construction,
                d’aménagement et de rénovation en République Démocratique du Congo.
                Nous accompagnons chaque client - particulier, entreprises,
                collectivités ou institutions - dans la réalisation de leurs aspirations,
                en fournissant des solutions sur mesure qui respectent vos exigences,
                votre budget et vos échéances.
              </p>
              <p class="lead">
                Nous disposons d’une équipe qualifiée,
                d’un matériel performant et d’un réseau de partenaires fiables,
                qui nous permettent de vous garantir la qualité,
                la sécurité et la durabilité de nos ouvrages.
                Nous intervenons dans tous les domaines du BTP,
                tels que l’habitation, les centres de loisirs et commerciaux,
                les bâtiments industriels, les établissements sanitaires, scolaires et sportifs,
                les routes et autoroutes, les ouvrages d’art,
                les structures métalliques et autres formes d’infrastructures,
                notamment les sites de télécoms. Nous sommes présents partout en RDC,
                et particulièrement à Kinshasa,
                où nous avons réalisé de nombreux projets prestigieux.
              </p>

              <div class="achievement-boxes row g-4 mt-4">
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="300">
                  <div class="achievement-box">
                    <h3>40+</h3>
                    <p>Collaborateurs</p>
                  </div>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="400">
                  <div class="achievement-box">
                    <h3>230+</h3>
                    <p>Projects Réalisés</p>
                  </div>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="500">
                  <div class="achievement-box">
                    <h3>100%</h3>
                    <p>Satisfaction Client</p>
                  </div>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="600">
                  <div class="achievement-box">
                    <h3>10+</h3>
                    <p>Partenaires</p>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="col-lg-6">
            <div class="about-image position-relative" data-aos="fade-left" data-aos-delay="200">
              <img src="assets/img/apropos.webp" alt="Apropos" class="img-fluid main-image rounded">
              <div class="image-overlay">
                <img src="assets/img/apropos-pic-2.png" alt="Construction Project" class="img-fluid rounded">
              </div>
              <div class="experience-badge" data-aos="zoom-in" data-aos-delay="500">
                <span>230+</span>
                <p>Réalisation</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Services</h2>
        <p>Des services professionnels adaptés à vos besoins</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-tools"></i>
              </div>
              <h3>Matériaux de construction</h3>
              <p>Nous vous accompagnons dans vos projets de construction avec des matériaux fiables et une logistique professionnelle.</p>
              <div class="service-features">
                <span><i class="bi bi-check-circle"></i>Ciment CILU 32,5 & 42,5 – Résistant et conforme aux exigences des chantiers modernes</span>
                <span><i class="bi bi-check-circle"></i>Livraison rapide sur chantier – Partout en RDC, dans le respect des délais</span>
                <span><i class="bi bi-check-circle"></i>Bétonnières disponibles – Pour un mélange homogène et efficace sur site</span>
                <span><i class="bi bi-check-circle"></i>Blocs de ciment solides – Adaptés aux murs, fondations et ouvrages durables</span>
                <span><i class="bi bi-check-circle"></i>Transport par camions BEN – Distribution sécurisée et efficace des matériaux</span>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="service-card featured">
              <div class="service-icon">
                <i class="bi bi-broadcast"></i>
              </div>
              <h3>Télécom</h3>
              <p>Nous intervenons dans la construction,
                la maintenance et la sécurisation des sites de télécommunication,
                en accompagnant les opérateurs et partenaires techniques
                sur l’ensemble du territoire.</p>
              <div class="service-features">
                <span><i class="bi bi-check-circle"></i>Construction de sites télécom – Antennes-relais, pylônes et infrastructures de connectivité</span>
                <span><i class="bi bi-check-circle"></i>Travaux de génie civil – Fondations, tranchées, câblage et aménagement des sites</span>
                <span><i class="bi bi-check-circle"></i>Maintenance et réparation – Inspection, dépannage et mise à niveau des installations</span>
                <span><i class="bi bi-check-circle"></i>Intervention rapide – Réduction des interruptions et continuité de service</span>
                <span><i class="bi bi-check-circle"></i>Sécurité & conformité – Respect strict des normes techniques et réglementaires</span>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-building"></i>
              </div>
              <h3>Bâtiment & Travaux Publics (BTP)</h3>
              <p>Nous operons dans les travaux de bâtiment et travaux publics,
                en accompagnant les projets d’infrastructures publiques et privées
                en République Démocratique du Congo.</p>
              <div class="service-features">
                <span><i class="bi bi-check-circle"></i>Réhabilitation - Modernisation et optimisation des bâtiments existants</span>
                <span><i class="bi bi-check-circle"></i>Travaux routiers & ponts - Routes, ponts et ouvrages de transport durables</span>
                <span><i class="bi bi-check-circle"></i>Canalisations & réseaux - Eau, électricité, gaz et assainissement</span>
                <span><i class="bi bi-check-circle"></i>Équipements performants & équipe qualifiée - Materiél moderne et expertise terrain</span>
              </div>
            </div>
          </div><!-- End Service Item -->
        </div>

        <!-- Nos Partenaires -->
        <section id="partners" class="partners section">
          <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="section-title text-center mb-4">
              <h2>Nos Partenaires</h2>
            </div>

            <div class="partners-slider">
              <div class="partners-track">

                <!-- Logos -->
                <img src="assets/img/partenaires/logo-rawbank-removebg-preview.png" class="partner-logo" alt="Rawbank">
                <img src="assets/img/partenaires/logo-toyota-removebg-preview.png" class="partner-logo" alt="Toyota">
                <img src="assets/img/partenaires/logo-cainotruk-removebg-preview.png" class="partner-logo" alt="Cainotruk">
                <img src="assets/img/partenaires/logo-ciment-cilu-removebg-preview.png" class="partner-logo" alt="CILU">
                <img src="assets/img/partenaires/logo-Hella.png" class="partner-logo" alt="Hella">
                <img src="assets/img/partenaires/logo-Hawei.png" class="partner-logo" alt="Huawei">
                <img src="assets/img/partenaires/logo-helios-tower.png" class="partner-logo" alt="Helios Tower">

                <!-- DUPLICATION (obligatoire pour le défilement infini) -->
                <img src="assets/img/partenaires/logo-rawbank-removebg-preview.png" class="partner-logo" alt="Rawbank">
                <img src="assets/img/partenaires/logo-toyota-removebg-preview.png" class="partner-logo" alt="Toyota">
                <img src="assets/img/partenaires/logo-cainotruk-removebg-preview.png" class="partner-logo" alt="Cainotruk">
                <img src="assets/img/partenaires/logo-ciment-cilu-removebg-preview.png" class="partner-logo" alt="CILU">
                <img src="assets/img/partenaires/logo-Hella.png" class="partner-logo" alt="Hella">
                <img src="assets/img/partenaires/logo-Hawei.png" class="partner-logo" alt="Huawei">
                <img src="assets/img/partenaires/logo-helios-tower.png" class="partner-logo" alt="Helios Tower">

              </div>
            </div>

          </div>
        </section>

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section">

          <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="testimonials-slider swiper init-swiper">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="testimonial-slide" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-header">
                      <div class="stars-rating">
                        <h5>Message du Directeur Général</h5>
                      </div>
                      <div class="quote-icon">
                        <i class="bi bi-quote"></i>
                      </div>
                    </div>
                    <div class="testimonial-footer">
                      <div class="author-info">
                        <img src="assets/img/DG-pic.png" alt="Author" class="author-avatar">
                        <div class="author-details">
                          <h4>Serge MUELA</h4>
                          <span class="role">Directeur Général</span>
                          <span class="company">Groupe Reussite sarl</span>
                        </div>
                      </div>
                    </div>

                    <div class="testimonial-body">
                      <p>"Chers Clients, Partenaires et futurs Collaborateurs,<br>

                        En tant que Directeur Général de GROUPE REUSSITE SARL, je vous réaffirme notre engagement envers l’excellence, la qualité et l’innovation.
                        Notre mission est claire : donner vie à vos projets en créant des espaces fonctionnels, esthétiques et porteurs de valeur pour nos communautés. <br>

                        Chaque projet est pour nous une aventure unique. C’est pourquoi nous travaillons à vos côtés pour comprendre vos attentes, respecter vos contraintes et vous proposer des solutions sur mesure.
                        Notre équipe, forte d’un savoir-faire technique éprouvé et d’une passion pour le métier, incarne notre volonté de toujours mieux faire.<br>

                        Choisir GROUPE REUSSITE SARL, c’est opter pour un partenaire fiable, réactif et capable de relever les défis les plus ambitieux.

                        Construisons ensemble un avenir durable et inspirant."</p>
                    </div>
                  </div>
                </div>

              </div>
            </div>

          </div>

        </section><!-- /Testimonials Section -->

        <!-- Maquette Slider Container -->
        <section>
          <div class="section-title text-center mb-4">
            <h2>Maquettes</h2>
          </div>
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="assets/img/maquettes/Maquette1.webp" alt="Image 1"></div>
              <div class="swiper-slide"><img src="assets/img/maquettes/Maquette2.jpeg" alt="Image 2"></div>
              <div class="swiper-slide"><img src="assets/img/maquettes/Maquette3.jpeg" alt="Image 3"></div>
              <div class="swiper-slide"><img src="assets/img/maquettes/Maquette4.jpeg" alt="Image 4"></div>
              <div class="swiper-slide"><img src="assets/img/maquettes/Maquette5.jpeg" alt="Image 4"></div>
              <div class="swiper-slide"><img src="assets/img/maquettes/Maquette6.jpeg" alt="Image 4"></div>
              <div class="swiper-slide"><img src="assets/img/maquettes/Maquette7.jpeg" alt="Image 4"></div>
              <div class="swiper-slide"><img src="assets/img/maquettes/Maquette8.jpeg" alt="Image 4"></div>
              <div class="swiper-slide"><img src="assets/img/maquettes/Maquette9.jpeg" alt="Image 4"></div>
              <div class="swiper-slide"><img src="assets/img/maquettes/Maquette10.jpeg" alt="Image 4"></div>
              <div class="swiper-slide"><img src="assets/img/maquettes/Maquette11.jpeg" alt="Image 4"></div>
              <div class="swiper-slide"><img src="assets/img/maquettes/Maquette12.jpeg" alt="Image 4"></div>
              <div class="swiper-slide"><img src="assets/img/maquettes/Maquette13.jpeg" alt="Image 4"></div>
            </div>

            <!-- Pagination -->
            <div class="swiper-pagination"></div>
          </div>

        </section><!-- End Maquette-->

            <!-- Portfolio - Projects Section -->
    <section id="projects" class="projects section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Portfolio - Projects</h2>
        <p>Découvrez quelques-unes de nos réalisations, reflets de notre expertise et de notre engagement à livrer des projets de qualité.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="projects-grid">

          <div class="project-item" data-aos="zoom-in" data-aos-delay="100">
            <div class="project-content">
              <div class="project-header">
                <span class="project-category">Construction</span>
                <span class="project-status completed">Achevé</span>
              </div>
              <h3 class="project-title">Hotel les Béatitudes</h3>
              <div class="project-details">
                <div class="project-info">
                  <p>
                    Un projet accompli mettant en lumière un établissement moderne et accueillant
                    à Kinshasa, offrant hébergement,
                    restauration et espaces multifonctions pour un séjour d’excellence au
                    cœur de la ville.
                  </p>
                </div>
                <div class="project-location">
                  <i class="bi bi-geo-alt-fill"></i>
                  <span>1, avenue Bangamelo, quartier Commercial, commune de Lemba
                    Kinshasa</span>
                </div>
              </div>
              <a href="project-details.php" class="project-link">
                <span>Voir les images</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
            <div class="project-visual">
              <img src="assets/img/img-projets-autres/beatitudes-pic1.jpg" alt="Metropolitan Office Tower" class="img-fluid">
            </div>
          </div><!-- End Project Item -->

          <div class="project-item" data-aos="zoom-in" data-aos-delay="200">
            <div class="project-content">
              <div class="project-header">
                <span class="project-category">Construction</span>
                <span class="project-status completed">Achevé</span>
              </div>
              <h3 class="project-title">Congo River</h3>
              <div class="project-details">
                <div class="project-info">
                  <p>
                    Un projet réalisé à Congo River Lodge, à Maluku,
                    incluant la construction des hotel 5 étoiles offrant un cadre de vie
                    unique au bord du fleuve Congo.
                  </p>
                </div>
                <div class="project-location">
                  <i class="bi bi-geo-alt-fill"></i>
                  <span>A 22km de la rivière Mai-Ndombe, C/Kalau - Kinshasa</span>
                </div>
              </div>
              <a href="project-details.php" class="project-link">
                <span>Voir les images</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
            <div class="project-visual">
              <img src="assets/img/img-projets-autres/congo-river-pic1.jpg" alt="Riverside Luxury Homes" class="img-fluid">
            </div>
          </div><!-- End Project Item -->
        </div>

        <div class="projet-parent-btn mt-4">
          <a href="#" class="projet-btn">Voir les autres projets</a>
        </div>



      </div>

    </section><!-- /Projects Section -->




        <div class="row mt-5">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-image-block">
              <img src="assets/img/cycle-vie-pic.webp" alt="Construction Services" class="img-fluid">
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-list-block">
              <h3>Notre cycle de collaboration en 3 étapes</h3>

              <div class="service-list">
                <div class="service-list-item" data-aos="fade-up" data-aos-delay="100">
                  <div class="service-list-icon">
                    <i class="bi bi-rulers"></i>
                  </div>
                  <div class="service-list-content">
                    <h4>Prise de contact et Diagnostic</h4>
                    <p>Nous analysons votre situation, vos besoins, vos objectifs, vos contraintes, vos opportunités, etc. Nous vous proposons un diagnostic personnalisé, qui identifie vos besoins.</p>
                  </div>
                </div><!-- End Service List Item -->

                <div class="service-list-item" data-aos="fade-up" data-aos-delay="200">
                  <div class="service-list-icon">
                    <i class="bi bi-calendar-check"></i>
                  </div>
                  <div class="service-list-content">
                    <h4>Conception et planification</h4>
                    <p>Nous élaborons avec vous un plan d’action, qui définit les étapes, les ressources, les partenaires, les délais, les coûts, les indicateurs, etc. Nous vous accompagnons dans la conception de votre projet, en vous apportant notre expertise, notre créativité, notre réseau, etc</p>
                  </div>
                </div><!-- End Service List Item -->

                <div class="service-list-item" data-aos="fade-up" data-aos-delay="300">
                  <div class="service-list-icon">
                    <i class="bi bi-tools"></i>
                  </div>
                  <div class="service-list-content">
                    <h4>Réalisation</h4>
                    <p>Nous vous accompagnons dans la réalisation de votre projet, en vous fournissant les services que vous avez choisis. Nous vous aidons à contrôler la qualité, à gérer les risques, à résoudre les problèmes, etc. </p>
                  </div>
                </div><!-- End Service List Item -->
              </div>
            </div>
          </div>
        </div>


<div class="cta-container text-center mt-5" data-aos="fade-up" data-aos-delay="300">
  <h2 class="mb-3">Accédez à nos informations</h2>
  <p class="mb-5">Scannez les QR codes ci-dessous pour interagir avec notre entreprise.</p>

  <div class="qr-grid">
    <!-- WhatsApp -->
    <div class="qr-card">
      <img src="assets/img/qr-codes/QR-code-whatsapp-DG.jpeg" alt="QR Code WhatsApp">
      <h4>Contact WhatsApp</h4>
      <p>Écrivez-nous directement via WhatsApp pour toute information.</p>
    </div>

    <!-- Vidéo -->
    <div class="qr-card">
      <img src="assets/img/qr-codes/QR-code-Vidéo-Présentation-GR-sarl.jpeg" alt="QR Code Vidéo">
      <h4>Vidéo de présentation</h4>
      <p>Découvrez nos locaux et notre environnement professionnel.</p>
    </div>

    <!-- Company Profile -->
    <div class="qr-card">
      <img src="assets/img/qr-codes/QR-code-Profil-Business.jpeg" alt="QR Code Profil Business">
      <h4>Profil de l’entreprise</h4>
      <p>Consultez notre Company Profile et nos réalisations.</p>
    </div>
  </div>
</div>

      </div>

    </section><!-- /Services Section -->
<div class="d-none">
    <!-- Certifications Section -->
    <section id="certifications" class="certifications section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Certified &amp; Trusted</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center mb-5 content">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <h2>Industry Certifications &amp; Excellence</h2>
            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae. Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Pellentesque in ipsum id orci porta dapibus.</p>
          </div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="badge-highlight">
              <img src="assets/img/construction/badge-5.webp" alt="Quality Excellence Badge" class="img-fluid">
              <div class="badge-content">
                <h4>Premier Contractor Status</h4>
                <p>Recognized by the state board for outstanding quality and safety standards</p>
              </div>
            </div>
          </div>
        </div>

        <div class="certification-grid" data-aos="fade-up" data-aos-delay="400">

          <div class="cert-card" data-aos="flip-left" data-aos-delay="100">
            <div class="cert-icon">
              <img src="assets/img/construction/badge-1.webp" alt="ISO 9001" class="img-fluid">
            </div>
            <div class="cert-details">
              <h5>ISO 9001:2015</h5>
              <span class="cert-category">Quality Management</span>
              <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh.</p>
            </div>
          </div>

          <div class="cert-card" data-aos="flip-left" data-aos-delay="200">
            <div class="cert-icon">
              <img src="assets/img/construction/badge-2.webp" alt="OSHA" class="img-fluid">
            </div>
            <div class="cert-details">
              <h5>OSHA 30-Hour</h5>
              <span class="cert-category">Safety Standards</span>
              <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus vestibulum.</p>
            </div>
          </div>

          <div class="cert-card" data-aos="flip-left" data-aos-delay="300">
            <div class="cert-icon">
              <img src="assets/img/construction/badge-3.webp" alt="Licensed" class="img-fluid">
            </div>
            <div class="cert-details">
              <h5>State Licensed</h5>
              <span class="cert-category">Legal Compliance</span>
              <p>Donec rutrum congue leo eget malesuada. Vestibulum ac diam sit amet quam.</p>
            </div>
          </div>

          <div class="cert-card" data-aos="flip-left" data-aos-delay="400">
            <div class="cert-icon">
              <img src="assets/img/construction/badge-4.webp" alt="Green Building" class="img-fluid">
            </div>
            <div class="cert-details">
              <h5>LEED Certified</h5>
              <span class="cert-category">Sustainable Building</span>
              <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</p>
            </div>
          </div>

          <div class="cert-card" data-aos="flip-left" data-aos-delay="500">
            <div class="cert-icon">
              <img src="assets/img/construction/badge-6.webp" alt="Insurance" class="img-fluid">
            </div>
            <div class="cert-details">
              <h5>Fully Insured</h5>
              <span class="cert-category">Risk Management</span>
              <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.</p>
            </div>
          </div>

          <div class="cert-card" data-aos="flip-left" data-aos-delay="600">
            <div class="cert-icon">
              <img src="assets/img/construction/badge-7.webp" alt="Training" class="img-fluid">
            </div>
            <div class="cert-details">
              <h5>Skills Certified</h5>
              <span class="cert-category">Professional Training</span>
              <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim mauris blandit.</p>
            </div>
          </div>

        </div>

        <div class="achievements-banner" data-aos="zoom-in" data-aos-delay="700">
          <div class="row text-center">
            <div class="col-lg-3 col-sm-6">
              <div class="achievement-item">
                <i class="bi bi-award"></i>
                <h3>15+</h3>
                <p>Industry Awards</p>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="achievement-item">
                <i class="bi bi-shield-check"></i>
                <h3>Zero</h3>
                <p>Safety Incidents</p>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="achievement-item">
                <i class="bi bi-clock-history"></i>
                <h3>18</h3>
                <p>Years Experience</p>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="achievement-item">
                <i class="bi bi-people"></i>
                <h3>350+</h3>
                <p>Satisfied Clients</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Certifications Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Team</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-card featured">
              <div class="team-header">
                <div class="team-image">
                  <img src="assets/img/construction/team-1.webp" class="img-fluid" alt="">
                  <div class="experience-badge">15+ Years</div>
                </div>
                <div class="team-info">
                  <h4>Marcus Thompson</h4>
                  <span class="position">Project Manager</span>
                  <div class="contact-info">
                    <a href="mailto:marcus@example.com"><i class="bi bi-envelope"></i> marcus@example.com</a>
                    <a href="tel:+1555123456"><i class="bi bi-telephone"></i> +1 (555) 123-456</a>
                  </div>
                </div>
              </div>
              <div class="team-details">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="credentials">
                  <div class="cred-item">
                    <i class="bi bi-award"></i>
                    <span>PMP Certified</span>
                  </div>
                  <div class="cred-item">
                    <i class="bi bi-shield-check"></i>
                    <span>OSHA 30</span>
                  </div>
                </div>
                <div class="social-links">
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                  <a href="#"><i class="bi bi-twitter-x"></i></a>
                  <a href="#"><i class="bi bi-facebook"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Featured Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-card featured">
              <div class="team-header">
                <div class="team-image">
                  <img src="assets/img/construction/team-2.webp" class="img-fluid" alt="">
                  <div class="experience-badge">12+ Years</div>
                </div>
                <div class="team-info">
                  <h4>Sarah Rodriguez</h4>
                  <span class="position">Site Supervisor</span>
                  <div class="contact-info">
                    <a href="mailto:sarah@example.com"><i class="bi bi-envelope"></i> sarah@example.com</a>
                    <a href="tel:+1555123457"><i class="bi bi-telephone"></i> +1 (555) 123-457</a>
                  </div>
                </div>
              </div>
              <div class="team-details">
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="credentials">
                  <div class="cred-item">
                    <i class="bi bi-person-badge"></i>
                    <span>Licensed Contractor</span>
                  </div>
                  <div class="cred-item">
                    <i class="bi bi-tools"></i>
                    <span>Site Management</span>
                  </div>
                </div>
                <div class="social-links">
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                  <a href="#"><i class="bi bi-twitter-x"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Featured Team Member -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="team-card compact">
              <div class="member-photo">
                <img src="assets/img/construction/team-3.webp" class="img-fluid" alt="">
                <div class="hover-overlay">
                  <div class="overlay-content">
                    <h5>David Chen</h5>
                    <span>Lead Engineer</span>
                    <div class="quick-contact">
                      <a href="#"><i class="bi bi-envelope"></i></a>
                      <a href="#"><i class="bi bi-telephone"></i></a>
                      <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="member-summary">
                <h5>David Chen</h5>
                <span>Lead Engineer</span>
                <div class="skills">
                  <span class="skill-tag">PE License</span>
                  <span class="skill-tag">LEED AP</span>
                </div>
              </div>
            </div>
          </div><!-- End Compact Team Member -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="team-card compact">
              <div class="member-photo">
                <img src="assets/img/construction/team-4.webp" class="img-fluid" alt="">
                <div class="hover-overlay">
                  <div class="overlay-content">
                    <h5>Lisa Johnson</h5>
                    <span>Safety Coordinator</span>
                    <div class="quick-contact">
                      <a href="#"><i class="bi bi-envelope"></i></a>
                      <a href="#"><i class="bi bi-telephone"></i></a>
                      <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="member-summary">
                <h5>Lisa Johnson</h5>
                <span>Safety Coordinator</span>
                <div class="skills">
                  <span class="skill-tag">CSP Certified</span>
                  <span class="skill-tag">Safety Expert</span>
                </div>
              </div>
            </div>
          </div><!-- End Compact Team Member -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-card compact">
              <div class="member-photo">
                <img src="assets/img/construction/team-5.webp" class="img-fluid" alt="">
                <div class="hover-overlay">
                  <div class="overlay-content">
                    <h5>Robert Martinez</h5>
                    <span>Equipment Operator</span>
                    <div class="quick-contact">
                      <a href="#"><i class="bi bi-envelope"></i></a>
                      <a href="#"><i class="bi bi-telephone"></i></a>
                      <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="member-summary">
                <h5>Robert Martinez</h5>
                <span>Equipment Operator</span>
                <div class="skills">
                  <span class="skill-tag">Heavy Equipment</span>
                  <span class="skill-tag">10+ Years</span>
                </div>
              </div>
            </div>
          </div><!-- End Compact Team Member -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-card compact">
              <div class="member-photo">
                <img src="assets/img/construction/team-6.webp" class="img-fluid" alt="">
                <div class="hover-overlay">
                  <div class="overlay-content">
                    <h5>Emily Davis</h5>
                    <span>Quality Control Specialist</span>
                    <div class="quick-contact">
                      <a href="#"><i class="bi bi-envelope"></i></a>
                      <a href="#"><i class="bi bi-telephone"></i></a>
                      <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="member-summary">
                <h5>Emily Davis</h5>
                <span>Quality Control Specialist</span>
                <div class="skills">
                  <span class="skill-tag">Quality Assurance</span>
                  <span class="skill-tag">Certified</span>
                </div>
              </div>
            </div>
          </div><!-- End Compact Team Member -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="team-card compact">
              <div class="member-photo">
                <img src="assets/img/construction/team-7.webp" class="img-fluid" alt="">
                <div class="hover-overlay">
                  <div class="overlay-content">
                    <h5>James Wilson</h5>
                    <span>Foreman</span>
                    <div class="quick-contact">
                      <a href="#"><i class="bi bi-envelope"></i></a>
                      <a href="#"><i class="bi bi-telephone"></i></a>
                      <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="member-summary">
                <h5>James Wilson</h5>
                <span>Foreman</span>
                <div class="skills">
                  <span class="skill-tag">Supervisor</span>
                  <span class="skill-tag">Leadership</span>
                </div>
              </div>
            </div>
          </div><!-- End Compact Team Member -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="team-card compact">
              <div class="member-photo">
                <img src="assets/img/construction/team-8.webp" class="img-fluid" alt="">
                <div class="hover-overlay">
                  <div class="overlay-content">
                    <h5>Amanda Taylor</h5>
                    <span>Estimator</span>
                    <div class="quick-contact">
                      <a href="#"><i class="bi bi-envelope"></i></a>
                      <a href="#"><i class="bi bi-telephone"></i></a>
                      <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="member-summary">
                <h5>Amanda Taylor</h5>
                <span>Estimator</span>
                <div class="skills">
                  <span class="skill-tag">Cost Professional</span>
                  <span class="skill-tag">Analytics</span>
                </div>
              </div>
            </div>
          </div><!-- End Compact Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5 align-items-center">

          <div class="col-lg-6">
            <div class="cta-hero-content" data-aos="fade-right" data-aos-delay="200">
              <div class="badge-wrapper">
                <span class="cta-badge">
                  <i class="bi bi-shield-check"></i>
                  Licensed &amp; Bonded Since 2008
                </span>
              </div>

              <h2>Transform Your Space with Expert Construction Services</h2>
              <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae. Mauris viverra veniam sit amet lacus cursus venenatis. Donec auctor blandit quam, ac sollicitudin eros convallis vel.</p>

              <div class="feature-highlights">
                <div class="highlight-item">
                  <i class="bi bi-check-circle-fill"></i>
                  <span>Free project consultation and detailed estimates</span>
                </div>
                <div class="highlight-item">
                  <i class="bi bi-check-circle-fill"></i>
                  <span>Comprehensive insurance coverage for all projects</span>
                </div>
                <div class="highlight-item">
                  <i class="bi bi-check-circle-fill"></i>
                  <span>24/7 emergency response and support services</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="cta-form-section" data-aos="fade-left" data-aos-delay="300">
              <div class="form-container">
                <div class="form-header">
                  <h3>Request Your Free Quote</h3>
                  <p>Get started with your next construction project today</p>
                </div>

                <form action="forms/get-a-quote.php" method="post" class="php-email-form">
                  <div class="row g-3">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Your Email" required="">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <input type="tel" name="phone" class="form-control" placeholder="Phone Number" required="">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <select name="type" class="form-control" required="">
                          <option value="">Select Project Type</option>
                          <option value="residential">Residential Construction</option>
                          <option value="commercial">Commercial Building</option>
                          <option value="renovation">Renovation &amp; Remodeling</option>
                          <option value="industrial">Industrial Projects</option>
                          <option value="other">Other</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <textarea name="message" class="form-control" rows="4" placeholder="Project Details" required=""></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your quote request has been sent. Thank you!</div>

                  <div class="form-actions">
                    <button type="submit" class="btn btn-primary">
                      <i class="bi bi-send"></i>
                      Send Quote Request
                    </button>

                    <div class="contact-alternative">
                      <span>Or call us directly:</span>
                      <a href="tel:+15558921567" class="phone-link">
                        <i class="bi bi-telephone-fill"></i>
                        +1 (555) 892-1567
                      </a>
                    </div>
                  </div>
                </form>
              </div>

              <div class="trust-indicators" data-aos="fade-up" data-aos-delay="400">
                <div class="row g-3">
                  <div class="col-4">
                    <div class="trust-item">
                      <div class="trust-icon">
                        <i class="bi bi-clock"></i>
                      </div>
                      <div class="trust-content">
                        <span class="trust-number">24h</span>
                        <span class="trust-label">Response Time</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="trust-item">
                      <div class="trust-icon">
                        <i class="bi bi-star-fill"></i>
                      </div>
                      <div class="trust-content">
                        <span class="trust-number">4.9</span>
                        <span class="trust-label">Customer Rating</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="trust-item">
                      <div class="trust-icon">
                        <i class="bi bi-hammer"></i>
                      </div>
                      <div class="trust-content">
                        <span class="trust-number">350+</span>
                        <span class="trust-label">Projects Done</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Call To Action Section -->
</div>
    <!------ Formulaire d'Ouverture du Dossier Client - Modal ------>
    <div class="modal fade" id="questionnaireModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <!-- Header -->
          <div class="modal-header justify-content-center">
            <h4 class="modal-title text-center">
              QUESTIONNAIRE D’OUVERTURE DU DOSSIER CLIENT
            </h4>
            <button type="button" class="btn-close position-absolute end-0 me-3" data-bs-dismiss="modal"></button>
          </div>

          <div class="text-center mt-2 mb-3">
            <a href="assets/docs/Questionnaire-ouverture-dossier-client.pdf"
              class="btn btn-sm shadow fw-bold"
              target="_blank"
              download>
              TÉLÉCHARGER LE QUESTIONNAIRE EN PDF
            </a>
          </div>


          <!-- Body -->
          <div class="modal-body">

            <form action="#" method="post">

              <!-- Informations client -->
              <div class="row g-3 mb-4">
                <div class="col-md-3">
                  <label class="form-label">Date</label>
                  <input type="date" class="form-control" required>
                </div>
                <div class="col-md-3">
                  <label class="form-label">Nom du client</label>
                  <input type="text" class="form-control" required>
                </div>
                <div class="col-md-3">
                  <label class="form-label">Téléphone</label>
                  <input type="tel" class="form-control" required>
                </div>
                <div class="col-md-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control" required>
                </div>
              </div>

              <!-- SECTION 1 -->
              <h5>1. INFORMATIONS GÉNÉRALES</h5>

              <p><strong>1. Quel est l’objectif de votre projet ?</strong></p>
              <div class="form-check"><input class="form-check-input" type="checkbox"> Résidence principale</div>
              <div class="form-check"><input class="form-check-input" type="checkbox"> Maison de vacances</div>
              <div class="form-check"><input class="form-check-input" type="checkbox"> Investissement locatif</div>
              <div class="form-check"><input class="form-check-input" type="checkbox"> Autre</div>

              <p class="mt-3"><strong>2. Avez-vous déjà un terrain ?</strong></p>
              <div class="form-check"><input class="form-check-input" type="radio" name="terrain"> Oui</div>
              <div class="form-check"><input class="form-check-input" type="radio" name="terrain"> Non (souhaitez-vous de l’aide pour en trouver un ?)</div>

              <div class="row g-3 mt-2">
                <div class="col-md-4"><input class="form-control" placeholder="Lieu"></div>
                <div class="col-md-4"><input class="form-control" placeholder="Surface"></div>
                <div class="col-md-4"><input class="form-control" placeholder="Orientation"></div>
              </div>

              <textarea class="form-control mt-3" placeholder="Contraintes spécifiques (pente, voisinage, etc.)"></textarea>

              <p class="mt-4"><strong>3. Quel est votre budget total estimé pour la construction ?</strong></p>
              <div class="form-check"><input class="form-check-input" type="radio" name="budget"> Moins de 150 000 $</div>
              <div class="form-check"><input class="form-check-input" type="radio" name="budget"> 150 000 – 250 000 $</div>
              <div class="form-check"><input class="form-check-input" type="radio" name="budget"> 250 000 – 500 000 $</div>
              <div class="form-check"><input class="form-check-input" type="radio" name="budget"> 500 000 $ et plus</div>

              <p class="mt-3"><strong>4. Avez-vous des inspirations ou des références ?</strong></p>
              <div class="form-check"><input class="form-check-input" type="radio" name="inspiration"> Oui (photos, liens, plans…)</div>
              <div class="form-check"><input class="form-check-input" type="radio" name="inspiration"> Non, je suis ouvert(e) aux suggestions</div>

              <hr>

              <!-- SECTION 2 -->
              <h5>2. ORGANISATION DES ESPACES</h5>

              <p><strong>5. Combien de chambres souhaitez-vous ?</strong></p>
              <div class="form-check"><input class="form-check-input" type="checkbox"> 1</div>
              <div class="form-check"><input class="form-check-input" type="checkbox"> 2</div>
              <div class="form-check"><input class="form-check-input" type="checkbox"> 3</div>
              <div class="form-check"><input class="form-check-input" type="checkbox"> 4+</div>

              <p class="mt-3"><strong>6. Combien de salles de bain souhaitez-vous ?</strong></p>
              <div class="form-check"><input class="form-check-input" type="checkbox"> 1</div>
              <div class="form-check"><input class="form-check-input" type="checkbox"> 2</div>
              <div class="form-check"><input class="form-check-input" type="checkbox"> 3+</div>

              <p class="mt-3"><strong>7. Préférez-vous une maison :</strong></p>
              <div class="form-check"><input class="form-check-input" type="radio" name="type-maison"> De plain-pied</div>
              <div class="form-check"><input class="form-check-input" type="radio" name="type-maison"> À étage(s)</div>
              <div class="form-check"><input class="form-check-input" type="radio" name="type-maison"> Indifférent</div>

              <p class="mt-3"><strong>8. Souhaitez-vous une cuisine :</strong></p>
              <div class="form-check"><input class="form-check-input" type="radio" name="cuisine"> Ouverte</div>
              <div class="form-check"><input class="form-check-input" type="radio" name="cuisine"> Fermée</div>

              <p class="mt-3"><strong>9. Souhaitez-vous un espace supplémentaire ?</strong></p>
              <div class="form-check"><input class="form-check-input" type="checkbox"> Bureau</div>
              <div class="form-check"><input class="form-check-input" type="checkbox"> Dressing</div>
              <div class="form-check"><input class="form-check-input" type="checkbox"> Buanderie</div>
              <div class="form-check"><input class="form-check-input" type="checkbox"> Cellier</div>
              <div class="form-check"><input class="form-check-input" type="checkbox"> Garage</div>

              <input class="form-control mt-2" placeholder="Nombre de voitures (garage)">
              <input class="form-control mt-2" placeholder="Autre espace">

              <p class="mt-3"><strong>10. Prévoyez-vous des espaces extérieurs ?</strong></p>
              <div class="form-check"><input class="form-check-input" type="checkbox"> Terrasse</div>
              <div class="form-check"><input class="form-check-input" type="checkbox"> Jardin</div>
              <div class="form-check"><input class="form-check-input" type="checkbox"> Piscine</div>
              <div class="form-check"><input class="form-check-input" type="checkbox"> Cuisine externe</div>

              <hr>

              <!-- SECTION 3 -->
              <h5>3. ESTHÉTIQUE ET FINITIONS</h5>

              <p><strong>14. Quel style architectural préférez-vous ?</strong></p>
              <div class="form-check"><input class="form-check-input" type="checkbox"> Moderne</div>
              <div class="form-check"><input class="form-check-input" type="checkbox"> Traditionnel</div>
              <div class="form-check"><input class="form-check-input" type="checkbox"> Minimaliste</div>
              <div class="form-check"><input class="form-check-input" type="checkbox"> Rustique</div>
              <div class="form-check"><input class="form-check-input" type="checkbox"> Robuste</div>

              <p class="mt-3"><strong>15. Préférences matériaux de construction :</strong></p>
              <div class="form-check"><input class="form-check-input" type="checkbox"> Bois</div>
              <div class="form-check"><input class="form-check-input" type="checkbox"> Béton</div>
              <div class="form-check"><input class="form-check-input" type="checkbox"> Brique</div>
              <div class="form-check"><input class="form-check-input" type="checkbox"> Métal</div>
              <div class="form-check"><input class="form-check-input" type="checkbox"> Pierre</div>

              <p class="mt-3"><strong>16. Souhaitez-vous des éléments spécifiques ?</strong></p>
              <div class="form-check"><input class="form-check-input" type="checkbox"> Grandes baies vitrées</div>
              <div class="form-check"><input class="form-check-input" type="checkbox"> Puits de lumière</div>
              <div class="form-check"><input class="form-check-input" type="checkbox"> Cheminée</div>

              <hr>

              <!-- SECTION 4 -->
              <h5>4. RÉGLEMENTATIONS ET DÉLAIS</h5>

              <p><strong>17. Connaissez-vous les règles d’urbanisme locales ?</strong></p>
              <div class="form-check"><input class="form-check-input" type="radio" name="urbanisme"> Oui</div>
              <div class="form-check"><input class="form-check-input" type="radio" name="urbanisme"> Non, j’ai besoin d’aide pour les vérifier</div>

              <p class="mt-3"><strong>18. Avez-vous un délai souhaité pour la conception et la construction ?</strong></p>
              <div class="form-check"><input class="form-check-input" type="radio" name="delai"> Moins de 6 mois</div>
              <div class="form-check"><input class="form-check-input" type="radio" name="delai"> 6 mois et plus</div>

              <!-- Submit -->
              <div class="text-end mt-4">
                <button type="submit" class="btn btn-primary">
                  Soumettre le questionnaire
                </button>
              </div>

            </form>

          </div>
        </div>
      </div>
    </div>


  <!-- Actu Modal --><!-- Modal -->
<div id="videoModal" class="modal">
  <div class="modal-content">
    <span class="close-btn">&times;</span>

    <div class="modal-body">
      <?php
      $configFile = __DIR__ . '/data/video_modal.json';
      $vm = null;
      if (file_exists($configFile)) {
          $vm = json_decode(file_get_contents($configFile), true);
      }
      if (!$vm) {
          $vm = ['type' => 'video', 'src' => 'assets/video/Main-video-on-site.mp4', 'title' => 'Actualités sur nos activités', 'description' => 'Découvrez en vidéo nos projets récents et notre engagement.'];
      }
      ?>

      <h2><?php echo htmlspecialchars($vm['title']); ?></h2>
      <p><?php echo htmlspecialchars($vm['description']); ?></p>

      <div class="video-container">
        <?php if ($vm['type'] === 'video'): ?>
          <video class="img-fluid" autoplay muted loop playsinline style="width:100%;height:360px;object-fit:cover">
            <source src="/<?php echo ltrim($vm['src'], '/'); ?>" type="video/mp4">
            Votre navigateur ne supporte pas la vidéo.
          </video>
        <?php else: ?>
          <img src="/<?php echo ltrim($vm['src'], '/'); ?>" alt="<?php echo htmlspecialchars($vm['title']); ?>" style="width:100%;height:360px;object-fit:cover" />
        <?php endif; ?>
      </div>
    </div>
  </div>
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