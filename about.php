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
</section>

<section class="section patron-section reveal" style="text-align: center;">
  <div class="section-head" style="margin-bottom: 3rem;">
    <h2>Our <em>Patron</em></h2>
  </div>
  <div class="team-grid" style="display: flex; justify-content: center; gap: 2rem;">
    <?php $patron = $d['about']['patron']; ?>
    <article class="member" style="max-width: 350px; width: 100%;">
      <?php if (!empty($patron['img']) && file_exists(__DIR__ . '/' . $patron['img'])): ?>
        <img src="<?= e($patron['img']) ?>" alt="<?= e($patron['name']) ?>" loading="lazy"/>
      <?php else: ?>
        <div class="member-placeholder"><?= e(substr($patron['name'], 0, 1)) ?></div>
      <?php endif; ?>
      <div class="member-info">
        <div class="member-name"><?= e($patron['name']) ?></div>
        <div class="member-role"><?= e($patron['role']) ?></div>
        <div class="member-role" style="font-size: 0.9em; margin-top: 0.25rem; opacity: 0.8;"><?= e($patron['society']) ?></div>
      </div>
    </article>
  </div>

  <div class="section-head" style="margin-top: 4rem; margin-bottom: 3rem;">
    <h2>Our <em>Mentors & Administration</em></h2>
  </div>
  <div class="team-grid" style="display: flex; justify-content: center; flex-wrap: wrap; gap: 2rem;">
    <?php foreach ($d['about']['advisors'] as $advisor): ?>
    <article class="member" style="max-width: 350px; width: 100%;">
      <?php if (!empty($advisor['img']) && file_exists(__DIR__ . '/' . $advisor['img'])): ?>
        <img src="<?= e($advisor['img']) ?>" alt="<?= e($advisor['name']) ?>" loading="lazy"/>
      <?php else: ?>
        <div class="member-placeholder"><?= e(substr($advisor['name'], 0, 1)) ?></div>
      <?php endif; ?>
      <div class="member-info">
        <div class="member-name"><?= e($advisor['name']) ?></div>
        <div class="member-role"><?= e($advisor['role']) ?></div>
      </div>
    </article>
    <?php endforeach; ?>
  </div>
</section>

<section class="section">
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
