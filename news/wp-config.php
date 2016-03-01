<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

global $salesPersonName;
global $siteFolderName;

$salesPersonName 		= "castle";
$siteFolderName 		= "website_folder";

$webServerDatabaseName 	= "castle_news";

$demoDatabaseName 		= "demo_database_name";
$demoDatabaseUser 		= "demo_database_username";
$demoDatabasePass 		= "demo_database_password";

$liveDatabaseName 		= "castle_news";
$liveDatabaseUser 		= "castle_news";
$liveDatabasePass 		= ")vdNWag9?!IT";


if ($_SERVER['HTTP_HOST'] == "localhost:7777") {	

	$url = "http://localhost:7777/castle/";

	$dbname = "castle_news";
	$dbuser = "root";
	$dbpass = "root";

}

elseif ($_SERVER['HTTP_HOST'] == "ad.trak.agency" ) {

	$url = "http://" . $_SERVER['HTTP_HOST'] . "/" . $salesPersonName . "/" . $siteFolderName . "/";

	$dbname = $demoDatabaseName;
	$dbuser = $demoDatabaseUser;
	$dbpass = $demoDatabasePass;

}

else {
	
	$url = "http://" . $_SERVER['HTTP_HOST'] . "/";

	$dbname = $liveDatabaseName;
	$dbuser = $liveDatabaseUser;
	$dbpass = $liveDatabasePass;
}

$url = $url."news/";

define('DB_NAME', $dbname);
define('DB_USER', $dbuser);
define('DB_PASSWORD', $dbpass);
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_SITEURL',$url);
define('WP_HOME',$url);

define('WP_MEMORY_LIMIT', '64M');
/* Edit this according to the IM guide
define('FTP_USER', 'username'); // Your FTP username
define('FTP_PASS', 'password'); // Your FTP password
define('FTP_HOST', 'sitedomain.co.uk'); // Your FTP URL:Your FTP port
*/


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'JFr/Scx6+.H//E5]gEO)1O-r2p]hM2cXe;qHo|T.<k~KJblVm+aC6E}GteQeMB^|');
define('SECURE_AUTH_KEY',  'p[%-Jzxo=89PxA@skIMSdJ%t$HQZycM!:Zxld%!S]F}u.M]*T|^|dXQ?TV&em2Wv');
define('LOGGED_IN_KEY',    '.1%AJxtQOwPG^Q+)taA,74U}c482pdY-Y,!;kKR92M++gAQb}^p<EwIpDI^|7@m{');
define('NONCE_KEY',        'ygVbjhU<GxhwXRf;4)}5Zi-NO/~|D/!<-]u-4+a~H<&_He|xf|%h38lKIIql<M?4');
define('AUTH_SALT',        '-WO+R<xeXv g+tId|Waoeu`hnjQhm2t}FE,ha_Loc$i<u/K?er;>at2bGE7-wuo0');
define('SECURE_AUTH_SALT', '@-Z6n-Kr!p,e|$3tF)Z)Mz|X&XON_{mlvl+(+,X5yv5JQNb&=%yvb|h~3o_gZUFX');
define('LOGGED_IN_SALT',   'Q0EL_DX|-w^+tYon6el{IW^*.JvUk;vN:Z?cO:|eF24]2TgIk^rEEfvu@K<T57+<');
define('NONCE_SALT',       'yM<|fEk#a%QkyM{?4~_yxs(kG_u`:nRhCDV{qXl{z=J .>z@r|GN`a~dcZ?5u|H-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
