<?php
/**
 * Build a static, noindex client-review copy for GitHub Pages.
 * The PHP templates remain the source of truth.
 */
$root = dirname( __DIR__ );
$output = $root . '/github-pages';
$pages = array(
	'index.php', 'about.php', 'founder.php', 'research.php',
	'publication-zero-tariff-2026.php', 'news.php', 'cooperation.php',
	'opportunities.php', 'events.php', 'resources.php', 'contact.php',
);

function remove_tree( $path ) {
	if ( ! is_dir( $path ) ) {
		return;
	}
	$items = new RecursiveIteratorIterator(
		new RecursiveDirectoryIterator( $path, FilesystemIterator::SKIP_DOTS ),
		RecursiveIteratorIterator::CHILD_FIRST
	);
	foreach ( $items as $item ) {
		$item->isDir() ? rmdir( $item->getPathname() ) : unlink( $item->getPathname() );
	}
	rmdir( $path );
}

function copy_tree( $source, $destination ) {
	$items = new RecursiveIteratorIterator(
		new RecursiveDirectoryIterator( $source, FilesystemIterator::SKIP_DOTS ),
		RecursiveIteratorIterator::SELF_FIRST
	);
	foreach ( $items as $item ) {
		$target = $destination . '/' . $items->getSubPathName();
		if ( $item->isDir() ) {
			if ( ! is_dir( $target ) ) {
				mkdir( $target, 0775, true );
			}
		} else {
			copy( $item->getPathname(), $target );
		}
	}
}

remove_tree( $output );
mkdir( $output, 0775, true );
copy_tree( $root . '/assets', $output . '/assets' );

foreach ( $pages as $page ) {
	$_GET = array();
	$_SERVER['SCRIPT_NAME'] = '/' . $page;
	ob_start();
	include $root . '/' . $page;
	$html = ob_get_clean();
	$html = preg_replace( '/<!--(?!\[if)[\s\S]*?-->/', '', $html );
	$html = preg_replace( '/([a-z0-9-]+)\.php(?=([?#"\']))/i', '$1.html', $html );
	file_put_contents( $output . '/' . preg_replace( '/\.php$/', '.html', $page ), $html );
}

file_put_contents( $output . '/.nojekyll', '' );
file_put_contents( $output . '/README.md', "# CACBUA 2.0 client review build\n\nGenerated from the PHP source. Preview only; search indexing remains disabled.\n" );
echo "Built " . count( $pages ) . " pages in {$output}\n";
