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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'nuedQB*TRdk&u=CD}x|lut}N]A!2$J9_b^b6~y?#L;:8~w#r=D1.&%7zlV-&;Lkq' );
define( 'SECURE_AUTH_KEY',   '(:%>w2=b4{_*D@3fs^M_0oe(uo$cg6yF{pW/P}sSEmJvs*#X#;>:)=IbHM[$O$yo' );
define( 'LOGGED_IN_KEY',     'gbRvc~F3XvJ3a(1!NJSFX;TTU<Yx1]!V4nq,NW 8lhD?-L5J(trXDX85MZcKX!Z`' );
define( 'NONCE_KEY',         'T=.AiW&d8gP3Ht`q813.BK`VXFmC9M{iE;(@dO&^L5t:^&OKm3`E.nurBY_UgmC(' );
define( 'AUTH_SALT',         'fbXd@fNK}mU%+ Yx$e#Nn]T+ggq*x#*sCg7#!@3hy?V?$n{X@4aY8S)sN<*bZ&af' );
define( 'SECURE_AUTH_SALT',  '^Xx-^8$Z9:ro#ld4gah8:6lWE:qw)m62&o;f$*AxR-Kz|rP|-;y8AkhJHEv<ghDR' );
define( 'LOGGED_IN_SALT',    '<`1hy;M>U^`P2E^F8.p2KGp@f!N4P:vz@%>P=)wjs-_%$jK[}w8=D;`i4 +MaKtn' );
define( 'NONCE_SALT',        'px E3tI90xQR>98lRQj%q;5yX59?eBs~%I=R0[/xKxhMLT?;z;qO.fvs(][C(SX/' );
define( 'WP_CACHE_KEY_SALT', '_W~{5?{X+;&d&~B(v)_ 1s1hfk//U|6<hbV;/#!7~$P6Xq-fBQ}3hR/z!.91h1lV' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
