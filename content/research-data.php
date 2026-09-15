<?php
/**
 * Research taxonomy aligned to CACBUA's consolidated engagement areas.
 * Source: existing CACBUA content + CACBUA Institutional Catalogue.
 * Catalogue expansion status: CLIENT VERIFICATION REQUIRED before production.
 */
$areas = require __DIR__ . '/engagement-areas.php';
$anchors = array( 'event-trade-office', 'event-bizwise', 'event-mex-export', 'event-commodity', 'event-consulate', 'event-tour-fashion' );
return array_map(
	static function ( $area, $anchor ) {
		return array( 'topic' => $area['title'], 'desc' => $area['research'], 'anchor' => $anchor );
	},
	$areas,
	$anchors
);
