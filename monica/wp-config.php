<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'monica' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'X;]Y:gH<)Ro.a` TNZNKJ6LK/kidD1c{::[=xlU;^kgsVXZI6wneu_Z1B&A^8r]V' );
define( 'SECURE_AUTH_KEY',  '|w?M|xtOXoviq cF(}m+<!qlQA>|,Bsgw{!iO|u/I1s=%=L}rT~k;whYa@!]~(Kh' );
define( 'LOGGED_IN_KEY',    'Y6I5-tPTi/WI&lg!of5QKAF.^^O@C4/{JaLMqC*CMn0EWb3pYZ~@Ny5!- QGw2&S' );
define( 'NONCE_KEY',        '1lGO_1`?8iF(^#mxX$z[<Wu3;K.w,RE*xL<NNlAAF-!$G+jE&.n^x[`6RR_ZnMu4' );
define( 'AUTH_SALT',        '>0&R64`#}5NvCQc}woy:cKXwGSET N)%sVV.!2zo_0u;@.-?a*<QNaL*&rS;UVvY' );
define( 'SECURE_AUTH_SALT', 'o1EVf.o0_PTSz~!7HZ.Zc_Se7=Cl|_FE7oa<7/Igcq[k&>i[V;3?:I3|4U?AV{)K' );
define( 'LOGGED_IN_SALT',   '<|4VON`d5?kR0UwLhlFnE`ZMlNRn!3Ss8M^+(bW5Z-_-,6 [~hZlDS(C`8~SPuwU' );
define( 'NONCE_SALT',       'P5;8Ek]!B_V[n9+.6%~F1eT~0J=0|>R:?xp`=U=Q<8CV[2Dac?,G4NxS9C??mX0q' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
