<?php
/**
 * News & Insights — real page (not a Phase 2 stub).
 * Content status: CACBUA EXISTING CONTENT. Banner and all three cards
 * describe real, previously-verified events already in the archive.
 * Each card links to its matching event anchor on events.php, same
 * cross-link pattern as Research. See content/news-data.php.
 */
$news = require __DIR__ . '/../../content/news-data.php';
$page_title = 'News & Insights — CACBUA';
$header_variant = 'solid';
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
?>
<section class="interior-hero">
	<div class="container">
		<p class="breadcrumbs"><a href="index.php">Home</a> › News &amp; Insights</p>
		<p class="eyebrow light">Institutional updates</p>
		<h1>News &amp; insights</h1>
		<p class="interior-lead">Recent updates on conferences, expos, and cooperation activity CACBUA has organized or supported.</p>
	</div>
</section>

<section class="section">
	<div class="container">

		<article class="events-feature" style="background-image:url('<?php echo htmlspecialchars( $news['banner']['image'] ); ?>')">
			<div>
				<p class="eyebrow light"><?php echo htmlspecialchars( $news['banner']['date'] ); ?></p>
				<h2><?php echo htmlspecialchars( $news['banner']['title'] ); ?></h2>
				<p><?php echo htmlspecialchars( $news['banner']['desc'] ); ?></p>
				<a class="button button-outline" style="margin-top:18px" href="events.php#<?php echo htmlspecialchars( $news['banner']['anchor'] ); ?>">See full event →</a>
			</div>
		</article>

		<div class="section-heading" style="margin-top:50px">
			<p class="eyebrow">More updates</p>
			<h2>Recent activity</h2>
			<p>Drawn from CACBUA's own published archive; additional press coverage and commentary will be added as it is confirmed.</p>
		</div>

		<div class="news-grid">
			<?php foreach ( $news['list'] as $item ) : ?>
				<article class="news-card">
					<span class="card-kicker"><?php echo htmlspecialchars( $item['date'] ); ?></span>
					<h3><?php echo htmlspecialchars( $item['title'] ); ?></h3>
					<p><?php echo htmlspecialchars( $item['desc'] ); ?></p>
					<?php if ( ! empty( $item['anchor'] ) ) : ?>
						<a class="read-more" href="events.php#<?php echo htmlspecialchars( $item['anchor'] ); ?>">Read more →</a>
					<?php else : ?>
						<a class="read-more" href="events.php">Read more →</a>
					<?php endif; ?>
				</article>
			<?php endforeach; ?>
		</div>

	</div>
</section>

<section class="newsletter">
	<div class="container newsletter-grid">
		<div>
			<p class="eyebrow">Media enquiries</p>
			<h2>Contact CACBUA</h2>
			<p>A dedicated press contact is being confirmed — for now, reach CACBUA through the main contact channels.</p>
		</div>
		<div><a class="button button-primary" href="contact.php">Contact CACBUA</a></div>
	</div>
</section>

<?php require __DIR__ . '/../partials/footer.php'; ?>
