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
define( 'DB_NAME', 'atiqah_website' );

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
define( 'AUTH_KEY',         'QEX36NtWe$J07oNQLzcvtD&@%ema*kXV(H}.n?)~JsR9R){xSvEs?e2)M6/J&%[(' );
define( 'SECURE_AUTH_KEY',  '3Vos>DG5zII()/BS,e=9QOp-%GkEP~J6a,73~C5uZuyvM)a%<P=,.2jX=Xiz}+1[' );
define( 'LOGGED_IN_KEY',    'V+4o7H*NVvCDsqam]4Hi_0oh.H1c{q=pIT<3gUdWi@. &])w6]+q@@,<:`%`N0EO' );
define( 'NONCE_KEY',        '-i#mZ-U1#txyKAVfS_f#V%5|lY7ERj@[j,oNZv2k?uTj#L8*-LPlnm7DBWz/-3A!' );
define( 'AUTH_SALT',        '|+&f@l)FC@r!2<b+R>L29HnV$]3,Qq?nh`]h23diQ5z$N+Up)?~V|wCj&#)t~c}Y' );
define( 'SECURE_AUTH_SALT', 'Y4C$`ME[-e^*c6sej/ntr1|y:BnK%XkdU5X5cZtE~(]6939d>7LW/vehej}/ap91' );
define( 'LOGGED_IN_SALT',   '#iQF7(l`Q/uWsGx:dG`OLk(f l(W`ELjE4wLXt?fHgm7@iIyyi4=?~h+^O$`d*Dm' );
define( 'NONCE_SALT',       'T^kfV3``RkE4?|n=9(+8.2u>}`hJ@[|:CG*DCF4nCDkAcAO#}57%Tv4>4Ds])`ZY' );

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
