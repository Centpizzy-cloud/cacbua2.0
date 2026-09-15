<!--
	Section 5: Research Topics
	Content status: CACBUA EXISTING CONTENT — the six topics and their
	descriptions are reused verbatim from the production site; nothing
	invented here. Links go to the real research.php page (built Aug 26,
	2026), which in turn links each topic to its matching event anchor
	on events.php.
-->
<?php $research_topics = require __DIR__ . '/../../content/research-data.php'; ?>
<section class="section" id="research" aria-labelledby="research-title">
	<div class="container">
		<div class="section-heading">
			<p class="eyebrow">Research and policy</p>
			<h2 id="research-title">Explore our research topics</h2>
			<p>Research questions aligned with CACBUA’s six areas of institutional engagement.</p>
		</div>
		<div class="topic-grid">
			<?php foreach ( $research_topics as $i => $topic ) : ?>
				<a class="topic-card" href="research.php#topics"><span class="num"><?php echo sprintf( '%02d', $i + 1 ); ?></span><h3><?php echo htmlspecialchars( $topic['topic'] ); ?></h3><p><?php echo htmlspecialchars( $topic['desc'] ); ?></p><b aria-hidden="true">→</b></a>
			<?php endforeach; ?>
		</div>
	</div>
</section>
