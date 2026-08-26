<?php
require_once __DIR__ . '/includes/data.php';
$d = ccs_data(); $current='contact';
$pageTitle='Contact — '.$d['society']['name'];
include __DIR__ . '/includes/header.php';
?>
<section class="page-head">
  <div class="eyebrow">Contact</div>
  <h1>Say <em>hello</em>.</h1>
  <p>For collaboration ideas, sponsorships, or general inquiries, reach out to us through our official channels.</p>
</section>
<section class="section">
  <div class="contact-details-grid">
    <div class="cinfo">
      <div class="cinfo-l">Reach Out</div>
      <div class="cinfo-v" style="font-size: 1.05rem;">
        <div style="margin-bottom: 0.8rem;"><a href="mailto:<?= e($d['contact']['email']) ?>"><?= e($d['contact']['email']) ?></a></div>
        <?php if (!empty($d['contact']['phones'])): foreach ($d['contact']['phones'] as $phone): ?>
          <div style="font-size: 0.95rem; margin-top: 0.4rem; color: var(--ink-dim);"><?= e($phone['name']) ?>: <br><a href="tel:<?= e(str_replace(' ', '', $phone['number'])) ?>" style="color: var(--ink);"><?= e($phone['number']) ?></a></div>
        <?php endforeach; endif; ?>
      </div>
    </div>
    <div class="cinfo">
      <div class="cinfo-l">Find us</div>
      <div class="cinfo-v"><?= e($d['contact']['address']) ?></div>
    </div>
    <div class="cinfo">
      <div class="cinfo-l">Follow</div>
      <div class="socials">
        <a href="<?= e($d['contact']['socials']['linkedin']) ?>" target="_blank" rel="noopener noreferrer">in</a>
      </div>
    </div>
  </div>
</section>


<?php include __DIR__ . '/includes/footer.php'; ?>
