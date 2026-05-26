<?php
require_once __DIR__ . '/includes/data.php';
$d = ccs_data(); $current='team';
$pageTitle='Team — '.$d['society']['name'];
include __DIR__ . '/includes/header.php';
?>
<section class="page-head">
  <div class="eyebrow">People behind the society</div>
  <h1>The <em>Pioneers & Leaders</em>.</h1>
  <p>Meet the visionary student leaders, coordinators, and founders driving the cultural, creative, and technical landscape at NIT Sikkim.</p>
</section>

<!-- TEAM TOGGLE CONTROL -->
<div class="team-toggle-wrapper">
  <div class="team-toggle-container">
    <button class="team-toggle-btn active" data-target="current-session">Current Committee</button>
    <button class="team-toggle-btn" data-target="founding-session">Founding Members</button>
  </div>
</div>

<!-- CURRENT SESSION GROUP -->
<div id="current-session" class="team-group active">
  <!-- CORE COMMITTEE -->
  <section class="section">
    <div class="section-head">
      <h2>Core <em>Committee</em> <small style="display:block; font-size: 1.1rem; color: var(--gold); font-family: var(--body); font-weight: 500; margin-top: 0.5rem; text-transform: uppercase; letter-spacing: 0.1em;">Session 2026-27</small></h2>
      <p>The central leadership team steering administrative, financial, and executive decisions for the Cultural & Creative Society.</p>
    </div>
    <div class="team-grid">
      <?php foreach ($d['core_committee'] as $m): ?>
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

  <!-- COORDINATORS -->
  <section class="section" style="padding-top: 2rem;">
    <div class="section-head">
      <h2>Society <em>Coordinators</em> <small style="display:block; font-size: 1.1rem; color: var(--gold); font-family: var(--body); font-weight: 500; margin-top: 0.5rem; text-transform: uppercase; letter-spacing: 0.1em;">Session 2026-27</small></h2>
      <p>The creative powerhouse of CCS, heading specialized domains across cultural events, photography, sponsorship, graphics, and technical development.</p>
    </div>
    <div class="team-grid">
      <?php foreach ($d['coordinators'] as $m): ?>
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
</div>

<!-- FOUNDING SESSION GROUP -->
<div id="founding-session" class="team-group">
  <!-- FOUNDING MEMBERS -->
  <section class="section">
    <div class="section-head">
      <h2>Founding <em>Members</em> <small style="display:block; font-size: 1.1rem; color: var(--gold); font-family: var(--body); font-weight: 500; margin-top: 0.5rem; text-transform: uppercase; letter-spacing: 0.1em;">Session 2025-26</small></h2>
      <p>The inaugural cohort of student leaders who laid down the framework, established the sub-clubs, and charted the initial legacy of CCS.</p>
    </div>
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
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>
