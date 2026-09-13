<!--
	Section 2: China–Africa Trade Monitor
	Content status: RESEARCHED EXTERNAL CONTENT — national customs/government
	figures, not CACBUA's own activity. STRONG confidence only.
-->
<?php $trade_stats = require __DIR__ . '/../../content/trade-monitor-stats.php'; ?>
<section class="trade-monitor" id="trade-monitor" aria-labelledby="trade-monitor-title">
	<div class="container trade-monitor-heading">
		<p class="eyebrow light">China–Africa trade, tracked</p>
		<h2 id="trade-monitor-title">Trade Monitor</h2>
	</div>
	<div class="container trade-monitor-grid">
		<?php foreach ( $trade_stats as $stat ) : ?>
			<article>
				<strong><?php echo htmlspecialchars( $stat['figure'] ); ?></strong>
				<span><?php echo htmlspecialchars( $stat['label'] ); ?> — <?php echo htmlspecialchars( $stat['period'] ); ?></span>
			</article>
		<?php endforeach; ?>
	</div>
	<div class="container">
		<details class="trade-monitor-sources">
			<summary>Sources &amp; dates for the figures above</summary>
			<ul>
				<?php foreach ( $trade_stats as $stat ) : ?>
					<li><?php echo htmlspecialchars( $stat['figure'] . ' — ' . $stat['label'] ); ?>: <?php echo htmlspecialchars( $stat['source'] ); ?>, published <?php echo htmlspecialchars( $stat['published'] ); ?>. Data period: <?php echo htmlspecialchars( $stat['period'] ); ?>.</li>
				<?php endforeach; ?>
			</ul>
		</details>
		<a class="button button-outline" style="margin-top:20px" href="research.php">Explore CACBUA research →</a>
	</div>
</section>
