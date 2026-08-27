<?php
/**
 * News & Insights page.
 * Content status: CACBUA EXISTING CONTENT — banner and all three cards
 * describe real, previously-verified events already in the archive
 * (content/events-data.php). Each card links to its matching event
 * anchor on events.php, same cross-link pattern as Research.
 */
return array(
	'banner' => array(
		'date'  => 'Latest · September 2023',
		'title' => 'CACBUA organizes third annual Mex Export',
		'desc'  => 'The third annual China/Africa Medical Equipment & Tech Expo drew attendance from healthcare sectors, associations, organizations, and media worldwide, sponsored and operated by CACBUA members.',
		'image' => 'assets/images/approved/events/mex-export-2023-web.jpg',
		'anchor'=> 'event-mex-export',
	),
	'list' => array(
		array(
			'date'   => 'July 2023',
			'title'  => 'CACBUA hosts Home Appliance Expo',
			'desc'   => 'Covering electrics, small home appliances, furniture, and interior decor, connecting exhibitors across the home and hospitality sectors.',
			'image'  => 'assets/images/approved/events/home-appliance-expo-2023-web.jpg',
			'anchor' => '',
		),
		array(
			'date'   => 'January 2022',
			'title'  => 'Nigeria Trade Office meets Shanghai Trade Office',
			'desc'   => 'Founder Mr. Okpozae organized talks between the Nigeria Trade Asian Office and Shanghai Trade Office on further bilateral cooperation.',
			'image'  => 'assets/images/approved/events/shanghai-trade-office-2022-web.jpg',
			'anchor' => 'event-trade-office',
		),
		array(
			'date'   => 'May 2022',
			'title'  => 'Building cross-border business opportunity',
			'desc'   => 'CACBUA worked to build understanding between associations and companies across countries, creating more economic and cooperation opportunities for members and partners.',
			'image'  => 'assets/images/approved/events/bizwise-2022-web.jpg',
			'anchor' => 'event-bizwise',
		),
	),
);
