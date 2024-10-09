<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'redisonblue' );

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
define( 'AUTH_KEY',         '<je+<o CLuv]}oLMeM8-.8sJ^D@1PBj8`E`zM^8YCE4VTZ</TdP0wpHJe-O_1r=Z' );
define( 'SECURE_AUTH_KEY',  '`(oFnV=KUX.d;[.Dv4`;n{F#@+Va1us>`>=<vd_tS!x.97j>V{07TbAms^KrbN?v' );
define( 'LOGGED_IN_KEY',    'G`%t]n3Mw`8&8*25T!;o0=%(rKh9y:H7zMK&O_AEu*<lBLx2U6y_N{xW2al^Q0([' );
define( 'NONCE_KEY',        '1^f<j*A) v.Vbca{(?5^mCOQ60_akHv6Bw}$W3<*h<z,?S!jR=W>j/7YEuGE*:e7' );
define( 'AUTH_SALT',        'XK|_e?#TnWtJ|!y/M[X_i7JX;qOS^}:io]dt4],eK1,&TwQB5cL:<;b3vE;hb6fh' );
define( 'SECURE_AUTH_SALT', 'XbJ(T-RF?x1.6<sB.3.f^yV98&Uo:=@S@<V5]x?3K[xaA3V;w+q(M<XCLOTKaWnS' );
define( 'LOGGED_IN_SALT',   'U&;N$I+b7u2IiIu%VaUnZ>}cSWOcF5P/4 c-u^.V JIIwh VYij^ZP V[nLAeDy9' );
define( 'NONCE_SALT',       '-%9V=Q|w<bLBdInR>R4U4rn$)a=|s@ziin#w,1TN.+QkoBHuI9=&vg0m G;Z2m#&' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_redisonblue';

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

define('WP_MEMORY_LIMIT', '256M');
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
