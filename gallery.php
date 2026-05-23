<?php
require_once __DIR__ . '/includes/data.php';
$d = ccs_data(); $current='gallery';
$pageTitle='Gallery — '.$d['society']['name'];
include __DIR__ . '/includes/header.php';
$events = array_values(array_unique(array_column($d['gallery'], 'event')));
?>
<section class="page-head">
  <div class="eyebrow">Gallery</div>
  <h1>Frames from <em>the year</em>.</h1>
  <p>Stage lights, backstage chaos and the in-between moments — including our flagship cultural-tech fest <strong>Abhiyantran 2026</strong>.</p>
</section>
<section class="section">
  <div class="filter-bar">
    <button class="chip active" data-filter="all">All</button>
    <?php foreach ($events as $ev): ?>
      <button class="chip" data-filter="<?= e($ev) ?>"><?= e($ev) ?></button>
    <?php endforeach; ?>
  </div>
  <div class="gallery-grid">
    <?php foreach ($d['gallery'] as $g): ?>
      <div class="gal-item" data-event="<?= e($g['event']) ?>">
        <img src="<?= e($g['src']) ?>" alt="<?= e($g['title']) ?>" loading="lazy"/>
        <div class="gal-cap"><small><?= e($g['event']) ?></small><?= e($g['title']) ?></div>
      </div>
    <?php endforeach; ?>
  </div>
  <div class="lightbox"><img src="" alt=""/></div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
