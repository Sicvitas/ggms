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
define('DB_NAME', 'wp-ggms2');

/** MySQL database username */
define('DB_USER', 'ggms');

/** MySQL database password */
define('DB_PASSWORD', 'ameris12');

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
define('AUTH_KEY',         '&Q4!-)N0(/PU)5?4[B].A*.Yg}]|m]|`Q~&M(;M0GKx4M-{Ma)>965+lch>lSLv-');
define('SECURE_AUTH_KEY',  ' rcyU[)~**Y!7V`@1vv?yu0.4@3h+*S%IA-dI,dR2|<?H[J={{/8}j8S|Hx.0}8_');
define('LOGGED_IN_KEY',    'hWxT:d/Km!imS;VYL[@I-0(~|OobR+RK?7M~V-pNIr]zA|ZFu,[;U~.+EA|GgGc*');
define('NONCE_KEY',        'e6$r.j>o!sRG;0w(|7<@(MZYNRwB1|76Bh7;<O1>eb^0^-h+O6&Le=-~4I=<|#Qe');
define('AUTH_SALT',        'l^k$dX:F$H=%xS8F}J)]`qg3qeS+NA,bx(3Mn4v][5~oR]F|LB^FK1htVKFO:jvh');
define('SECURE_AUTH_SALT', '6iP*9&}*5<w>=Sz yhH?ILYDG+[bTq=WTIG;i.wOT6x+t=_Io)IF_POfm+dW0|B|');
define('LOGGED_IN_SALT',   '}+pY,CpOGvk)~;x(UJ$C41sJ6=WF3pNv-5#O1vfmhf-SWiV{ohomq2i>KkN)M1-x');
define('NONCE_SALT',       'vfrtD6)w )(b~(*X{kh}dDC~Lc~2ht.!>_JB#)/U{`3Y)g0CHLf[<(?EI,:CtFKQ');

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
