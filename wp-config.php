<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
define( 'FS_METHOD', 'direct' );
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Rs@34360000' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'g>4O^oPBET6R!(q0IJNEU`-.V1h5m}?+v^VeCWJ+HIsjmW`U9BSbJ<o;&)wk3a~%' );
define( 'SECURE_AUTH_KEY',  '6v4tK  O{n2Y<_!#Jn)k@$r!;[rM+eYfLAL47,5Gh;A.h2H,P85O/Z]tlk1L,^k]' );
define( 'LOGGED_IN_KEY',    '3-F/]R:_GFf*A8,L<#[w]+tA|9v{L2p&jKAH8<:QvMl`0N/G}OJRXU)P8]W0c?,r' );
define( 'NONCE_KEY',        'XqdQ?NFWLfG;x/mS_^01&02H4Ossr5!0d=? 83?h_rTF>?NYStC-If-<?cYhX!YE' );
define( 'AUTH_SALT',        '=x6qsVnmY@}3f:D?`Ay&^K!GTx!V#2N[iIASWNqDfT-$)spH#B[h6A%Jq?sX]ZD;' );
define( 'SECURE_AUTH_SALT', 'VW=6me;z,GQJuc9|(%tFU U6{6xZ{x_i;gwPnV(O:CvuRK0&muMc>&h.6sW?#:&A' );
define( 'LOGGED_IN_SALT',   'SL#YloQ/Z:q|QQVU}Ae(#ZHs^9 6)lv>EP<Fg2?=RJ}sKK2:W&c5s* E%Rl#n)5p' );
define( 'NONCE_SALT',       'CN|r|AwH_qanXg;T|Era^A26}jE5fpnERAF^eJYV6$d6#p5Cz:r_x_AO{|WxnSSb' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
