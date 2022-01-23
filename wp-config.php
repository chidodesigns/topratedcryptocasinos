<?php
require_once __DIR__ . '/vendor/autoload.php';
try {
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/var/www/topratedcryptocasinos/prod/wp-content/plugins/wp-super-cache/' );
	$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
	$dotenv->load();
} catch (Exception $e) {
	echo $e->getMessage();
}
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

@ini_set('upload_max_size', '1000M');
@ini_set('upload_max_filesize', '1000M');
@ini_set('post_max_size', '1000M');
@ini_set('max_execution_time', '300');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $_ENV['TRCC_DB_NAME']);

/** MySQL database username */
define('DB_USER', $_ENV['TRCC_DB_USER']);

/** MySQL database password */
define('DB_PASSWORD', $_ENV['TRCC_DB_PASSWORD']);

/** MySQL hostname */
define('DB_HOST', $_ENV['TRCC_DB_HOST']);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',          ':4fgtkz!Y}mh+khWP:d8/@/8*!Q1uC4qK:uP.B6~Q~hUYN8OH7rm&AS[6 vcR8`Q');
define('SECURE_AUTH_KEY',   'iv?:O9.>v[*j!r2Cb}pRWtLBECt.u!XuOwu`GjH#0hV)iZv}JM)K0oXW:sTcGO{8');
define('LOGGED_IN_KEY',     '8Pw@f<u?e}xVit5`:Vw]+)@/V{_k!U&iq*;8`M+F>wUfavFNS-(=QW?o07/60syA');
define('NONCE_KEY',         'Uxq=Fx01Uey;OzmDiz84WPD~sDl,>cugggtW)*z,3y}0oLYn$o`i#N1`#qJ=qRx*');
define('AUTH_SALT',         'KTYHY,*)fRBE`W+@rmVdk!M9=J;Fg+<NBTwuhbIy6WgZ9o*9Zg>J:PzH%5^[hK~9');
define('SECURE_AUTH_SALT',  'qqa7]EiBe$!G6sAe}w[2A+uv@`7mm .JQ.,a(arfMAEegV4U&<10)*_uyfjx3RT^');
define('LOGGED_IN_SALT',    '*-(F9^r>x&0Q/6[0VzfU3S64J3rQQ7c(e<-X#og-xTw1e5r#Oi3>f<aDX_46m*PB');
define('NONCE_SALT',        'ydCTd}5Q*8U9:1}]km/hf~{d-2-$QZ`06/mHetf9bial-s`_@~y$S!YHaipI_XN$');
define('WP_CACHE_KEY_SALT', '7R?#V{2)wNZi/QJU`]$z[r(Y&Pk5_&2s>:NH]6xqA4Z^2glU5$!~:H{;6eKs1v=c');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = $_ENV['TRCC_DB_PREFIX'];


define('WP_DEBUG', $_ENV['TRCC_WP_DEBUG']);

// Tells WordPress to log everything to the /wp-content/debug.log file
define('WP_DEBUG_LOG', true);

// Doesn't force the PHP 'display_errors' variable to be on
define('WP_DEBUG_DISPLAY', $_ENV['TRCC_WP_DEBUG_DISPLAY']);

//  Allow all file type uploads
define('ALLOW_UNFILTERED_UPLOADS', true);

// Hides errors from being displayed on-screen
// @ini_set('display_errors', 0);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';