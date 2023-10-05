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
define( 'DB_NAME', 'newdb' );

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
define( 'AUTH_KEY',         'EaZ5(6UYUN=Ty<Y_<g1y*$Zp/T1))b@rQD%r+ZHybsj<bq=zB,O#x`F.wJ)F&7bJ' );
define( 'SECURE_AUTH_KEY',  'X|^n{K})gN~Xw]1l*JA{Mg^,dR|>M$?Tywg0Hs2<n zNVJ!DkKR s/{zk1&RffX(' );
define( 'LOGGED_IN_KEY',    '&9ik|gEa:IvO-6C_l@w6:)oA%3;tK3:/X:dIC>|f;~m~XIs:V*)9?|a7Chj|[M5Y' );
define( 'NONCE_KEY',        'X)@FY}3Xfp.-82 1/=?wMQ;+#?-{7nh[i6(G_2mZ)`[,gFA@PvV[Azgl{||aXheu' );
define( 'AUTH_SALT',        'F6*$kMbj%-*vp2Lok0-QSBMSKINc.]jFoj`CB,rcC?;G!.[-#f&ybVAQqHp5xp14' );
define( 'SECURE_AUTH_SALT', 'pu|jKz6$iL^Otmy6L<8?8~F.dj xyKr>`/sW(IgeY)hE^a7d-Rn!ZM4L6ork~~4!' );
define( 'LOGGED_IN_SALT',   '<J1/|6Fc/IyAH$V)<`_GS^EJO[*E`nram2MZwN(iF4vN;(Q-d*M!Y&uDphWz+f;6' );
define( 'NONCE_SALT',       'bbbumKaB }%8P*[q3K96Bn,1]iPu1fpX>ga?NpnT3uwX5rZEFu.VZ# Sil08c]mG' );

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
