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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wptestsite');

/** MySQL database username */
define('DB_USER', 'wptestsite');

/** MySQL database password */
define('DB_PASSWORD', '3113128');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '$HIr@^hn+iiaW^uET[@T|y3Srj$Yl+|KOi|7dlXBT`amVr!T(XA@}g+<4TWD i?u');
define('SECURE_AUTH_KEY',  'c}Z|<Tz#w++:eHR^%]u5*$yI4hDvO Qari4>:.YyDoSS;-y~Dn]~mYd0ww1e0/kc');
define('LOGGED_IN_KEY',    'k[)_|9ubOnc]GgI^u%)RD/*zxU=nlc>mH6+{{f6wgan>6]4^&mu`nJIWEIfNIC(h');
define('NONCE_KEY',        '#__XdWomiV,1^#4bFM<GCYu sp@I`~p-{Md+E=4%P=A`t<`t tohN4urL,9]4|cT');
define('AUTH_SALT',        'N#.W(!JXl[kRjg5.axShhbgU.8L4zJALzy,elJ%agFn]J<iHgK,ea54`fquU%oO#');
define('SECURE_AUTH_SALT', '+Un@?S.xy?1}sf#n+mZkqMJ@11G8Gx*.1{B_S6bAJH]C! 4%Nog7ke<w6?uWeZV/');
define('LOGGED_IN_SALT',   'BRJQ~Cu,;-ut2.;Gi-z`hDk|hMg-[/2RnI(>Rg(I%JSX4IPC<tm0Jz:@1v[LqENQ');
define('NONCE_SALT',       'FJtv .xqi9%)1v_JG+vstJC=|3n$^KiHEG+Lmt/oRT n4^kAo%vJsOc_j!`>J,AB');

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
