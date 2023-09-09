<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testhostwp' );

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
define( 'AUTH_KEY',         'I~Tl_7%^`rL2+3rY{L5_<0~QRvKr[GUA+=D6Aabv tB|LR@jqX|` 0NbS8#n4J^s' );
define( 'SECURE_AUTH_KEY',  '?y+6B@x>b;z^j*fZ!+VT!s_2cA*B,D6[nnxGcm|43_kllFJ*r=Ulxv-?qDa:`-|>' );
define( 'LOGGED_IN_KEY',    '}^s1I~a9c ~|Rn0..^{xIoS+CI[yKm4txtsu:O]%6n55l>t^1El@z}NjL&?RqF%X' );
define( 'NONCE_KEY',        'TvD~v`<c38C]u4{tV/h_InPo7:-jIM}P`4C1Y!V1xi|ZlyWlUNz;E .nw49!U~8,' );
define( 'AUTH_SALT',        ',l:UHO2>@)geu%Z/91E5@%BZ<i+v^>GJFyw29IBXya0KF&.*8O 6U(CCKWj?QIu(' );
define( 'SECURE_AUTH_SALT', 'B~ C08o! &a2C{cIm)VU,m9f{oByj1O#I^yy|TI#RYjor @+<gJ1mX/NhsJ8XNE~' );
define( 'LOGGED_IN_SALT',   '>H>RNbth~KxK0Nlc(dKD<*7MlC*P$K0Z^SIbkZA+vb@yn9_=OH5va2wTg,p|c1LG' );
define( 'NONCE_SALT',       '<DN[Px,{h mhqzHj*#%>MzGJ,%/<;Sc5p{uP. dpZ1yxw0zT#=.&${<@~E{T_/h>' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
