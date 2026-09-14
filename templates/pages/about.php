<?php
/**
 * About — real page (not a Phase 2 stub).
 * Mission/vision/values and audience segments are reused verbatim from
 * production. The "Our history" timeline reuses CACBUA's own real event
 * archive and cross-links back to events.php, same pattern as Research.
 * Leadership/governance is an honest placeholder — no bios exist to reuse.
 * See content/history-data.php and docs/content-status.md.
 */
$history = require __DIR__ . '/../../content/history-data.php';
$page_title = 'About — CACBUA';
$header_variant = 'solid';
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
?>
<section class="interior-hero">
	<div class="container">
		<p class="breadcrumbs"><a href="index.php">Home</a> › About</p>
		<p class="eyebrow light">Our institution</p>
		<h1>About CACBUA</h1>
		<p class="interior-lead">CACBUA is a China–Africa association supporting evidence-led policy interpretation, institutional cooperation, and practical cross-border engagement.</p>
	</div>
</section>

<section class="section about-operating-model">
	<div class="container">
		<div class="section-heading">
			<p class="eyebrow">What CACBUA does</p>
			<h2>Turning cross-border context into practical connection</h2>
			<p>CACBUA brings research, connection, and cooperation together to support informed cross-border engagement.</p>
		</div>
		<div class="cacbua-model" aria-label="CACBUA operating model">
			<div class="model-context"><span>China–Africa context</span><small>Markets · Institutions · Policy · Culture</small></div>
			<div class="model-connector" aria-hidden="true">↓</div>
			<div class="model-centre"><strong>CACBUA</strong><span>Research · Connection · Cooperation</span></div>
			<div class="model-connector" aria-hidden="true">↓</div>
			<div class="model-pillars">
				<article><span>01</span><h3>Research &amp; Policy</h3><p>Evidence and accessible context.</p></article>
				<article><span>02</span><h3>Institutional Cooperation</h3><p>Relationships among public and private actors.</p></article>
				<article><span>03</span><h3>Trade &amp; Investment</h3><p>Sector insight and practical pathways.</p></article>
				<article><span>04</span><h3>Knowledge Exchange</h3><p>Professional, educational, and cultural connection.</p></article>
			</div>
			<div class="model-outcomes">
				<a href="events.php#event-trade-office">Insight</a>
				<a href="events.php#event-consulate">Connections</a>
				<a href="events.php#event-commodity">Programs</a>
				<a href="events.php#event-tour-fashion">Exchange</a>
			</div>
		</div>
	</div>
</section>

<div class="sector-ticker about-ticker" aria-label="CACBUA sectors">
	<div class="sector-ticker-track">
		<div>
			<span>Policy &amp; Research</span><span>Trade &amp; Investment</span><span>Technology &amp; Skills</span><span>Infrastructure</span>
			<span>Agriculture</span><span>Cultural Exchange</span><span>Events</span><span>Institutional Cooperation</span>
		</div>
		<div aria-hidden="true">
			<span>Policy &amp; Research</span><span>Trade &amp; Investment</span><span>Technology &amp; Skills</span><span>Infrastructure</span>
			<span>Agriculture</span><span>Cultural Exchange</span><span>Events</span><span>Institutional Cooperation</span>
		</div>
	</div>
</div>

<section class="section soft">
	<div class="container">
		<div class="topic-grid">
			<article class="topic-card"><p class="eyebrow">Mission</p><h3>Connect institutions with opportunity</h3><p>Support informed, practical engagement across China–Africa policy, trade, research, and exchange.</p></article>
			<article class="topic-card"><p class="eyebrow">Vision</p><h3>Stronger practical cooperation</h3><p>A more connected institutional environment in which knowledge can lead to responsible action.</p></article>
			<article class="topic-card"><p class="eyebrow">Values</p><h3>Evidence, trust, and collaboration</h3><p>Clear sources, credible relationships, mutual understanding, and accountable cooperation.</p></article>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="section-heading">
			<p class="eyebrow">Who CACBUA connects</p>
			<h2>An institutional bridge</h2>
			<p>CACBUA's role is to create useful connections among organizations with complementary knowledge, responsibilities, and opportunity.</p>
		</div>
		<div class="pathway-list">
			<article><span class="num">01</span><div><h3>Public institutions</h3><p>Missions, ministries, trade offices, and public agencies.</p></div></article>
			<article><span class="num">02</span><div><h3>Business networks</h3><p>Chambers, industry associations, enterprises, and investors.</p></div></article>
			<article><span class="num">03</span><div><h3>Research community</h3><p>Analysts, universities, specialists, and knowledge partners.</p></div></article>
			<article><span class="num">04</span><div><h3>Exchange partners</h3><p>Event, education, culture, media, and professional networks.</p></div></article>
		</div>
		<div class="content-placeholder-card leadership-card" style="margin-top:26px">
			<p class="eyebrow">Leadership</p>
			<h3>Meet CACBUA's Founder &amp; President</h3>
			<p>Meet Hon. Geoffrey Okpozae and explore the leadership direction guiding CACBUA’s work.</p>
			<a class="button button-ghost-dark" href="founder.php">View Founder profile</a>
		</div>
	</div>
</section>

<section class="section soft" id="history">
	<div class="container">
		<div class="section-heading">
			<p class="eyebrow">Our history</p>
			<h2>Milestones since 2019</h2>
			<p>Selected milestones from CACBUA's event archive. Follow each link to explore the related activity.</p>
		</div>
		<div class="pathway-list">
			<?php foreach ( $history as $item ) : ?>
				<article>
					<span class="num"><?php echo htmlspecialchars( $item['date'] ); ?></span>
					<div>
						<h3><?php echo htmlspecialchars( $item['title'] ); ?></h3>
						<p><?php echo htmlspecialchars( $item['desc'] ); ?></p>
						<?php if ( ! empty( $item['anchor'] ) ) : ?>
							<a class="topic-card-link" style="position:static;display:inline-block;margin-top:6px" href="events.php#<?php echo htmlspecialchars( $item['anchor'] ); ?>">See on Events →</a>
						<?php endif; ?>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="newsletter">
	<div class="container newsletter-grid">
		<div>
			<p class="eyebrow">Explore CACBUA</p>
			<h2>Move from understanding to engagement</h2>
		</div>
		<div class="button-group">
			<a class="button button-primary" href="research.php">Explore research</a>
			<a class="button button-ghost-dark" href="cooperation.php">Partner with us</a>
		</div>
	</div>
</section>

<?php require __DIR__ . '/../partials/footer.php'; ?>
