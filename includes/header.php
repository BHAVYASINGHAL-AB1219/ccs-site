<?php
require_once __DIR__ . '/data.php';
$d = ccs_data();
$current = $current ?? 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?= e($pageTitle ?? $d['society']['name']) ?> — <?= e($d['society']['shortName']) ?></title>
<meta name="description" content="<?= e($pageDesc ?? $d['society']['tagline']) ?>" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@400;600;800&family=Inter:wght@300;400;500;600&family=Instrument+Serif:ital@0;1&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
<div class="grain"></div>
<header class="nav">
  <a href="index.php" class="brand">
    <img src="assets/img/logo.jpg" alt="CCS Logo" class="brand-logo" />
    <span class="brand-text"><?= e($d['society']['name']) ?></span>
  </a>
  <nav class="nav-links">
    <a href="index.php" class="<?= $current==='home'?'active':'' ?>">Home</a>
    <a href="about.php" class="<?= $current==='about'?'active':'' ?>">About</a>
    <a href="team.php" class="<?= $current==='team'?'active':'' ?>">Team</a>
    <a href="gallery.php" class="<?= $current==='gallery'?'active':'' ?>">Gallery</a>
    <a href="publications.php" class="<?= $current==='publications'?'active':'' ?>">Publications</a>
    <a href="contact.php" class="<?= $current==='contact'?'active':'' ?>">Contact</a>
  </nav>
  <button class="nav-toggle" aria-label="Menu">☰</button>
</header>
<main>
