</main>
<footer class="footer">
  <div class="footer-grid">
    <div>
      <div class="footer-brand">
        <img src="assets/img/logo.jpg" alt="CCS Logo" class="footer-logo" />
        <div class="footer-title"><?= e($d['society']['name']) ?></div>
      </div>
      <p class="footer-sub"><?= e($d['society']['college']) ?></p>
      <p class="footer-tag"><?= e($d['society']['tagline']) ?></p>
    </div>
    <div>
      <div class="footer-h">Explore</div>
      <a href="index.php">Home</a>
      <a href="about.php">About</a>
      <a href="team.php">Team</a>
      <a href="gallery.php">Gallery</a>
      <a href="publications.php">Publications</a>
      <a href="contact.php">Contact</a>
    </div>
    <div>
      <div class="footer-h">Reach us</div>
      <a href="mailto:<?= e($d['contact']['email']) ?>"><?= e($d['contact']['email']) ?></a>
      <p class="footer-sub"><?= e($d['contact']['address']) ?></p>
    </div>
  </div>
  <div class="footer-bottom">
    <span>© <?= date('Y') ?> <?= e($d['society']['name']) ?>. Crafted with care.</span>
    <span>Since <?= e($d['society']['established']) ?></span>
  </div>
</footer>
<script src="assets/js/main.js"></script>
</body>
</html>
