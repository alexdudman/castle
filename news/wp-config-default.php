<?php
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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'castle_news');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|18!eir6i2`-)B@GtUKH!:L4@fP.9l&+!C|8h|ZeyeRd~tDpBI{is|62?!>A?Kp/');
define('SECURE_AUTH_KEY',  '021$KRSl[}QZ-y:-uWd1:q]G|@_&rM<[*&+,);EFIZR`T5-rna5w?E)znKZ|8dA<');
define('LOGGED_IN_KEY',    '^!(6ZEq`j_kolJFuro3i/$6^LJurgw--PUhTb&_A)0/]$Oz+_2H b!y]}7%@Kj1{');
define('NONCE_KEY',        '|TM H|PT,KA* Rc}sWjY(N#))I=QU.Zf318BbLd({N`3lII6!193#XaE OY#X,-S');
define('AUTH_SALT',        'O<e{q<2C@r=U>NGQB]|zQO=I{%sWx(TLr9o`P?`g>bp3RSC$})ER;.hv*b=),+x6');
define('SECURE_AUTH_SALT', 'fV-wjlFl^>{xT6TcwfU*<%@jramz.fQ)La:lD!4m5rpt{ue|zaDu7)]C=3O-<:>(');
define('LOGGED_IN_SALT',   'Xx<V-X-gK]7`.F1+hPRfPA`R*;)P1@,cMC|aM&@-y-=%a5N/X>2Uy=zSF>Np-0aN');
define('NONCE_SALT',       '.-cAexE.21`zI*hcKT^%`>.+X+)$|Yy!Kb.=ArK/l1n|epUpVZeB#Rban mfhE%,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
