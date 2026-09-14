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
		<a class="site-logo" href="index.php"><img src="assets/images/approved/brand/cacbua-logo.jpg" srcset="assets/images/approved/brand/cacbua-logo.jpg 300w, assets/images/approved/brand/cacbua-logo@2x.jpg 768w" sizes="150px" alt="CACBUA — China &amp; Africa Cross-Border United Association" width="150" height="78"></a>

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
			<a class="partner-link" href="contact.php">Partner With Us</a>
			<button class="menu-button" type="button" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-nav" data-menu-open>☰</button>
		</div>
	</div>
</header>

<div class="mobile-nav" id="mobile-nav" hidden>
	<div class="mobile-nav-top">
		<span class="site-logo"><img src="assets/images/approved/brand/cacbua-logo.jpg" alt="CACBUA" width="150" height="78"></span>
		<button class="close-menu" type="button" aria-label="Close menu" data-menu-close>&times;</button>
	</div>
	<ul>
		<li><a href="about.php">About</a></li>
		<li><a href="research.php">Research</a></li>
		<li><a href="cooperation.php">Cooperation</a></li>
		<li><a href="news.php">News &amp; Insights</a></li>
		<li><a href="events.php">Events</a></li>
		<li><a href="resources.php">Resources</a></li>
		<li><a href="contact.php">Partner With Us</a></li>
	</ul>
</div>
