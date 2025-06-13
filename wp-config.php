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
define( 'DB_NAME', 'wp_codextry' );

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
define( 'AUTH_KEY',         't@3L@|E]u%k|q1nB*N@w6QQRjGqV6v7y2!>?;x<J;UYNEJ5gYYI7&puhb`0/=gdX' );
define( 'SECURE_AUTH_KEY',  'D/JNhB=KOpYTFMCje[}BPKGpB>>jumaWg|b+S?({VHtz2r%]t^sBGBVZtghNV4%H' );
define( 'LOGGED_IN_KEY',    'a$9P%oX5Vmp3NR!33~aULSoMj(d@)r.uy<eUKt_`u|IV=CumsTdC($6#7xyMMmUS' );
define( 'NONCE_KEY',        '4lP*^F=/r72s,r,UL;HFNsJ^{e<^bhzz~mT#e<A##k8>l5|fdLiLx/#V{<n;&XXO' );
define( 'AUTH_SALT',        '>*!A{1KJ~Ti|`rDFW)MJEIaWxsC?UPqfssp@b_kpI,#QZT{li;SNI<p3U|=<GP2@' );
define( 'SECURE_AUTH_SALT', 'bxCn{-q-s[grWxQ]u]u($4?$3u&yH|QODlq1J*H3U y(2zzr85ZrmKno9NpN(Imh' );
define( 'LOGGED_IN_SALT',   '+ei+IHyPz|TYkTK>oct0=:^boaK?E8z2.yLMv,_g7LRAPFP7{9p$4;1l0Y8x&cVP' );
define( 'NONCE_SALT',       'fKO}vDPA1[>O?yZ/g+U94qxu|rB#plzDRp:i}e,(}7OjxgsTj?-c!tNz2h;hC{;5' );

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
