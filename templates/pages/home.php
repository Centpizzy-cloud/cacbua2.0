<?php
/**
 * Homepage — Phase 1 prototype.
 * Section order approved Aug 26, 2026 (see docs/../cacbua-redesign-investigation-report.md §5):
 *   1. Hero  2. Trade Monitor  3. What CACBUA Does  4. Opportunities
 *   5. Research Topics  6. Latest News & Insights  7. Cooperation
 *   8. Events  9. Leadership quote  10. Newsletter  11. Footer
 */
$page_title = 'CACBUA — Connecting China and Africa Through Trade, Investment and Cooperation';
$header_variant = 'transparent';
require __DIR__ . '/../../templates/partials/head.php';
require __DIR__ . '/../../templates/partials/header.php';
?>

<?php require __DIR__ . '/../sections/hero.php'; ?>
<?php require __DIR__ . '/../sections/trade-monitor.php'; ?>
<?php require __DIR__ . '/../sections/what-cacbua-does.php'; ?>
<?php require __DIR__ . '/../sections/engagement-overview.php'; ?>
<?php require __DIR__ . '/../sections/opportunities.php'; ?>
<?php require __DIR__ . '/../sections/research-topics.php'; ?>
<?php require __DIR__ . '/../sections/latest-news.php'; ?>
<?php require __DIR__ . '/../sections/cooperation.php'; ?>
<?php require __DIR__ . '/../sections/events-preview.php'; ?>
<?php require __DIR__ . '/../sections/leadership-quote.php'; ?>
<?php require __DIR__ . '/../sections/newsletter.php'; ?>

<?php require __DIR__ . '/../../templates/partials/footer.php'; ?>
