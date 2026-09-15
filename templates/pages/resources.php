<?php
$page_title = 'China–Africa Resource Hub — CACBUA';
$engagement_areas = require __DIR__ . '/../../content/engagement-areas.php';
$header_variant = 'solid';
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
?>
<main>
	<section class="resource-hero">
		<div class="container">
			<p class="breadcrumbs"><a href="index.php">Home</a> › Resources</p>
			<div class="resource-hero-grid">
				<div>
					<p class="eyebrow light">Resources</p>
					<h1>China–Africa Resource Hub</h1>
				</div>
				<p>Practical information for businesses, researchers and institutions navigating China–Africa trade, investment and cross-border cooperation.</p>
			</div>
		</div>
	</section>

	<section class="section resource-directory">
		<div class="container">
			<div class="section-heading">
				<p class="eyebrow">Start with your objective</p>
				<h2>Find the right information and access point</h2>
				<p>Use the hub to move directly to CACBUA’s current analysis, market intelligence, trade indicators and cooperation pathways.</p>
			</div>

			<div class="resource-grid">
				<article class="resource-card resource-card-featured">
					<span class="resource-card-number">01</span>
					<div>
						<p class="eyebrow">Trade &amp; market access</p>
						<h2>Navigate trade and market opportunities</h2>
						<p>Guidance and analysis for organizations exploring China–Africa trade and market opportunities.</p>
						<div class="resource-links">
							<a href="opportunities.php">Explore opportunities <span aria-hidden="true">→</span></a>
							<a href="publication-zero-tariff-2026.php">Read the export guide <span aria-hidden="true">→</span></a>
						</div>
					</div>
				</article>

				<article class="resource-card">
					<span class="resource-card-number">02</span>
					<div>
						<p class="eyebrow">Policy &amp; research</p>
						<h2>Understand policy and economic developments</h2>
						<p>Explore CACBUA policy analysis, research topics and publications covering developments affecting China–Africa commerce.</p>
						<div class="resource-links"><a href="research.php">Explore research <span aria-hidden="true">→</span></a></div>
					</div>
				</article>

				<article class="resource-card">
					<span class="resource-card-number">03</span>
					<div>
						<p class="eyebrow">Trade data &amp; monitor</p>
						<h2>Follow key China–Africa trade indicators</h2>
						<p>Explore key indicators and developments shaping China–Africa trade.</p>
						<div class="resource-links"><a href="index.php#trade-monitor">View the Trade Monitor <span aria-hidden="true">→</span></a></div>
					</div>
				</article>

				<article class="resource-card resource-card-featured">
					<span class="resource-card-number">04</span>
					<div>
						<p class="eyebrow">Events &amp; cooperation</p>
						<h2>Connect through activity and partnership</h2>
						<p>Explore CACBUA events, institutional engagement and cross-border cooperation activities.</p>
						<div class="resource-links">
							<a href="events.php">Explore events <span aria-hidden="true">→</span></a>
							<a href="cooperation.php">Explore cooperation <span aria-hidden="true">→</span></a>
						</div>
					</div>
				</article>
			</div>
		</div>
	</section>

	<section class="section resource-subjects">
		<div class="container">
			<div class="section-heading-row">
				<div class="section-heading">
					<p class="eyebrow">Explore by subject</p>
					<h2>Resources across CACBUA’s engagement areas</h2>
					<p>Move from a priority theme to related research, market intelligence, events, and cooperation pathways.</p>
				</div>
				<a class="button button-ghost-dark" href="research.php#topics">Browse research themes</a>
			</div>
			<div class="engagement-grid engagement-grid-compact">
				<?php foreach ( $engagement_areas as $i => $area ) : ?>
					<a class="engagement-card" href="about.php#<?php echo htmlspecialchars( $area['slug'] ); ?>">
						<span class="num"><?php echo sprintf( '%02d', $i + 1 ); ?></span>
						<h3><?php echo htmlspecialchars( $area['title'] ); ?></h3>
					</a>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="resource-guidance">
		<div class="container resource-guidance-inner">
			<div>
				<p class="eyebrow light">Need a specific resource?</p>
				<h2>Tell CACBUA what you are trying to understand or achieve.</h2>
			</div>
			<a class="button button-primary" href="contact.php?inquiry=research#contact-options">Discuss your request</a>
		</div>
	</section>
</main>

<?php require __DIR__ . '/../partials/footer.php'; ?>
