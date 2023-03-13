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
define( 'DB_NAME', 'test1' );

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
define( 'AUTH_KEY',         'X6lUV^N5IWcA<@70@kN$d_xBOittM;8]m>`VNcJNXC-{{N}<@UXY~FiFAsOeuo)3' );
define( 'SECURE_AUTH_KEY',  'd&`yN=Gva,6$Do+0zyH=2>y#8&~5H7s;O>ats;Bjm9{Y68([4W*@(RYgDF>Bj.]m' );
define( 'LOGGED_IN_KEY',    'A,G*W,tV]&ci%`_W]8|hj)b>xCn8C1jVdHW&5YZRl]H0<_Nb{~V}Dw_e *^F5v{R' );
define( 'NONCE_KEY',        'G&w7qhM)|R%uCrl<UnMg-e(R_qt.u[/q{A1|AmxGA:>^{rM?D@RgH45ImZNvjyZn' );
define( 'AUTH_SALT',        '|PagRshr.(<.q/loi$~]f_c=D8PlTRK!8~e*[LcW/x@6,`s>P9t#H{rV-@&E-][A' );
define( 'SECURE_AUTH_SALT', '?|JS[_9 $0Wl+4Ged>5!sZ[KOcF nH nGR|)OQZ;W}M{8@vchX2oN1Sgtj>Mqsc]' );
define( 'LOGGED_IN_SALT',   'qFP2&kiQp5AcTtg]Pe;j<H7F_a&M4q2,n7x+tD8HBb7R(:fukW9Iz1z9^B%}HOKH' );
define( 'NONCE_SALT',       'WM_ek6{?*bDXZkx#%,g4$XZR{Hg0-)$N}4`o,8dH=nbtd^N#eQLEL>+>P)FrOF9s' );

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
