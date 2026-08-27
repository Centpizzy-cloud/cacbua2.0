<?php
/**
 * Research page — "Latest publications".
 *
 * Publication 001 is CACBUA's first real publication in this project.
 * Content status: RESEARCH-BASED DRAFT — CLIENT APPROVAL REQUIRED before
 * this is treated as an official CACBUA institutional position. Every
 * factual claim below was checked against primary/secondary sources on
 * 26 Aug 2026 (see the "Sources & further reading" section on the
 * publication page itself, and docs/content-status.md). The checklist and
 * "CACBUA Perspective" sections are CACBUA's own analysis, not sourced data
 * — kept clearly separate from the sourced facts, as instructed.
 *
 * Schema per entry:
 *   'category' => badge shown top-left of the card (e.g. 'Trade & Policy')
 *   'title'    => real, CACBUA-approved title
 *   'subtitle' => one-line subtitle shown under the title
 *   'summary'  => 1–2 sentence summary for the card
 *   'meta'     => 'Month Year · Format' shown under the summary
 *   'year'     => shown large in the cover mark
 *   'format'   => shown small in the cover mark (e.g. 'Policy Brief')
 *   'href'     => link to the full publication page
 */
return array(
	array(
		'category' => 'Trade & Policy',
		'title'    => "China's Zero-Tariff Policy for Africa",
		'subtitle' => 'What the 2026 expansion means for African exporters',
		'summary'  => 'A practical CACBUA policy brief examining market access, export readiness, and the steps African businesses should consider when approaching the Chinese market.',
		'meta'     => 'August 2026 · Policy Brief',
		'year'     => '2026',
		'format'   => 'Policy Brief',
		'href'     => 'publication-zero-tariff-2026.php',
	),
);
