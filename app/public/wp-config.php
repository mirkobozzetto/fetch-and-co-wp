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
define( 'AUTH_KEY',          'Dkb1n[n=Z!- W[TxLZHV2*-tL*fa,u:Xu+@b+5-f5{:xGi&Nf)E<&(FZ/*qJG89I' );
define( 'SECURE_AUTH_KEY',   ';Qk`)FJe;u1QfzT(a~X#DN7YH>WxI}? 1_GTp9R, AU0w#SDGk]t3|Y@iL_fHCI/' );
define( 'LOGGED_IN_KEY',     '~m-:LcLI@9x#v&cJ`cXqBw9p|W+2AGmsWy@vT)AJ.,#o+/LboD<<a;[9|~4=J[@[' );
define( 'NONCE_KEY',         'aUo,A[t5~uJL:1QmXzE wZR0+6Zs&(|c,q4F+1NNfjAV3X*Pu?!~}n6YaCn<96.x' );
define( 'AUTH_SALT',         'j+`L<}-=<z+DoU2[x}TqP=E__ZH=<BFHydRVl`OjE3qOOrpN>Ir[?Lx#>Jy+dDvi' );
define( 'SECURE_AUTH_SALT',  '_x7Jz>-D(M<cXl4jEkmyU`&8}qS(WR7`(fX#yd)L;DJ.~5. k;f9V$DP%+%S+k=n' );
define( 'LOGGED_IN_SALT',    'dJF>oJeQcR}QETa$xf3ax{M2:X@oZw(0DVnlM$)|}k)cL}C@L:wjby5;/A{-/,>3' );
define( 'NONCE_SALT',        ')Xzbc#D[QYs,NQ!K@hw/tza49/pzKAS)ZxQ$%60MbuyyT*!d=+a9oqPm1!)d3;my' );
define( 'WP_CACHE_KEY_SALT', 'N{T(z@LIrAhBB!eQCa}-6|TJ# |}y|P0}EM48oh4zj.*2KCrHkmmHtFBL)o{+ph(' );


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
