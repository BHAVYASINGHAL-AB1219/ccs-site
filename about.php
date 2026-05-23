<?php
require_once __DIR__ . '/includes/data.php';
$d = ccs_data(); $current='about';
$pageTitle='About — '.$d['society']['name'];
$pageDesc=$d['about']['headline'];
include __DIR__ . '/includes/header.php';
?>
<section class="page-head">
  <div class="eyebrow">About us</div>
  <h1><?= e($d['about']['headline']) ?></h1>
  <div class="page-head-desc">
    <?php foreach ($d['about']['fullIntro'] as $p): ?>
      <p><?= e($p) ?></p>
    <?php endforeach; ?>
  </div>
</section>
<section class="section">
  <div class="about-block reveal">
    <div>
      <h3>Our mission</h3>
      <p><?= e($d['about']['mission']) ?></p>
    </div>
    <div>
      <h3>Our vision</h3>
      <p><?= e($d['about']['vision']) ?></p>
    </div>
  </div>
  <div class="stats reveal">
    <?php foreach ($d['about']['highlights'] as $h): ?>
      <div class="stat">
        <div class="stat-v"><?= e($h['value']) ?></div>
        <div class="stat-l"><?= e($h['label']) ?></div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
