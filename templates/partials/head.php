<?php
/**
 * Shared <head> + opening <body>. Expects $page_title to be set before include.
 */
$page_title = $page_title ?? 'CACBUA — China–Africa Cross-Border United Association (Redesign Prototype)';
?><!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo htmlspecialchars( $page_title ); ?></title>
	<meta name="robots" content="noindex, nofollow">
	<link rel="stylesheet" href="assets/css/site.css">
</head>
<body>
