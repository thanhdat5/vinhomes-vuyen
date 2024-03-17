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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hipla618_vuyen' );

/** Database username */
define( 'DB_USER', 'hipla618_vuyen' );

/** Database password */
define( 'DB_PASSWORD', '$P$BQSICcDaQCUuFDHOJ7.mRUem6tGR4o1' );

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
define( 'AUTH_KEY',         'OFr pHUK4 20/S1Dd+#8?BR)rO8@<fCGgE`ZGpe0EvV~O!+(4CeCp`i=)->8Q=<T' );
define( 'SECURE_AUTH_KEY',  ':NU/76QcyFi[iuUqv.ghu;A!o#Wry8pG;#L~VGWg+$$185fQH%} Y#[`d}fXwwCH' );
define( 'LOGGED_IN_KEY',    '6kvfr|*EWmF(UW):eH 1|!~f;gahP-Q2rzTRA0-?C!<(E<L_*pceMWk8;T@wT={<' );
define( 'NONCE_KEY',        'i8j<}@laCO7NV!$3N;|Za,{4/g@Dr*ksVi3NLoT)5Ns%L;UR9*I13ZPPL7Nr?<#M' );
define( 'AUTH_SALT',        'ESUl ty{xY87,GTIvH94ivHR!<L|VefMBqVe; q)nruNoJWxuE?V}|-Bh-@W@<yK' );
define( 'SECURE_AUTH_SALT', '$sc!BBnuVR:ZOAT@.n,91^QEEHjEhR>]v@^MUvD,Y(#6eh1M7lhX#mzCGYdiz]Fd' );
define( 'LOGGED_IN_SALT',   '$3+[}r;Cj]7yXl#wG[[<b^R(.Rv)G:/jjEcE8BF16;EP$g&U1jAl+`#ejV3,#vl{' );
define( 'NONCE_SALT',       '{cjj %p`b(K,+H>9[zrF#qqY*h],^4c21]lx/6oL-0,=0mQ,u=:.7>.?u&65AVra' );

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
