<?php
/**
 * Source file was changed on the Fri Nov 24 13:30:07 2023 +0100
 */

defined( 'WP_UNINSTALL_PLUGIN' ) || exit;

if ( ! defined( 'WP_ROCKET_CACHE_ROOT_PATH' ) ) {
	define( 'WP_ROCKET_CACHE_ROOT_PATH', WP_CONTENT_DIR . '/cache/' );
}

if ( ! defined( 'WP_ROCKET_CONFIG_PATH' ) ) {
	define( 'WP_ROCKET_CONFIG_PATH', WP_CONTENT_DIR . '/wp-rocket-config/' );
}

require_once __DIR__ . '/inc/Engine/WPRocketUninstall.php';

// RUCSS Database Engine.
require_once __DIR__ . '/inc/Dependencies/Database/Base.php';
require_once __DIR__ . '/inc/Dependencies/Database/Column.php';
require_once __DIR__ . '/inc/Dependencies/Database/Schema.php';
require_once __DIR__ . '/inc/Dependencies/Database/Query.php';
require_once __DIR__ . '/inc/Dependencies/Database/Row.php';
require_once __DIR__ . '/inc/Dependencies/Database/Table.php';
require_once __DIR__ . '/inc/Dependencies/Database/Queries/Meta.php';
require_once __DIR__ . '/inc/Dependencies/Database/Queries/Date.php';
require_once __DIR__ . '/inc/Dependencies/Database/Queries/Compare.php';
require_once __DIR__ . '/inc/Engine/Optimization/RUCSS/Database/Tables/UsedCSS.php';

require_once __DIR__ . '/inc/Engine/Preload/Database/Tables/Cache.php';
$rocket_rucss_usedcss_table = new WP_Rocket\Engine\Optimization\RUCSS\Database\Tables\UsedCSS();
$rocket_cache_table         = new \WP_Rocket\Engine\Preload\Database\Tables\Cache();
$rocket_uninstall           = new WPRocketUninstall(
	WP_ROCKET_CACHE_ROOT_PATH,
	WP_ROCKET_CONFIG_PATH,
	$rocket_rucss_usedcss_table,
	$rocket_cache_table,
	WP_CONTENT_DIR // Cl.
	);

$rocket_uninstall->uninstall();
