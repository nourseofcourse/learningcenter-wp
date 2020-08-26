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
define( 'DB_NAME', 'learncenter' );

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
define( 'AUTH_KEY',         'EHSFDb5IJdNmRj8N*HwKn5SWiq`7k*/&Br,0om*U(5n?dz!o`tPw`?axJD:#+#w-' );
define( 'SECURE_AUTH_KEY',  'pNAK5QTwW[Eq7}0g&WPG?JqzO(/I||A|pgry@KZ%H2X1W:wbJAE-N)qC`ZR9*J>.' );
define( 'LOGGED_IN_KEY',    'NXKQOxzXCCc6@_TjuQ/A&NZfgD#xF*@?mNcIZ666_yi]|SRD7x3Wy`8z/:5@&adL' );
define( 'NONCE_KEY',        '?AX@]6&ZieDV],OlnrL@3PIRSiR-m/:2]R1FVfs&fE9UyHq`HWS0phz7:JbB1<[|' );
define( 'AUTH_SALT',        '3c%)M]}?kj9S_9E6G`SpeDu)0#$I3j8BJ6Ca!,l8,G2W58?n(SO`T,Rdu(3YqPOP' );
define( 'SECURE_AUTH_SALT', 'k#:ux-_7cKF?GJ^_vIhd3aVU^9#f6/iZyh7;>NCC#c$tld;&-Xln{FC=I]*{si./' );
define( 'LOGGED_IN_SALT',   'pNgh3,TvKA=IBQMKa?:[C7cKL%sZ2<D9Uhx3hBpBvUv/N_6DJ*Ro&6lb{dsL$5Ks' );
define( 'NONCE_SALT',       'E7Wvh6>NZpoDgG68bw,8$skg4KDPfL#X9PL}w}piI<T W,OGHKhL&H?CVKFBsLSq' );
define('JWT_AUTH_SECRET_KEY', '06~fq[OBoZt8*t.NQsdEHb*CPhyS}..(|;-N[BUB}y=|}snoEbmn~hrgSlkA &i8');

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
