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
define( 'DB_NAME', 'travelmation' );

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
define( 'AUTH_KEY',         '~vU+%(9qBniN!h01I/?3k~[Lp*5}t?[Bd_;9p!D2XM 1C@C]E)7]c.-mWiYO&K+F' );
define( 'SECURE_AUTH_KEY',  '$(KE7^;IdX2C;7g(3L|Ii/`N ~`M|R&]ROb z/ba/gO1f-|rwB$|+tx&CX4:zp2C' );
define( 'LOGGED_IN_KEY',    'jy* Qel;[@GE64e%$Z<Vm=4o;LdHc>j#5SIC4X3~a+HVzY?T5 AQj^__(7m}d/4+' );
define( 'NONCE_KEY',        'I,H/t&e7oK[RH}Z>yK<J%5JklPQ:7lu8kC$0q56M),d{m6iToJeYh04!.})63Nmp' );
define( 'AUTH_SALT',        'RiW7&]M:+C~OMQT{V|?M9L8RjXR2CP5ao.PJ@j2PsE^a+y!#k8idqQem@aOK/PNR' );
define( 'SECURE_AUTH_SALT', 'B`[in;DXY7A@vYDK7oXmq#183KgLEfx#~Q>/>>4R0XGi2:w EJ_9fr`v~k}>2uJi' );
define( 'LOGGED_IN_SALT',   'fJW)(x_i<xtNDq7AX2hbec6.8]w_;YtPa+/]clLF&#z/Zd!.d]BUzP6@kwkFz4lK' );
define( 'NONCE_SALT',       '0uTYQez*L>v1I!<;=kk3 (`eAYO}t~3hwh}HRFIv|3 yc=hA<LX$R%Om=o)fP)f&' );

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
