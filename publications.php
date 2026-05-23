<?php
require_once __DIR__ . '/includes/data.php';
$d = ccs_data(); $current='publications';
$pageTitle='Publications — '.$d['society']['name'];
include __DIR__ . '/includes/header.php';
?>
<section class="page-head">
  <div class="eyebrow">Publications</div>
  <h1>Words, <em>printed loud</em>.</h1>
  <p>Magazines, zines and event booklets put together by the CCS editorial circle.</p>
</section>
<section class="section">
  <div class="pub-grid">
    <?php foreach ($d['publications'] as $p): ?>
      <article class="pub reveal">
        <div class="pub-cover"><img src="<?= e($p['cover']) ?>" alt="<?= e($p['title']) ?>" loading="lazy"/></div>
        <div>
          <div class="pub-type"><?= e($p['type']) ?></div>
          <h3><?= e($p['title']) ?></h3>
          <div class="pub-date"><?= e($p['date']) ?></div>
          <p class="pub-desc"><?= e($p['description']) ?></p>
          <a href="<?= e($p['link']) ?>" class="pub-link">Read / Download →</a>
        </div>
      </article>
    <?php endforeach; ?>
  </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
