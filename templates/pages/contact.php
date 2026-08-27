<?php
/**
 * Contact — real page (not a Phase 2 stub).
 * Content status: mixed. Address, WhatsApp, phone, and email are the same
 * real details already used in the footer (production-verified). There is
 * no form backend in this database-free project, so rather than fake a
 * working inquiry form, direct contact channels are shown plainly and
 * labeled as the current way to reach CACBUA. See docs/content-status.md.
 */
$page_title = 'Contact — CACBUA';
$header_variant = 'solid';
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
?>
<section class="interior-hero">
	<div class="container">
		<p class="breadcrumbs"><a href="index.php">Home</a> › Contact</p>
		<p class="eyebrow light">Contact</p>
		<h1>Contact CACBUA</h1>
		<p class="interior-lead">Choose the inquiry type that best fits your message, then reach CACBUA directly using the details below.</p>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="section-heading">
			<p class="eyebrow">Inquiry types</p>
			<h2>How can we help?</h2>
		</div>
		<div class="pathway-list">
			<article><span class="num">01</span><div><h3>Partnership &amp; membership</h3><p>Mention this when reaching out about cooperation or joining CACBUA.</p></div></article>
			<article><span class="num">02</span><div><h3>Research &amp; media</h3><p>Mention this for research requests or press enquiries.</p></div></article>
			<article><span class="num">03</span><div><h3>Events</h3><p>Mention this to propose or ask about an event.</p></div></article>
			<article><span class="num">04</span><div><h3>General inquiry</h3><p>For anything else.</p></div></article>
		</div>
	</div>
</section>

<section class="section soft">
	<div class="container">
		<div class="section-heading">
			<p class="eyebrow">Direct channels</p>
			<h2>Official contact details</h2>
			<p>CACBUA does not yet have a working online inquiry form on this prototype — a form provider decision is pending. Until then, these are the confirmed ways to reach CACBUA directly.</p>
		</div>
		<div class="pathway-list">
			<article><span class="num">Address</span><div><h3>Shanghai office</h3><p>Room 7D-06B, Building A, Jiafa Building, Lane 129, Datian Road, Shanghai</p></div></article>
			<article><span class="num">WhatsApp</span><div><h3><a href="https://wa.me/8613472608073">+86 13472608073</a></h3><p>Fastest way to reach CACBUA directly.</p></div></article>
			<article><span class="num">Phone</span><div><h3><a href="tel:+8613661501097">+86 136 6150 1097</a></h3><p>Direct phone line.</p></div></article>
			<article><span class="num">Email</span><div><h3><a href="mailto:contact@cacbua.com">contact@cacbua.com</a></h3><p>For written inquiries and documentation.</p></div></article>
		</div>
		<div class="content-placeholder-card" style="margin-top:26px">
			<span class="content-status">Verification required</span>
			<h3>Office hours and privacy details</h3>
			<p>Office hours, expected response time, privacy wording, and inquiry-routing owners still require CACBUA confirmation before launch.</p>
		</div>
	</div>
</section>

<section class="newsletter">
	<div class="container newsletter-grid">
		<div>
			<p class="eyebrow">Explore</p>
			<h2>Related information</h2>
		</div>
		<div class="button-group">
			<a class="button button-primary" href="cooperation.php">Partner with us</a>
			<a class="button button-ghost-dark" href="research.php">Explore research</a>
		</div>
	</div>
</section>

<?php require __DIR__ . '/../partials/footer.php'; ?>
