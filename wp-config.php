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
define( 'DB_NAME', 'project' );

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
define( 'AUTH_KEY',         ' ;F|+p+aiHDr&uke=<sPCj;uAwK-eFyw,@k{!BshkgJ|tgK$d=}WSYVcM4X>q=%W' );
define( 'SECURE_AUTH_KEY',  '.jO*ez[lM:OM(WU@:S~4u([`;h*`g)$M=}FW>#<sH3~y(.lz/h6D4cVuxD7G696o' );
define( 'LOGGED_IN_KEY',    'c1?85qWh<bTd1meB6%E3MTmAH%5W[=Q*vno{$Qs+csQrg-qxr+o:vHbA ;xqcmHJ' );
define( 'NONCE_KEY',        'Fn$olL[4C$<gFo7KR87Px?72wl<.sfyzMa@hIX>v1+NB6NBF42W,r<7?LA#DWqf/' );
define( 'AUTH_SALT',        '&`j[I%BL?89o(lKqO&t^E!axrRl##Lo{fj1Cvn8FPS^(zJ@]szAKm@Y!k9(L@?%c' );
define( 'SECURE_AUTH_SALT', 'UD7o/K+_cyN_-A7J))Rz=|3ukuHY_^x/^/*o)^$*CYh.e/& CTU`Ng.-i#[xD+S)' );
define( 'LOGGED_IN_SALT',   '%5yWX$6g!HD]5|]a*.i)O9cqj5LFdzc^}vP @>t~M:TMJytpL!{9r-C1ejNiR>Fg' );
define( 'NONCE_SALT',       'thnHq}B-[a@FEfbdE.BJyY:z9;G;.M00DRuva._%]wy=-# p|!Eq}W4>)zv<gQXa' );

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
