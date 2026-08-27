<!--
	Section 4: Trade & Investment Opportunities
	Content status: RESEARCHED EXTERNAL CONTENT throughout — see
	content/opportunities-data.php for each fact's individual source.
	Images: two cards use existing CACBUA project photos pending ownership
	confirmation (CLIENT APPROVAL REQUIRED); the rest use a plain gradient
	card rather than an unlicensed placeholder photo (see docs/image-sources.md).
-->
<?php $opportunities = require __DIR__ . '/../../content/opportunities-data.php'; ?>
<section class="section soft" id="opportunities" aria-labelledby="opportunities-title">
	<div class="container">
		<div class="section-heading">
			<p class="eyebrow">Trade &amp; investment</p>
			<h2 id="opportunities-title">Trade &amp; Investment Opportunities</h2>
			<p>Current, sourced market intelligence on where China–Africa trade and investment are moving — general context, not a claim of CACBUA involvement.</p>
		</div>
		<div class="opportunities-grid">
			<?php foreach ( $opportunities as $card ) : ?>
				<article class="opportunity-card">
					<div class="opportunity-card-media">
						<?php if ( ! empty( $card['image'] ) ) : ?>
							<img src="<?php echo htmlspecialchars( $card['image'] ); ?>" alt="<?php echo htmlspecialchars( $card['image_caption'] ?? $card['title'] ); ?>">
						<?php else : ?>
							<span class="no-photo-mark">Image pending</span>
						<?php endif; ?>
					</div>
					<div class="opportunity-card-body">
						<span class="card-kicker"><?php echo htmlspecialchars( $card['kicker'] ); ?></span>
						<h3><?php echo htmlspecialchars( $card['title'] ); ?></h3>
						<p class="fact"><?php echo $card['fact']; /* pre-escaped, contains <strong> */ ?></p>
						<p class="opportunity-card-source">Source: <?php echo htmlspecialchars( $card['source'] ); ?></p>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
		<p class="opportunities-disclaimer">These are external, independently sourced market developments — not CACBUA programs or activity. Where CACBUA has its own related service or initiative to add, it will be labeled separately as CACBUA content.</p>
	</div>
</section>
