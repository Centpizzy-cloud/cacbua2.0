<?php
/**
 * Shared <head> + opening <body>. Page-specific SEO is centralized in
 * content/seo-data.php so canonical and social metadata stay consistent.
 */
$seo_pages = require __DIR__ . '/../../content/seo-data.php';
$seo_key = basename( $_SERVER['SCRIPT_NAME'] ?? 'index.php' );
$seo = $seo_pages[ $seo_key ] ?? array(
	'title' => $page_title ?? 'CACBUA — China–Africa Cross-Border United Association',
	'description' => 'CACBUA supports informed trade, investment, research, and institutional cooperation between China and Africa.',
	'canonical' => '/',
	'type' => 'WebPage',
	'breadcrumbs' => array(),
);
$page_title = $seo['title'];
$seo_origin = 'https://cacbua.org';
$canonical_url = $seo_origin . $seo['canonical'];
$schema_graph = array(
	array(
		'@type' => 'Organization', '@id' => $seo_origin . '/#organization',
		'name' => 'CACBUA', 'alternateName' => 'The World and Africa Cross-Border United Association',
		'url' => $seo_origin . '/', 'logo' => $seo_origin . '/assets/images/approved/brand/cacbua-logo.jpg',
		'email' => 'contact@cacbua.org', 'telephone' => '+86 136 6150 1097',
	),
	array('@type' => 'WebSite', '@id' => $seo_origin . '/#website', 'url' => $seo_origin . '/', 'name' => 'CACBUA', 'publisher' => array('@id' => $seo_origin . '/#organization'), 'inLanguage' => 'en'),
);
$webpage_schema = array('@type' => $seo['type'], '@id' => $canonical_url . '#webpage', 'url' => $canonical_url, 'name' => $seo['title'], 'description' => $seo['description'], 'isPartOf' => array('@id' => $seo_origin . '/#website'), 'about' => array('@id' => $seo_origin . '/#organization'), 'inLanguage' => 'en');
$schema_graph[] = $webpage_schema;
if ( ! empty( $seo['breadcrumbs'] ) ) {
	$items = array(array('@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $seo_origin . '/'));
	$position = 2;
	foreach ( $seo['breadcrumbs'] as $name => $path ) {
		$items[] = array('@type' => 'ListItem', 'position' => $position++, 'name' => $name, 'item' => $seo_origin . $path);
	}
	$schema_graph[] = array('@type' => 'BreadcrumbList', '@id' => $canonical_url . '#breadcrumb', 'itemListElement' => $items);
}
if ( 'founder.php' === $seo_key ) {
	$schema_graph[] = array('@type' => 'Person', '@id' => $seo_origin . '/leadership/#geoffrey-okpozae', 'name' => 'Hon. Geoffrey Okpozae', 'jobTitle' => 'Founder & President', 'image' => $seo_origin . $seo['image'], 'worksFor' => array('@id' => $seo_origin . '/#organization'), 'url' => $canonical_url);
}
if ( 'publication-zero-tariff-2026.php' === $seo_key ) {
	$schema_graph[] = array('@type' => 'Article', '@id' => $canonical_url . '#article', 'headline' => "China's Zero-Tariff Policy for Africa: What the 2026 Expansion Means for African Exporters", 'description' => $seo['description'], 'datePublished' => $seo['published'], 'dateModified' => $seo['modified'], 'author' => array('@id' => $seo_origin . '/#organization'), 'publisher' => array('@id' => $seo_origin . '/#organization'), 'mainEntityOfPage' => array('@id' => $canonical_url . '#webpage'), 'articleSection' => 'Trade & Policy', 'inLanguage' => 'en');
}
?><!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo htmlspecialchars( $page_title ); ?></title>
	<meta name="description" content="<?php echo htmlspecialchars( $seo['description'] ); ?>">
	<meta name="robots" content="noindex, nofollow">
	<link rel="canonical" href="<?php echo htmlspecialchars( $canonical_url ); ?>">
	<meta property="og:site_name" content="CACBUA">
	<meta property="og:type" content="<?php echo 'publication-zero-tariff-2026.php' === $seo_key ? 'article' : 'website'; ?>">
	<meta property="og:title" content="<?php echo htmlspecialchars( $seo['title'] ); ?>">
	<meta property="og:description" content="<?php echo htmlspecialchars( $seo['description'] ); ?>">
	<meta property="og:url" content="<?php echo htmlspecialchars( $canonical_url ); ?>">
	<?php if ( 'publication-zero-tariff-2026.php' === $seo_key ) : ?>
		<meta property="article:published_time" content="<?php echo htmlspecialchars( $seo['published'] ); ?>">
		<meta property="article:modified_time" content="<?php echo htmlspecialchars( $seo['modified'] ); ?>">
	<?php endif; ?>
	<?php if ( ! empty( $seo['image'] ) ) : ?>
		<meta property="og:image" content="<?php echo htmlspecialchars( $seo_origin . $seo['image'] ); ?>">
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:image" content="<?php echo htmlspecialchars( $seo_origin . $seo['image'] ); ?>">
	<?php else : ?>
		<meta name="twitter:card" content="summary">
	<?php endif; ?>
	<meta name="twitter:title" content="<?php echo htmlspecialchars( $seo['title'] ); ?>">
	<meta name="twitter:description" content="<?php echo htmlspecialchars( $seo['description'] ); ?>">
	<script type="application/ld+json"><?php echo json_encode( array('@context' => 'https://schema.org', '@graph' => $schema_graph), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ); ?></script>
	<link rel="stylesheet" href="assets/css/site.css">
</head>
<body>
