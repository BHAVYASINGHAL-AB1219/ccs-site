<?php
require_once __DIR__ . '/includes/data.php';
$d = ccs_data();
$current = 'home';
$pageTitle = $d['society']['name'];
$pageDesc = $d['society']['tagline'];
include __DIR__ . '/includes/header.php';
?>
<section class="hero">
  <div class="hero-logos">
    <div class="hero-logo-card">
      <div class="hero-logo-ring">
        <img src="assets/img/logo_nit.png" alt="NIT Sikkim Logo" class="hero-logo-img"/>
      </div>
      <div class="hero-logo-label">NIT Sikkim</div>
    </div>
    <div class="hero-logo-divider">
      <span class="hero-logo-divider-line"></span>
      <span class="hero-logo-divider-icon">✦</span>
      <span class="hero-logo-divider-line"></span>
    </div>
    <div class="hero-logo-card">
      <div class="hero-logo-ring">
        <img src="assets/img/logo.jpg" alt="CCS Logo" class="hero-logo-img"/>
      </div>
      <div class="hero-logo-label">Cultural &amp; Creative Society</div>
    </div>
  </div>
  <p class="hero-sub"><?= e($d['about']['intro']) ?></p>
  <div class="hero-cta">
    <a href="gallery.php" class="btn btn-primary">See Abhiyantran 26 →</a>
    <a href="about.php" class="btn btn-ghost">Who we are</a>
  </div>
  <div class="hero-marquee">
    <div class="marquee-track">
      <span>Abhiyantran 2026</span><span>Inter School Innovation Expo 2025</span><span>Model United Nations</span><span>Vigilance Quiz</span><span>Vishwakarma Puja</span><span>Diwali Fest 2025</span><span>Jan Jatiya Gaurav Diwas</span><span>Unnat Bharat Abhiyan</span>
      <!-- Loop duplicate for seamless scrolling -->
      <span>Abhiyantran 2026</span><span>Inter School Innovation Expo 2025</span><span>Model United Nations</span><span>Vigilance Quiz</span><span>Vishwakarma Puja</span><span>Diwali Fest 2025</span><span>Jan Jatiya Gaurav Diwas</span><span>Unnat Bharat Abhiyan</span>
    </div>
  </div>
</section>

<section class="section reveal">
  <div class="section-head">
    <h2>By the <em>numbers</em>.</h2>
    <p>Established in 2025. One ever-growing community of makers, performers and dreamers.</p>
  </div>
  <div class="stats">
    <?php foreach ($d['about']['highlights'] as $h): ?>
      <div class="stat">
        <div class="stat-v"><?= e($h['value']) ?></div>
        <div class="stat-l"><?= e($h['label']) ?></div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<section class="section reveal">
  <div class="section-head">
    <h2>Latest from the <em>archives</em>.</h2>
    <a href="gallery.php" class="btn btn-ghost">Open gallery →</a>
  </div>
  <div class="gallery-grid">
    <?php foreach (array_slice($d['gallery'], 0, 6) as $g): ?>
      <div class="gal-item" data-event="<?= e($g['event']) ?>">
        <img src="<?= e($g['src']) ?>" alt="<?= e($g['title']) ?>" loading="lazy"/>
        <div class="gal-cap"><small><?= e($g['event']) ?></small><?= e($g['title']) ?></div>
      </div>
    <?php endforeach; ?>
  </div>
  <div class="lightbox"><img src="" alt=""/></div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
