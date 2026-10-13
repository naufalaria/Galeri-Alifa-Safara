<?php
$site = json_decode(file_get_contents(__DIR__ . '/assets/data/site.json'), true);
$products = json_decode(file_get_contents(__DIR__ . '/assets/data/products.json'), true);
$faqs = json_decode(file_get_contents(__DIR__ . '/assets/data/faq.json'), true);
$testimonials = json_decode(file_get_contents(__DIR__ . '/assets/data/testimonials.json'), true);
?>
<!doctype html>
<html lang="id" class="scroll-smooth">
  <head>
    <?php include __DIR__ . '/components/head.php'; ?>
  </head>
  <body class="bg-base-canvas text-base-text antialiased selection:bg-primary selection:text-white font-sans">
    <?php include __DIR__ . '/components/announcement.php'; ?>
    <?php include __DIR__ . '/components/navbar.php'; ?>
    <?php include __DIR__ . '/components/hero.php'; ?>
    <?php include __DIR__ . '/components/features.php'; ?>
    <?php include __DIR__ . '/components/catalog.php'; ?>
    <?php include __DIR__ . '/components/story.php'; ?>
    <?php include __DIR__ . '/components/testimonials.php'; ?>
    <?php include __DIR__ . '/components/faq.php'; ?>
    <?php include __DIR__ . '/components/cta.php'; ?>
    <?php include __DIR__ . '/components/footer.php'; ?>
    <?php include __DIR__ . '/components/floating-wa.php'; ?>
    <?php include __DIR__ . '/components/scripts.php'; ?>
  </body>
</html>
