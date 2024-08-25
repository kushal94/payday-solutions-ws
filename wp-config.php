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
define( 'DB_NAME', 'paydaysolutions_db' );

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
define( 'AUTH_KEY',         'Kh@=;MwCv=&fVpu*dzxxy!rp-D&{fkd389{66rx7]$e|q.rG_+[z3[FKY=Tim-0n' );
define( 'SECURE_AUTH_KEY',  'D=%1.KNXr:wT77m4CIHnB9hZ]N~<z{l+OY~(#j-KQ:h2AdqyzHW@b1d&z@8J<a7@' );
define( 'LOGGED_IN_KEY',    ',_c%yN?:8lOLVRoIkoKM*[F0lWL`[v-<q*Jc|{,BvL6r#}_T`y0H5PyT>5RnG p<' );
define( 'NONCE_KEY',        'xS0w #9WLGEP3x7Y6@Wpt>RFmrsj61dJJ#dhm{ThaK8,Z_{F7q]e6mK}Orc?DR8#' );
define( 'AUTH_SALT',        'pF!Bh$p29AD@=PButuycQ6o^<]tK4|,4lnJz:;jzf nLl|[l1TqS[[*HCB<kTu`C' );
define( 'SECURE_AUTH_SALT', '(Cv4au<cE6T/v]*/X$G,]q11O,[{BY[8Z,o/4.0>-*&(dS{MX=czVnqhtIF7}%4S' );
define( 'LOGGED_IN_SALT',   'v0!;}yA-]O2oYf,=N8tcbp-!#vAq$HMG@8?Q7NQJ %]7R1f7Abib_nFqSzXo>T!Q' );
define( 'NONCE_SALT',       '42N9l5DjZPm44Uj*S5)uzHa!ViFCVzFk]oySo,8TH;hR(pe_$ W+DzSfz54K|R{U' );

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
