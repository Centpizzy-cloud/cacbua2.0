<?php
/**
 * Site header / primary navigation.
 *
 * Expects an optional $header_variant variable set before include:
 *   'transparent' (default, for the homepage — sits over the hero image)
 *   'solid'       (for interior stub pages — needs a background of its own)
 */
$header_variant = $header_variant ?? 'transparent';
?>
<header class="site-header<?php echo $header_variant === 'solid' ? ' solid' : ''; ?>">
	<div class="container site-header-bar">
		<a class="site-logo" href="index.php">CACBUA<span>.</span></a>

		<nav class="primary-nav" aria-label="Primary">
			<ul>
				<li><a href="about.php">About</a></li>
				<li><a href="research.php">Research</a></li>
				<li><a href="cooperation.php">Cooperation</a></li>
				<li><a href="news.php">News &amp; Insights</a></li>
				<li><a href="events.php">Events</a></li>
				<li><a href="resources.php">Resources</a></li>
			</ul>
		</nav>

		<div class="nav-utility">
			<button class="search-toggle" type="button" aria-label="Search CACBUA">🔍</button>
			<a class="lang-link" href="#" aria-label="中文版本（Phase 2）">中文</a>
			<a class="partner-link" href="contact.php">Partner With Us</a>
			<button class="menu-button" type="button" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-nav" data-menu-open>☰</button>
		</div>
	</div>
</header>

<div class="mobile-nav" id="mobile-nav" hidden>
	<div class="mobile-nav-top">
		<span class="site-logo">CACBUA<span>.</span></span>
		<button class="close-menu" type="button" aria-label="Close menu" data-menu-close>&times;</button>
	</div>
	<ul>
		<li><a href="about.php">About</a></li>
		<li><a href="research.php">Research</a></li>
		<li><a href="cooperation.php">Cooperation</a></li>
		<li><a href="news.php">News &amp; Insights</a></li>
		<li><a href="events.php">Events</a></li>
		<li><a href="resources.php">Resources</a></li>
		<li><a href="#" aria-label="中文版本（Phase 2）">中文</a></li>
		<li><a href="contact.php">Partner With Us</a></li>
	</ul>
</div>
