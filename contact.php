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
      <div class="cinfo-l">Email</div>
      <div class="cinfo-v"><a href="mailto:<?= e($d['contact']['email']) ?>"><?= e($d['contact']['email']) ?></a></div>
    </div>
    <div class="cinfo">
      <div class="cinfo-l">Find us</div>
      <div class="cinfo-v"><?= e($d['contact']['address']) ?></div>
    </div>
    <div class="cinfo">
      <div class="cinfo-l">Follow</div>
      <div class="socials">
        <a href="javascript:void(0)" class="disabled" title="Coming Soon">IG</a>
        <a href="javascript:void(0)" class="disabled" title="Coming Soon">YT</a>
        <a href="javascript:void(0)" class="disabled" title="Coming Soon">in</a>
      </div>
    </div>
  </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
