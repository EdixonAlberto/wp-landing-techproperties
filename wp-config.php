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
define( 'DB_NAME', 'tech_properties_db' );

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
define( 'AUTH_KEY',         '|9VjruT<?pe8#urM>unr67/$xhWAe,li@ltjs]LOiofvZpy`O%)H$Xr]+$K gg-[' );
define( 'SECURE_AUTH_KEY',  'UdvpqMW#q;#LgH/-5;s}VFquz|E~_DMetk_;m?~As[jZz-xm>:h//w*K.jIH5<mw' );
define( 'LOGGED_IN_KEY',    '9OeLtujosH<{OgJ<EQ015VwwL R{&7Xig 1rvP6Sa|ZXT,{!_y>r50UIhgc/$/>X' );
define( 'NONCE_KEY',        'nV7`i}vEIj!F*.eIF=mzHs8qUqeBKr!sBY(+Q,6VS9a(,zJTCK;/bk$u;jP_P.RA' );
define( 'AUTH_SALT',        '[^dLN5nv8nEus<s=+a@T(eLI`5(&p*92Mv(h&?Z@Y4 3=xY2G>qZ%|-tV#2<?v<4' );
define( 'SECURE_AUTH_SALT', '/?L*X29Lb2P@LzB?$?XJL$W50N`wF)1*8)MShBs`|GXeM@e1~#<jU],oBR)8y7dG' );
define( 'LOGGED_IN_SALT',   'xx5Oh9<6?@Eej8g3H|4A{ri_j(:XWTTy]*`;+VGN}a!WA!@27Nk8l5=)4/Q>8(ZO' );
define( 'NONCE_SALT',       '$% jeX)7r#S`rleI7Vec-1D$%lq/xEGbl=l{;1r@2XP/d4K=0k0y:4.S=y)FCIUs' );

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
