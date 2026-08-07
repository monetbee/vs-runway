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
define( 'AUTH_KEY',          'wC[MyMg+$GGRA59qZ=gT${^a~g *,Dpp6?H?#?eiT&Xp=L{$7jiDBd5sGhL-:,<{' );
define( 'SECURE_AUTH_KEY',   'AL$Zy|-3N4N`-/SsU}we_m<|A2Yb;0W6rdky/Mm8s$BiSE<|%uG<=9n+l@DZw4]w' );
define( 'LOGGED_IN_KEY',     'qL_xaS55zo0P{Q8doPi+NVx`+|*[IZ|6uwb^9k>o]:qApnG:W$_,F*V>~V7DUZvI' );
define( 'NONCE_KEY',         ';kJBo;J+I?-(%A@JthS0_aK]5u3C]dO%y?KHo5/;biv<7=JE]SKK(eb)87|)~68j' );
define( 'AUTH_SALT',         '+zCy79+fA$kOa9en6QUd^qH+ZS%h2OrYJeyM>k63,(,91XXab49z!6@dE_&Q5R<N' );
define( 'SECURE_AUTH_SALT',  'h_Wms|=y))|?,F~.c7Z2$Pp#:O.^0m#^=|77%_)$_[P8]^E-BWH1%Q.&95Yf!qoY' );
define( 'LOGGED_IN_SALT',    '/W6OgyKU0BpzUK%D0X4@B?G4y#qV]4qaZIaUGp0;.^p@)sD4l-oR?ypS$&oCh@r(' );
define( 'NONCE_SALT',        'h1w0|z34Kq,D_(n)rW0(:J6@8Eo$-L}O!(zLZ#+u0$ujemFfkH FwJB?H8BY},S{' );
define( 'WP_CACHE_KEY_SALT', '.T)D26l;H>W;zU`WrH3>_K3bvO=,)R[(208Y2$!D)cKgw%s,sv!^fXMuV:ZV{XqX' );


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
