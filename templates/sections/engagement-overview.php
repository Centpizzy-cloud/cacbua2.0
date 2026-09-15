<?php $engagement_areas = require __DIR__ . '/../../content/engagement-areas.php'; ?>
<section class="section engagement-overview" aria-labelledby="engagement-overview-title">
	<div class="container">
		<div class="section-heading-row">
			<div class="section-heading">
				<p class="eyebrow">Our engagement at a glance</p>
				<h2 id="engagement-overview-title">Connected priorities for China–Africa cooperation</h2>
				<p>Six themes organize CACBUA’s work across economic development, knowledge exchange, social impact, and institutional cooperation.</p>
			</div>
			<a class="button button-ghost-dark" href="about.php#engagement">Explore all areas</a>
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
