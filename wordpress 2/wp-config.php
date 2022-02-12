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
define( 'AUTH_KEY',         'PX,p)w{nJMQFD]w# KiYPrtAV+sctO?mab-Q>2b`D1tLL@*qWf&TBHKH?U_!Q_:?' );
define( 'SECURE_AUTH_KEY',  'r{sRB1l*m/@dj`}Ww@BSuH@[72Y/=a+wLo}7|S3F~+#buW8DK~~0U~!12XB<O=t<' );
define( 'LOGGED_IN_KEY',    'l^1h,ni}I(0O|]ltB8_Cmt:Qv;[^%n^7dfDnS0fPxdU^5xYtYzW<4{/x7cQ*dClY' );
define( 'NONCE_KEY',        '-:f[yhxe(k P X<<Y qvwl~`@% T<Y qiHZ;u9J)cW{SM3/TM@gY>xx9K/Qn64Rd' );
define( 'AUTH_SALT',        'DsP}_9I1(S~_/?iJ)5 N7p!~C_vWSzi<4}|w^pQ5,;e-ExOE7d!_39($%-iEAJWx' );
define( 'SECURE_AUTH_SALT', 'g>IyDO*;[PQxSEEB-6}N,~[kv^hWWf47~9PEryARUJaoV{1zbYP}P0M}_$hqwk1=' );
define( 'LOGGED_IN_SALT',   '=*q0Q@lmfuI+E<!4G(Mi]X%%eD;)5yRh`za88:^VUlSavG:6:1M,Aoe#SucVo??]' );
define( 'NONCE_SALT',       ' EdWjb2QdX*#Lq@%`bt,I}>1ZBg#GC^id(N7xA#n Xn{XKLxiiFSJVDwL}.cO)bI' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp1_';

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
