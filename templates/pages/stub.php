<?php
/**
 * Generic interior placeholder page.
 * Expects $stub_title and $stub_note to be set before include.
 * These are intentionally NOT full redesigns — Phase 1 is homepage-only,
 * per the approved scope. See docs/content-status.md.
 */
$page_title = ( $stub_title ?? 'Page' ) . ' — CACBUA (Phase 2 preview)';
$header_variant = 'solid';
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
?>
<section class="stub-page">
	<div class="container">
		<span class="content-status">Phase 2 — page not yet built</span>
		<h1><?php echo htmlspecialchars( $stub_title ?? 'Page' ); ?></h1>
		<p><?php echo htmlspecialchars( $stub_note ?? 'This interior page will be designed in the next phase, after the homepage is reviewed and approved.' ); ?></p>
		<a class="back-home" href="index.php">← Back to homepage</a>
	</div>
</section>
<?php require __DIR__ . '/../partials/footer.php'; ?>
