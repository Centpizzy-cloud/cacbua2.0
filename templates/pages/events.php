<?php
/**
 * Events — full archive page.
 * Content status: VERIFIED / READY — see content/events-data.php.
 */
$events = require __DIR__ . '/../../content/events-data.php';
$page_title = 'Events — CACBUA';
$header_variant = 'solid';
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
?>
<section class="interior-hero">
	<div class="container">
		<p class="breadcrumbs"><a href="index.php">Home</a> › Events</p>
		<p class="eyebrow light">Conferences and exhibitions</p>
		<h1>Events</h1>
		<p class="interior-lead">A look back at conferences, expos, and forums CACBUA has organized or supported since 2019 — new events will be added here once confirmed.</p>
	</div>
</section>

<section class="section">
	<div class="container">

		<article class="events-feature" id="<?php echo htmlspecialchars( $events['banner']['slug'] ); ?>" style="background-image:url('<?php echo htmlspecialchars( $events['banner']['image'] ); ?>')">
			<div>
				<p class="eyebrow light"><?php echo htmlspecialchars( $events['banner']['date'] ); ?></p>
				<h2><?php echo htmlspecialchars( $events['banner']['title'] ); ?></h2>
				<p><?php echo htmlspecialchars( $events['banner']['desc'] ); ?></p>
			</div>
		</article>

		<div class="section-heading">
			<p class="eyebrow">Event archive</p>
			<h2>Milestones since 2019</h2>
			<p>Conferences, expos, and forums CACBUA has organized or supported, drawn from CACBUA's own published archive.</p>
		</div>

		<div class="events-grid">
			<?php foreach ( $events['list'] as $event ) : ?>
				<?php $event_image_size = @getimagesize( __DIR__ . '/../../' . $event['image'] ); ?>
				<article class="event-card"<?php echo ! empty( $event['slug'] ) ? ' id="' . htmlspecialchars( $event['slug'] ) . '"' : ''; ?>>
					<img src="<?php echo htmlspecialchars( $event['image'] ); ?>" alt="<?php echo htmlspecialchars( $event['title'] ); ?>"<?php echo $event_image_size ? ' width="' . (int) $event_image_size[0] . '" height="' . (int) $event_image_size[1] . '"' : ''; ?> loading="lazy" decoding="async">
					<div class="event-card-body">
						<span class="event-date"><?php echo htmlspecialchars( $event['date'] ); ?></span>
						<h3><?php echo htmlspecialchars( $event['title'] ); ?></h3>
						<p><?php echo htmlspecialchars( $event['desc'] ); ?></p>
						<?php if ( ! empty( $event['tags'] ) ) : ?>
							<div class="event-tags">
								<?php foreach ( $event['tags'] as $tag ) : ?>
									<span><?php echo htmlspecialchars( $tag ); ?></span>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>
					</div>
				</article>
			<?php endforeach; ?>
		</div>

		<div class="section-heading" style="margin-top:70px">
			<p class="eyebrow">From the archive</p>
			<h2>Gallery</h2>
			<p>Additional photography from CACBUA events, pending final captioning.</p>
		</div>
		<div class="events-gallery">
			<?php foreach ( $events['gallery'] as $index => $photo ) : ?>
				<?php $gallery_image_size = @getimagesize( __DIR__ . '/../../' . $photo ); ?>
				<a href="<?php echo htmlspecialchars( $photo ); ?>" target="_blank" rel="noopener" aria-label="<?php echo htmlspecialchars( sprintf( 'View full-size photo %d from CACBUA events', $index + 1 ) ); ?>">
					<img src="<?php echo htmlspecialchars( $photo ); ?>" alt=""<?php echo $gallery_image_size ? ' width="' . (int) $gallery_image_size[0] . '" height="' . (int) $gallery_image_size[1] . '"' : ''; ?> loading="lazy" decoding="async">
				</a>
			<?php endforeach; ?>
		</div>

	</div>
</section>

<section class="newsletter">
	<div class="container newsletter-grid">
		<div>
			<p class="eyebrow">Host or partner</p>
			<h2>Propose an event</h2>
		</div>
		<div><a class="button button-primary" href="contact.php">Contact CACBUA</a></div>
	</div>
</section>

<?php require __DIR__ . '/../partials/footer.php'; ?>
