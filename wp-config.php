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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         'PyI]m]u.<gvVDL3C^2IjZGQ V)X>W#J[P#`oAwi;30><_luEPr]*l]pi;LHKGD.v' );
define( 'SECURE_AUTH_KEY',  '#Y)lb akG<4ihOu ,`qx9 JZ$q0yI.`MNH|e{LtQ]%vz3:!Wz8+u+A;q>++Z%,!Y' );
define( 'LOGGED_IN_KEY',    '[u.BXgw^OADN}vF822C&[*VyqS]7~aQH<?sjlIS-H9b2B^*o[1w.~/W7A~X=.IVb' );
define( 'NONCE_KEY',        '{!-loB.uOxYO-MafD1KrHIdW&5pQdh*lzz.XG.^rHO;B+MD(vuvQR6M-oDH<}l2m' );
define( 'AUTH_SALT',        'XpoL:)Q?z/,x 8.Ly>ALm7>/RaBk#vAUlU$U5QL_z;7UqPv-HalR+8;G:Q4HmWD;' );
define( 'SECURE_AUTH_SALT', '%Z)|}5u`f:O9K.c] OBlChg6hf6!Hl].DfUs/.9*x*})N?yf4{-_o%C~dp:vKKf^' );
define( 'LOGGED_IN_SALT',   ';z%d`+!jML^^ZGMAxRW`kxzw_rG0P{8v3<$6a+0]1C5N_u7)1?s@2fQ>5sz+-[b.' );
define( 'NONCE_SALT',       'JZ}:yv/GwQU$j|](6[!,O!IK(Y %*`3SQqFs8uWAONR~M7G1LwX#i1N?BZAKCfZN' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
