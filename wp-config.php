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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'dAqb_KQsk+avHT3`Dh[%2?T%F7x8:=wMP^@~p7j~Rb^<wl|!2DxlGP*K_HQP37pS' );
define( 'SECURE_AUTH_KEY',  '{Lf+?Y[-L+1%IlULvN&JMB4*|`-8>sv;vCLpOzksM3k$,<`_#kz<fsjBiGF(e:Xm' );
define( 'LOGGED_IN_KEY',    'hE~0HqPi2%V6(z_.W-CFq:Y8vTsb.iJ^8IeuL@7u%cj/$lSa7Wg;ikskRFwsMOB1' );
define( 'NONCE_KEY',        'bHTB=DEQ5=6Qf E?vz,m:lB{*R}?2B}LfiO!liO#JnZ@>pSX, 72u)ja[E(O3?6c' );
define( 'AUTH_SALT',        '~X+r5dEV[&QH%A@)Ps>UD}v3U[S:u2dg@KkJT@if]dS(#%-SV8-2!lO8N?0Y7q}P' );
define( 'SECURE_AUTH_SALT', '4vsL-nH,~Y$W.~@~O;I40Dp#`zijRXzVelUdkBPlBHxZjlewDTX=g2bO<h<|Yn[I' );
define( 'LOGGED_IN_SALT',   'p#yQcQ3,n DP%o9tJUaq2StmK5Q5fmY,WZPqS`*)}V#7eU&Z9?/;wMDuI0bUa.l!' );
define( 'NONCE_SALT',       '.H7WK_G`vg9I+s6N(?O y:`|`>Q--VzT{lBwE8AAAseG`*.r,HHLma$Xj|Ax|Bjp' );

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
