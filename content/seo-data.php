<?php
/**
 * Pre-launch SEO configuration.
 *
 * Canonicals intentionally point to the eventual production domain while
 * templates remain noindex in this redesign. Do not change the robots value
 * or publish the prepared sitemap until production launch is approved.
 */
return array(
	'index.php' => array(
		'title' => 'China–Africa Trade, Investment & Cooperation | CACBUA',
		'description' => 'CACBUA connects China and Africa through trade and investment insight, policy research, market-access guidance, events, and institutional cooperation.',
		'canonical' => '/', 'type' => 'WebPage',
		'image' => '/assets/images/approved/hero/hero-web-1200.jpg',
		'breadcrumbs' => array(),
	),
	'about.php' => array(
		'title' => 'About CACBUA | China–Africa Cooperation',
		'description' => 'Learn how CACBUA supports research, trade and investment insight, institutional cooperation, and knowledge exchange between China and Africa.',
		'canonical' => '/about/', 'type' => 'AboutPage',
		'image' => '/assets/images/approved/hero/hero-web-1200.jpg',
		'breadcrumbs' => array('About' => '/about/'),
	),
	'founder.php' => array(
		'title' => 'Hon. Geoffrey Okpozae, Founder & President | CACBUA',
		'description' => 'Meet Hon. Geoffrey Okpozae, Founder and President of CACBUA, and read his leadership vision for informed China–Africa economic cooperation.',
		'canonical' => '/leadership/', 'type' => 'ProfilePage',
		'image' => '/assets/images/approved/leadership/geoffrey-okpozae-original.jpeg',
		'breadcrumbs' => array('About' => '/about/', 'Leadership' => '/leadership/'),
	),
	'research.php' => array(
		'title' => 'China–Africa Research & Policy Analysis | CACBUA',
		'description' => 'Explore CACBUA research on China–Africa trade, investment policy, market access, industrial cooperation, and cross-border development.',
		'canonical' => '/research/', 'type' => 'CollectionPage',
		'breadcrumbs' => array('Research' => '/research/'),
	),
	'publication-zero-tariff-2026.php' => array(
		'title' => "China's Zero-Tariff Policy for Africa: Export Guide | CACBUA",
		'description' => "What China's 2026 zero-tariff expansion means for African exporters, including market-access opportunities, standards, logistics, and readiness.",
		'canonical' => '/research/publications/china-zero-tariff-africa-2026/', 'type' => 'WebPage',
		'breadcrumbs' => array('Research' => '/research/', 'Publications' => '/research/publications/', "China's Zero-Tariff Policy for Africa" => '/research/publications/china-zero-tariff-africa-2026/'),
		'published' => '2026-08-26', 'modified' => '2026-08-26',
	),
	'cooperation.php' => array(
		'title' => 'China–Africa Business & Institutional Cooperation | CACBUA',
		'description' => 'Explore CACBUA pathways for China–Africa membership, business partnerships, institutional cooperation, research, and advisory support.',
		'canonical' => '/cooperation/', 'type' => 'WebPage',
		'breadcrumbs' => array('Cooperation' => '/cooperation/'),
	),
	'opportunities.php' => array(
		'title' => 'China–Africa Trade & Investment Opportunities | CACBUA',
		'description' => 'Explore sourced market intelligence on China–Africa market access, agriculture, manufacturing, investment, and renewable-energy opportunities.',
		'canonical' => '/opportunities/', 'type' => 'CollectionPage',
		'image' => '/assets/images/approved/opportunities/market-access-web.jpg',
		'breadcrumbs' => array('Opportunities' => '/opportunities/'),
	),
	'news.php' => array(
		'title' => 'China–Africa News & Insights | CACBUA',
		'description' => 'Read verified CACBUA updates and insights on China–Africa trade events, institutional cooperation, industry, research, and policy.',
		'canonical' => '/news/', 'type' => 'CollectionPage',
		'image' => '/assets/images/approved/events/mex-export-2023-web.jpg',
		'breadcrumbs' => array('News & Insights' => '/news/'),
	),
	'events.php' => array(
		'title' => 'China–Africa Trade, Industry & Exchange Events | CACBUA',
		'description' => 'Explore CACBUA’s verified archive of China–Africa conferences, trade expos, industry forums, cooperation meetings, and exchange events.',
		'canonical' => '/events/', 'type' => 'CollectionPage',
		'image' => '/assets/images/approved/events/tour-fashion-banner-2023-web.jpg',
		'breadcrumbs' => array('Events' => '/events/'),
	),
	'contact.php' => array(
		'title' => 'Contact CACBUA | China–Africa Cooperation Inquiries',
		'description' => 'Contact CACBUA about China–Africa partnerships, membership, research, media, events, trade opportunities, or general inquiries.',
		'canonical' => '/contact/', 'type' => 'ContactPage',
		'breadcrumbs' => array('Contact' => '/contact/'),
	),
);
