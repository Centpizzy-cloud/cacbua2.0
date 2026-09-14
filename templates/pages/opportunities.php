<?php
$opportunities = require __DIR__ . '/../../content/opportunities-data.php';
$page_title = 'Trade & Investment Opportunities — CACBUA';
$header_variant = 'solid';
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
?>
<main>
	<section class="interior-hero">
		<div class="container">
			<p class="breadcrumbs"><a href="index.php">Home</a> › Trade &amp; Investment Opportunities</p>
			<p class="eyebrow light">Opportunity intelligence</p>
			<h1>Trade &amp; Investment Opportunities</h1>
			<p class="interior-lead">Sourced developments to help businesses and institutions understand where China–Africa market access, investment, and cooperation are moving.</p>
		</div>
	</section>
	<section class="section">
		<div class="container">
			<div class="section-heading">
				<p class="eyebrow">Explore by sector</p>
				<h2>From intelligence to practical next steps</h2>
				<p>Each item expands the evidence shown on the homepage and provides a route to discuss fact-finding, partnerships, and delivery support with CACBUA.</p>
			</div>
			<div class="opportunity-detail-list">
				<?php foreach ( $opportunities as $index => $item ) : ?>
					<?php $image_size = @getimagesize( __DIR__ . '/../../' . $item['image'] ); ?>
					<article class="opportunity-detail" id="<?php echo htmlspecialchars( $item['slug'] ); ?>">
						<div class="opportunity-detail-media"><picture><source srcset="<?php echo htmlspecialchars( preg_replace( '/\.jpg$/', '.webp', $item['image'] ) ); ?>" type="image/webp"><img src="<?php echo htmlspecialchars( $item['image'] ); ?>" alt="<?php echo htmlspecialchars( $item['image_caption'] ?? $item['title'] ); ?>"<?php echo $image_size ? ' width="' . (int) $image_size[0] . '" height="' . (int) $image_size[1] . '"' : ''; ?> loading="lazy" decoding="async"></picture></div>
						<div class="opportunity-detail-copy">
							<p class="eyebrow"><?php echo sprintf( '%02d', $index + 1 ); ?> · <?php echo htmlspecialchars( $item['kicker'] ); ?></p>
							<h2><?php echo htmlspecialchars( $item['title'] ); ?></h2>
							<p class="opportunity-detail-fact"><?php echo $item['fact']; ?></p>
							<p class="opportunity-detail-source"><strong>Source:</strong> <?php echo htmlspecialchars( $item['source'] ); ?></p>
							<div class="opportunity-support"><h3>How CACBUA can support the next step</h3><p>Request focused market and policy fact-finding, help identifying potential business or institutional partners, and a discussion about the practical support required to move an opportunity forward.</p></div>
							<a class="button button-ghost-dark" href="contact.php">Discuss this opportunity</a>
						</div>
					</article>
				<?php endforeach; ?>
			</div>
			<p class="opportunities-disclaimer">The developments above are independently sourced context, not claims that CACBUA participated in the cited activity. Any CACBUA engagement begins only after a direct discussion and agreed scope.</p>
			<a class="button button-ghost-dark" style="margin-top:18px" href="cooperation.php">See how CACBUA cooperates →</a>
			<a class="resource-inline-link" href="resources.php">Browse the Resource Hub →</a>
		</div>
	</section>
</main>
<?php require __DIR__ . '/../partials/footer.php'; ?>
