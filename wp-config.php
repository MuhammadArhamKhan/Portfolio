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
define( 'AUTH_KEY',          '55BxvMpZXFs&V1(z|3Rx=Sr|Ktl1E`wLHd$sKsj*~Kd{Yix[g)no3CgTv.4uFIlF' );
define( 'SECURE_AUTH_KEY',   'fsIlqTF6y`:+Q9lXd1].#I!P?Ou&?K.YFM>e[OFf?q7A73v;|ImP07c89w:_Q099' );
define( 'LOGGED_IN_KEY',     'wIZ@|1H7RuH*4!sO^]KX2_WEgcpnK&59%R?ovXuMBC>)YY+fd=<#1Q]j*gF]v8lK' );
define( 'NONCE_KEY',         'iKkBypa^.9WGFJ-/%$Sdfc6iM`wjA>( #+Jz_91N$+|X^6L)0g9UV.:zt{QSSC4:' );
define( 'AUTH_SALT',         ',`mh1k>WyW4%coz<@3Dua?<`RjkZ#.FXOHCEk _Nt;n5FgYIo2xb8}:;cfI=/D%L' );
define( 'SECURE_AUTH_SALT',  'Op<@[<;>jhlaAW9m$HoJ}42x.A1~T#P>@w3/6sWbqT6&Dx&I)W>I|xEi:4(zS{S/' );
define( 'LOGGED_IN_SALT',    ',ayu]fW{M(X0G.nMtwHedKS(3i*TopQgY;y*LnN4:MBc3@[feYO._jbRx?}hGd4c' );
define( 'NONCE_SALT',        '{cMP>*x/Ghx^ _29ZII%B-JxaKBok_?wxT1!<=FhOr+4zJd*yx<Tl9<Oziicg+Mp' );
define( 'WP_CACHE_KEY_SALT', '77{+eNd#!M!=1RgRf:aGBcr(r>5JWxQLNK)g?4jxcW_lj.m%x_SV,;9cFC4&&nBf' );


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
