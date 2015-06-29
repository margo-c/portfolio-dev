<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'portfolio_wp');

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
define('AUTH_KEY',         'y.5]ed.Ouwqzs-p}ot4#b![h%?gr@)}Wp7TgSteAfYZJa-hn-pK&(+=zb34M-hAC');
define('SECURE_AUTH_KEY',  '~ZW]}C(R1dl,_ls[>.+,Au*BSR?D3M84soN?#u%C %2#pS&}>G*W-lv>#Y4iC1md');
define('LOGGED_IN_KEY',    'DB%qPIj)^z4*l*7!^vM/z-PQA?A$#yW_hLul#D(bd:#(!E!lAELF^B*L-$59_^P=');
define('NONCE_KEY',        '+hG6)uQ|eb{h@~<gLT<`d?DAFzf>kkW5xc-S+/Q`F0:/mRQ.j-/72p-L-,aB|o`A');
define('AUTH_SALT',        'ci!31Ii&5+p?)[)U6+?X(]{Li#jk{rZ#+~rrKu-NUTU>HKiz5>[2zhjIA,l.N.Uc');
define('SECURE_AUTH_SALT', '+4G2G!XUDAsbv5I`c.Tk Mo@&Rs3G1UQJ;/N4|6Yvz*i)5Va@a6BA,Z7$=Ki57i-');
define('LOGGED_IN_SALT',   '[<cmPmcJ^|pi!.#MY,; 9 LZCT.K#$n3pHK9DXO/-d-<@?z2b/qlh,[5v_ A45]/');
define('NONCE_SALT',       'NLB|2;*$*K$kS}$uc1KT|jzI30q~5MCKp ](#;)C|taEL$(vZaP*17MD*bt)c!Cv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
