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
$inquiry_types = array(
	'partnership' => 'Partnership & membership',
	'research'    => 'Research & media',
	'events'      => 'Events',
	'general'     => 'General inquiry',
);
$selected_inquiry = isset( $_GET['inquiry'], $inquiry_types[ $_GET['inquiry'] ] ) ? $inquiry_types[ $_GET['inquiry'] ] : '';
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
			<a class="inquiry-type-link" href="contact.php?inquiry=partnership#contact-options"><span class="num">01</span><div><h3>Partnership &amp; membership</h3><p>Discuss cooperation, partnership opportunities, or joining CACBUA.</p><strong>Choose this topic →</strong></div></a>
			<a class="inquiry-type-link" href="contact.php?inquiry=research#contact-options"><span class="num">02</span><div><h3>Research &amp; media</h3><p>Discuss a research request, policy fact-finding, or press enquiry.</p><strong>Choose this topic →</strong></div></a>
			<a class="inquiry-type-link" href="contact.php?inquiry=events#contact-options"><span class="num">03</span><div><h3>Events</h3><p>Propose an event or ask about an existing CACBUA event.</p><strong>Choose this topic →</strong></div></a>
			<a class="inquiry-type-link" href="contact.php?inquiry=general#contact-options"><span class="num">04</span><div><h3>General inquiry</h3><p>Contact CACBUA about anything else.</p><strong>Choose this topic →</strong></div></a>
		</div>
	</div>
</section>

<section class="section soft" id="contact-options">
	<div class="container">
		<?php if ( $selected_inquiry ) : ?>
			<div class="selected-inquiry" role="status">
				<span>Selected inquiry</span>
				<strong><?php echo htmlspecialchars( $selected_inquiry ); ?></strong>
				<p>Use WhatsApp, phone, or email below and mention this topic so CACBUA can route your discussion correctly.</p>
			</div>
		<?php endif; ?>
		<div class="section-heading">
			<p class="eyebrow">Direct channels</p>
			<h2>Official contact details</h2>
			<p>Reach CACBUA directly by WhatsApp, telephone, or email, or visit the Shanghai office during the hours shown.</p>
		</div>
		<div class="contact-channel-grid">
			<article class="contact-channel-card">
				<span class="contact-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 21s7-6.1 7-12A7 7 0 1 0 5 9c0 5.9 7 12 7 12Z"/><circle cx="12" cy="9" r="2.5"/></svg></span>
				<div><p class="contact-label">Address</p><h3>Shanghai office</h3><p>Room 7D-06B, Building A, Jiafa Building, Lane 129, Datian Road, Shanghai</p></div>
			</article>
			<a class="contact-channel-card contact-channel-link" href="https://wa.me/8613472608073">
				<span class="contact-icon whatsapp" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M20 11.6a8 8 0 0 1-11.8 7L4 20l1.4-4A8 8 0 1 1 20 11.6Z"/><path d="M9 8.2c.4 2.7 2.1 4.4 4.8 4.8l1.2-1.2c.3-.3.7-.4 1.1-.2l2 1"/></svg></span>
				<div><p class="contact-label">WhatsApp</p><h3>+86 134 7260 8073</h3><p>Start a direct WhatsApp conversation with CACBUA.</p><strong>Message us →</strong></div>
			</a>
			<a class="contact-channel-card contact-channel-link" href="tel:+8613661501097">
				<span class="contact-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M7.2 3.5 10 7.8 8.2 10c1.2 2.6 3.2 4.6 5.8 5.8l2.2-1.8 4.3 2.8c.3.2.5.6.4 1-.5 2.3-2.3 3.5-4.7 3.2C9.8 19.2 4.8 14.2 4 7.8 3.7 5.4 4.9 3.6 7.2 3.1c.4-.1.8.1 1 .4Z"/></svg></span>
				<div><p class="contact-label">Phone</p><h3>+86 136 6150 1097</h3><p>Call CACBUA directly during office hours.</p><strong>Call now →</strong></div>
			</a>
			<a class="contact-channel-card contact-channel-link" href="mailto:contact@cacbua.org">
				<span class="contact-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m4 7 8 6 8-6"/></svg></span>
				<div><p class="contact-label">Email</p><h3>contact@cacbua.org</h3><p>Send a written inquiry or supporting documents.</p><strong>Email us →</strong></div>
			</a>
			<article class="contact-channel-card office-hours-card">
				<span class="contact-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3.5 2"/></svg></span>
				<div><p class="contact-label">Office hours</p><h3>Monday–Friday</h3><p class="hours">9:00 AM–5:00 PM</p><p>Shanghai local time</p></div>
			</article>
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
