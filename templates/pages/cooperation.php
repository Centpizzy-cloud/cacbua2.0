<?php
/**
 * Cooperation — real page (not a Phase 2 stub).
 * Content status: CACBUA EXISTING CONTENT. Pathways and process steps are
 * reused verbatim from production; nothing invented. Case studies and a
 * partner directory require client-supplied evidence, so they're an honest
 * placeholder rather than fabricated examples. See content/cooperation-data.php.
 */
$coop = require __DIR__ . '/../../content/cooperation-data.php';
$page_title = 'Cooperation — CACBUA';
$header_variant = 'solid';
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
?>
<section class="interior-hero">
	<div class="container">
		<p class="breadcrumbs"><a href="index.php">Home</a> › Cooperation</p>
		<p class="eyebrow light">Membership and partnerships</p>
		<h1>Build practical China–Africa cooperation</h1>
		<p class="interior-lead">CACBUA brings institutions, industry, and researchers together around clearly defined policy, trade, investment, and cultural initiatives.</p>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="section-heading">
			<p class="eyebrow">Who we work with</p>
			<h2>Institutional audiences</h2>
			<p>Missions, chambers of commerce, trade organizations and offices, ministries, research institutions, and industry associations.</p>
		</div>
		<div class="topic-grid">
			<?php foreach ( $coop['pathways'] as $i => $p ) : ?>
				<a class="topic-card" href="contact.php">
					<span class="num">0<?php echo (int) ( $i + 1 ); ?></span>
					<h3><?php echo htmlspecialchars( $p['title'] ); ?></h3>
					<p><?php echo htmlspecialchars( $p['desc'] ); ?></p>
					<span class="topic-card-link"><?php echo htmlspecialchars( $p['cta'] ); ?> →</span>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="section soft">
	<div class="container">
		<div class="section-heading">
			<p class="eyebrow">How cooperation works</p>
			<h2>Clear steps, defined responsibilities</h2>
		</div>
		<div class="pathway-list">
			<?php foreach ( $coop['steps'] as $i => $step ) : ?>
				<article><span class="num">0<?php echo (int) ( $i + 1 ); ?></span><div><h3><?php echo htmlspecialchars( $step ); ?></h3></div></article>
			<?php endforeach; ?>
		</div>
		<div class="content-placeholder-card" style="margin-top:26px">
			<span class="content-status">Client evidence required</span>
			<h3>Verified case studies and partner directory</h3>
			<p>CACBUA must approve roles, outcomes, dates, organization names, and display permission before any partner examples can be shown here.</p>
		</div>
	</div>
</section>

<section class="newsletter">
	<div class="container newsletter-grid">
		<div>
			<p class="eyebrow">Start a conversation</p>
			<h2>Discuss cooperation with CACBUA</h2>
		</div>
		<div><a class="button button-primary" href="contact.php">Contact CACBUA</a></div>
	</div>
</section>

<?php require __DIR__ . '/../partials/footer.php'; ?>
