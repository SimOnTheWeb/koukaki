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
define( 'DB_NAME', 'koukaki' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '?G2e|X$M;-jh =06Oyw2#Q&KPH5^91Vh_gh86_#SV<YIP@5b,vrN6<^DVnrU?{3z' );
define( 'SECURE_AUTH_KEY',  '/pU0Lop0EE]:,mxM;OA{BKo:TjcJj]Zwz}xQe?<)d8<Yo,hy4:>bNGY:75B&Cu/#' );
define( 'LOGGED_IN_KEY',    '7]1rDn$C|ph#}Vu?[}3CpG`A>s/0]4,fDp d(?MI,@36L7t~5tvc-{}D!?8+cox2' );
define( 'NONCE_KEY',        '0&`&jZxF!-y(gK=I9L:I-oz6S+s:JjnWG(Z{?$|0hes|Fn%G}K|m^KMV@WaE6G/9' );
define( 'AUTH_SALT',        'T$JH3}FqXtE:`$23q0TGe ^!I#_sb7r>2GV&=Ajuz}_ja<(Px&L55<kI7p;lit@S' );
define( 'SECURE_AUTH_SALT', ';{(GSaHg(ilf};JwCpH#/cnOol*T-c=O&)]zm[BV7Sjd>%lG3%Q4J!o3C^YtELu+' );
define( 'LOGGED_IN_SALT',   'f(ObJaV:P2`WYn7Z@uyUc+sU8]V?_m]26I=v>7YsQ|_+I#YcD}au:mP!JeR$+nc>' );
define( 'NONCE_SALT',       'w3+Y)ADT<pdNyU0^ZJ^Z8*qP={Ql*y$ruW=0Z<?m 3-uBX#`d#5{$CYAT$fp2+QI' );

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
