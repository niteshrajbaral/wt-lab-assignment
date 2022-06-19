<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'movieweb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'bQ>tBnutC>A=V^~bevf%bY]{yfT9=s)baxO}_|NErioIyspSfAG}yXwaVsN!^M7k' );
define( 'SECURE_AUTH_KEY',  '3,-e[s_&<;M` Ma+s;iE!3/hNF,-hrg9d!5lj^fpf&Cg(9aRFXG5}OLh4*y$tE9Z' );
define( 'LOGGED_IN_KEY',    'K`5Hn=ZObyVe!>DQ.r_($ |LEM5I?)qEBFhMo*vJlI=egr]Zi|?h#Py)e86dE]`9' );
define( 'NONCE_KEY',        'TCOsSWVVzxp!I K2_]DAvr0i&E]1|XI!=7i-? T{p,e:6tI]bb|jX%hHWj<5X:b9' );
define( 'AUTH_SALT',        '{/gW|c%qNi1O}+t+6Hdm3[Xn!67Pb6FwXOG@;uxG}GtDs~E WGkw@m)6=6Y+*@Q*' );
define( 'SECURE_AUTH_SALT', '_*<e.%ML#|&~Zl r`@[1|E:h T[*Ey?,Z?i8qo/B4cgr<Ik|IHA7E]yaRuQqaCLt' );
define( 'LOGGED_IN_SALT',   'iI1,X0}6^CA)[3Tt0vi$Jcqwt $Y7u[ZeYS TK{x+Al5fayW;P}T{QRYO_H|P#~?' );
define( 'NONCE_SALT',       ',C6}6}>@F&wQz`*qB*sltFn>v6:{#0we?VLE6hCZY}>BLL-U%A_4vp3`~Onlj$Z$' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
