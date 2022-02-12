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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'Edquk%4E?6)rzaR.9=bWVV54r8f|gZ#cmdvo);v_H+[}ODa<N=(F<ae1RZ9GY5PF' );
define( 'SECURE_AUTH_KEY',  '+Ik-,xK)t07gR>U$w/z5(e^s~wTU.RU&GAq!j]=O[0~lH9@Kh5jbXjdLFD/2rj@Q' );
define( 'LOGGED_IN_KEY',    'uTku^6[f~YX3UPNEaOupl2Ap9-u$=vFvLTQK~_SU4LRg:hNw]vg(O=a|%iD}Cb6a' );
define( 'NONCE_KEY',        '(&awu^49r=tC@]_)u_Pwh@,9XT]GA5E7g:]$(@1lKCwI2R*GS9U;S7< RkP!uk$?' );
define( 'AUTH_SALT',        '.wlxjd2T;WG>i})o:>25T/Pb2`/akCI&HCb-crJK70@EgiGdKa%N|7g8Bz8C8ZRp' );
define( 'SECURE_AUTH_SALT', '`r]D/ tQ`Zl1WCgAR#{n0jm$Q8; ?{z,FlWl6 nQmYIBky,CGEi6_&VRW k37o5q' );
define( 'LOGGED_IN_SALT',   '0dFsnOaBkG?nw~.-mqCP**NqT]0^0#0iw*5lz[0&HEL|6gd)I3]7]K~h;q/-QWFI' );
define( 'NONCE_SALT',       'GYq>^!:]V32FS?,wxLzZ>?Md4bKU?%F}Z|NX7%b:,7`v8+@&O)xQ?VEQ,~?=tZJ!' );

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
