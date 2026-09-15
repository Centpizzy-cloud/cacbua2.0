<?php
/**
 * Research — topics page.
 * Content status: mixed, see docs/content-status.md. Topic grid is
 * CACBUA EXISTING CONTENT (verbatim from production); the publications
 * area is honestly marked CLIENT CONTENT REQUIRED rather than porting
 * production's labelled "simulation" copy, which isn't real content.
 */
$topics = require __DIR__ . '/../../content/research-data.php';
$publications = require __DIR__ . '/../../content/publications-data.php';
$page_title = 'Research — CACBUA';
$header_variant = 'solid';
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
?>
<section class="interior-hero">
	<div class="container">
		<p class="breadcrumbs"><a href="index.php">Home</a> › Research</p>
		<p class="eyebrow light">Evidence and analysis</p>
		<h1>Research</h1>
		<p class="interior-lead">Evidence and analysis supporting informed China–Africa policy, trade, investment, and cultural cooperation.</p>
	</div>
</section>

<section class="section soft" id="topics">
	<div class="container">
		<div class="section-heading">
			<p class="eyebrow">Browse by topic</p>
			<h2>Research areas</h2>
			<p>Six connected themes frame CACBUA’s research, policy analysis, and knowledge-exchange priorities.</p>
		</div>
		<div class="topic-grid">
			<?php foreach ( $topics as $i => $t ) : ?>
				<a class="topic-card" href="events.php#<?php echo htmlspecialchars( $t['anchor'] ); ?>">
					<span class="num">0<?php echo (int) ( $i + 1 ); ?></span>
					<h3><?php echo htmlspecialchars( $t['topic'] ); ?></h3>
					<p><?php echo htmlspecialchars( $t['desc'] ); ?></p>
					<span class="topic-card-link">See related event →</span>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="section" id="publications">
	<div class="container">
		<div class="section-heading">
			<p class="eyebrow">Latest publications</p>
			<h2>Research and policy analysis</h2>
		</div>
		<?php if ( ! empty( $publications ) ) : ?>
			<?php foreach ( $publications as $pub ) : ?>
				<article class="research-feature-card">
					<div>
						<span class="content-status"><?php echo htmlspecialchars( strtoupper( $pub['category'] ) ); ?></span>
						<h3><?php echo htmlspecialchars( $pub['title'] ); ?></h3>
						<p class="card-type"><?php echo htmlspecialchars( $pub['subtitle'] ); ?></p>
						<p><?php echo htmlspecialchars( $pub['summary'] ); ?></p>
						<p class="card-type"><?php echo htmlspecialchars( $pub['meta'] ); ?></p>
						<a class="button button-ghost-dark" style="margin-top:12px" href="<?php echo htmlspecialchars( $pub['href'] ); ?>">Read policy brief →</a>
					</div>
					<div class="research-cover-mark">
						<span>CACBUA</span>
						<strong><?php echo htmlspecialchars( $pub['year'] ); ?></strong>
						<small><?php echo htmlspecialchars( $pub['format'] ); ?></small>
					</div>
				</article>
			<?php endforeach; ?>
		<?php else : ?>
			<article class="research-feature-card">
				<div>
					<span class="content-status">Client content required</span>
					<h3>Approved publication title required</h3>
					<p>A named author, publication date, topic, sources, and review status are required before a research item can be published here. Once CACBUA supplies one, it will appear here in this same format.</p>
				</div>
				<div class="research-cover-mark is-empty">
					<span>CACBUA</span>
					<strong>—</strong>
					<small>Awaiting content</small>
				</div>
			</article>
		<?php endif; ?>
	</div>
</section>

<section class="section cooperation">
	<div class="container cooperation-grid">
		<div class="cooperation-copy">
			<p class="eyebrow">Research standards</p>
			<h2>Evidence before assertion</h2>
			<p class="prose">Every research item will identify its author, publication date, sources, review status, and correction pathway.</p>
		</div>
		<div class="pathway-list">
			<article><span class="num">01</span><div><h3>Authorship</h3><p>Named authors and affiliations.</p></div></article>
			<article><span class="num">02</span><div><h3>Evidence</h3><p>Documented sources and methodology.</p></div></article>
			<article><span class="num">03</span><div><h3>Accountability</h3><p>Version and correction information.</p></div></article>
		</div>
		<a class="resource-inline-link" href="resources.php">Browse the Resource Hub →</a>
	</div>
</section>

<?php require __DIR__ . '/../partials/footer.php'; ?>
