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
define( 'AUTH_KEY',          'b]R?z7< -QR/Yrur4&![IMQ.4qkd,|Yjo}VJ.v0}}VGM2r?=Y{7iRt(9&T><6^|7' );
define( 'SECURE_AUTH_KEY',   'G,U4.P1/b`GG%IsQTeuekPA.GSGH/2]v<F*|kVJEs7CCW6^<5X8[Qyhy|`]<|jMf' );
define( 'LOGGED_IN_KEY',     'A|UQFN&o=oAr?1S7-b<e/{C iY E~L>*ob}K^FMeb8x${!Y>F];w:5x_m^mT2TEO' );
define( 'NONCE_KEY',         'bD(2689c%qzZBv#R*m5NeOivT~Sh@UB% ve[37_uJ=T/wm4K1Z)6Ti/?;l+Kme;=' );
define( 'AUTH_SALT',         'gNn74SXaVn-AN%m`_P5,o3#nPK2oe=`@V =X]pJ`U$*=QBa4oG-,so+A~`:x_<0r' );
define( 'SECURE_AUTH_SALT',  'Dpi-5|[|-J5TBK~)A]ea1s~3-+r|=$e;L}NhnQR97#2{Q <UC]NwZA^>)*nk_G^?' );
define( 'LOGGED_IN_SALT',    '2TnQlMh.G$}j2LepeMhydKswVlvG+-57k@N#xE/j|4$l8h c$^_b234|W7aWD>0R' );
define( 'NONCE_SALT',        '|Q>2-59w@r(okv<guK;WJVBAeW8au<S=98+[M$-&(QD0/8wA:GY*|2MPdDf>Z4-J' );
define( 'WP_CACHE_KEY_SALT', 'DYHMb:^Z;,;}8s7la,y8SWEGtM<=QA5eh6FXBc]>)OSNLvLe{/yT(D,x=M afUu&' );


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
