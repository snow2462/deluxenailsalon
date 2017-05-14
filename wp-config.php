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
//define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'E:\xampp\htdocs\deluxenailsalon\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'deluxenail');

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
define('AUTH_KEY',         ']gv?.rAdW^RB72/jMJ_{|eD4,i$N.(J0qAy2 H6RG8!/QFvaa*`56}:l>Jw)}H9H');
define('SECURE_AUTH_KEY',  ';y6feqA68EhjD,i>{-LD-si2[?ZjZr{,<OReL_v&{Li1TzqE4TI~W0bS+ee:ul>i');
define('LOGGED_IN_KEY',    'u1,2cBR^J,$Tv&kA_([_s1tfeVCw/d+j0PD)meH{&}aW3&x+,AW8$elwotj?cd}j');
define('NONCE_KEY',        'o+i.Tv++$js! X_38t}rZ05TvNaAJfnPb74+m5V]zMM)9,>x%ST%J*N|jR<H6oP9');
define('AUTH_SALT',        '`wrLh8+>}jx[!#M%*hlS94M+%eKlo{wEbnW$4ki!uoJJcYaFqI;r4(]6|*R9E:d5');
define('SECURE_AUTH_SALT', '0YcaP/E6^n]Ii,r*Q%$iE[rjEITe5N@g0M.mBH,K6sTBDw1>BuKQ(qZZZ@=~>Cm?');
define('LOGGED_IN_SALT',   '(}+XUGXaRT7}~f ?1iWs,Q$qfh!sJ2KzOe|G%Sepm{*=SiY0!!we_#s~PorjS?,^');
define('NONCE_SALT',       '5?9c0-JAnc?CH>W>/AcG~8s)O*;OsxN7#iNot!nVhv&Shq.}g5~=;^[3e4_xJ)&b');

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
