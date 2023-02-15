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

define( 'WP_ENVIRONMENT_TYPE', 'staging' );
switch(getenv("WP_ENVIRONMENT_TYPE")) {


case "development":
	define( 'DB_NAME', 'test-dev' );
	/** Database username */
	define( 'DB_USER', 'root' );
	/** Database password */
	define( 'DB_PASSWORD', '' );
	/** Database hostname */
	define( 'DB_HOST', 'localhost' );
	/** Database charset to use in creating database tables. */
	define( 'DB_CHARSET', 'utf8' );
	/** The database collate type. Don't change this if in doubt. */
	define( 'DB_COLLATE', '' );
	define( 'WP_DEBUG', true );
	break;
case "staging":
	define( 'DB_NAME', 'dfscdnzhrd' );
	/** Database username */
	define( 'DB_USER', 'dfscdnzhrd' );
	/** Database password */
	define( 'DB_PASSWORD', 'Gnt4YfRvYS' );
	/** Database hostname */
	define( 'DB_HOST', 'localhost' );
	/** Database charset to use in creating database tables. */
	define( 'DB_CHARSET', 'utf8' );
	/** The database collate type. Don't change this if in doubt. */
	define( 'DB_COLLATE', '' );
	define( 'WP_DEBUG', true );
	var_dump();
	break;
default:
define( 'DB_NAME', 'dfscdnzhrd' );
/** Database username */
define( 'DB_USER', 'dfscdnzhrd' );
/** Database password */
define( 'DB_PASSWORD', 'Gnt4YfRvYS' );
/** Database hostname */
define( 'DB_HOST', 'localhost' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define( 'WP_DEBUG', true );
}

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
define( 'AUTH_KEY',         'VPrG~0e^zx=`]n*?~*7KXga3C8Z+y3[QR0P9^(|!GG S#ipU }C7)T7X2.~Dqe+9' );
define( 'SECURE_AUTH_KEY',  'Hrk$_4/^B!fI)7Nf?vJ.=c2O1t}%^|6cd__}XX8@QX>C`)/mcdAq&.v}@WhNU`**' );
define( 'LOGGED_IN_KEY',    '_zGm(t }c;+/FV/qB>6^v L|K`N^+M.lFi/:/9ymsZRxtAwSbcaE}pd&`L=UO>|=' );
define( 'NONCE_KEY',        'x(M)g|1<Mp#B:&+Y1i7%s0e.JstvVY~ mU>tD1ZGl,!:IWw6pZ!+*f{ IXKlJ/mp' );
define( 'AUTH_SALT',        '+Tx-1m^mf!7f&#)}1b}37oC*DF0tChXh{^} bh+wiqUHvZ;-o:t?+k~!I.?ye:$&' );
define( 'SECURE_AUTH_SALT', '_!:Vxc|qo1l^N8+:!MzY!t P*cZ:3[FsB}hV$[3vS}jL3CN_tKf4f3n<2VVDI5Qd' );
define( 'LOGGED_IN_SALT',   'vqU^/6cDG6%{h@LFL$.!-95{_mW(:<2r/5nY?mzXtFkrUzC(IEGRX%n*P`QiO/dw' );
define( 'NONCE_SALT',       'zf8O/6OoZ|+<kS$9Zcef^R/RD+x)SoIoXh!:w>jWuBwJGRrE5s9%}l}4$p$~&7-#' );

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
