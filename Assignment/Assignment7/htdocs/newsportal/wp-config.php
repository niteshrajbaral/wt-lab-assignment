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
define( 'DB_NAME', 'newsportal' );

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
define( 'AUTH_KEY',         '~qTgg1w)F$}f3&G$W7XMP[D)slBTn0RFtD;JFoFf82a8p$U~JK[~!_av:Awu8>]R' );
define( 'SECURE_AUTH_KEY',  '^/W  Ek~vh^dOFDuk/9<sapb Rh`MEv@*v8=M~d~.nPCC([NCp2|N1w<=S!/}kd ' );
define( 'LOGGED_IN_KEY',    'Rv!uzc4I!HPSdjGRG!V6pE] 7-96$N9bx0@~@NBq6Ldyv0HSa&swjnd1@wg~Dk^t' );
define( 'NONCE_KEY',        'mIg0vR^z.2$p{W[uUQjDg+,w,W,,Ymu&F(Fvlh6=| 5TDO7AIJe3=f)1K&d>%k4^' );
define( 'AUTH_SALT',        '<c(M4N*(,KTRCvzkXT5.8zKZ;YZlPj3$mGd1SHUbw=b1I8WM8q7BMyPxl>GjTEv+' );
define( 'SECURE_AUTH_SALT', 'qQ+ws+{JGZw~XbNls?#A!ji6~+lkv[q}0q7w7xD9mki$79HKL>uy]=$BPYzNdEZP' );
define( 'LOGGED_IN_SALT',   'o(h60D$_t$Yr`s=Sf}!^9Pl.6F 8CHup]|$4Ia=f14e;;Q?eo:WZ+I$DF}1sB-RU' );
define( 'NONCE_SALT',       '@l)$iNsd8:t=r5<Ij7b^L#oy-!:m!2pqGw Ah4^SM:odx|_T)tr6_VCx4;,JCC4~' );

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
