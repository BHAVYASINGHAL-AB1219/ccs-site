<?php
require_once __DIR__ . '/includes/data.php';
$d = ccs_data(); $current='team';
$pageTitle='Team — '.$d['society']['name'];
include __DIR__ . '/includes/header.php';
?>
<section class="page-head">
  <div class="eyebrow">The Pioneers</div>
  <h1>Founding <em>Members</em>.</h1>
  <p>Meet the visionary student leaders who laid the foundation for the Cultural & Creative Society (CCS) at NIT Sikkim. While subsequent drafts of this portal will introduce active yearly student chapters, these are the pioneering founders who established our legacy.</p>
</section>
<section class="section">
  <div class="team-grid">
    <?php foreach ($d['team'] as $m): ?>
      <article class="member reveal">
        <?php if (!empty($m['img']) && file_exists(__DIR__ . '/' . $m['img'])): ?>
          <img src="<?= e($m['img']) ?>" alt="<?= e($m['name']) ?>" loading="lazy"/>
        <?php else: ?>
          <div class="member-placeholder"><?= e(substr($m['name'], 0, 1)) ?></div>
        <?php endif; ?>
        <div class="member-info">
          <div class="member-name"><?= e($m['name']) ?></div>
          <div class="member-role"><?= e($m['role']) ?></div>
        </div>
      </article>
    <?php endforeach; ?>
  </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
