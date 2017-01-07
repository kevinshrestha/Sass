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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'lk!/Hiy%5fX[[_,_nOD,JavN3|N*0Em-|ZX.Ax11)-(BWn;DZX@hbATWo}8;q*i%');
define('SECURE_AUTH_KEY',  '^`GJbtiV^D^@agm,>YT>AWK/j?JiLk[>&Ba=NfXvu=`g%{HmW g%MEI%T<8po4Po');
define('LOGGED_IN_KEY',    's$z]OohMvnf/#&Gu@1Pcd<:<9:0F6au0^zUK$SgN^?o!D*~s7PF?)j4jwrsPvTgE');
define('NONCE_KEY',        'FeE|V<9`FD#o-Z5jVq1{oFFeW`8E,@Lqh>V#}59 gKFG^*HrKV9Z}Jndfj?@:<4N');
define('AUTH_SALT',        'gx&m|Ds .Oyv8=@n5hmUfC(LU8/(lq6p1*DJD}k1LHN e|U>}1%F7TEy]F<Z;iDc');
define('SECURE_AUTH_SALT', 'G(W|k>Y}D,.d/1SAS+aOui&Q`k&4pO:WzqfIZnezQ2zxwW=hhq]rQW|TfI3=(P%g');
define('LOGGED_IN_SALT',   '6R3L0e<#UJ!.t+N6H6B;{XRuY|-c4Tld}[c$%!.SPX@aDWa-*]VBjhrL`bj9k8%`');
define('NONCE_SALT',       '73(30wzF2fD|$EsqN?EYL3~PmjNH +nahjQqV Gl?}1a-v&p?0j%,hx&a3.XToU0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_underscoresass';

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
