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
define( 'DB_NAME', 'grupolus_blog' );

/** Database username */
define( 'DB_USER', 'grupolus_blog' );

/** Database password */
define( 'DB_PASSWORD', 'huhuxd123' );

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
define( 'AUTH_KEY',         '8AKj6,QAHn:avZ$H)Q_D4&DNBW|SG%h,!w~5lE5#cH^ku?<5Rx]9T]^&@$*8W:5Y' );
define( 'SECURE_AUTH_KEY',  '2pkfmVXm0x9iU8gRR{S~Gz~pwW]`2q?yc?H|l/K!c@-q[Nw[JV6?3!],4k&CJt>A' );
define( 'LOGGED_IN_KEY',    'Y-|FDM~UjJ:T+v{2!/x;{9m<_Zdc8]M{HGff^oHm-)8:cBZ56No&=zkC@V_BCU4r' );
define( 'NONCE_KEY',        'D<EZI+zb;9*XYRSg^Z<[}Fx1HM.O2|OvojyF9ZmMgiF=KK8%S.h#?e-|vGPe*gk|' );
define( 'AUTH_SALT',        'GNpU*)<rM|+7&1~K7+P%EDIrEfNa*BT9:0^h,e?~qek<,9</q[DaB_](wrQq^@W}' );
define( 'SECURE_AUTH_SALT', 'WJ0{7X>ltQW}T;dU AyWQ??[WXu_FXde[Gy#DY?O:kh,J8jX)o(iiP]JgtblEmTj' );
define( 'LOGGED_IN_SALT',   'S`T=i+nXWs)`,f2NSShl3*_=%c;@M(]DvebVYPUDPw_tPV{?F3XBS@?F$ZF%Mu/(' );
define( 'NONCE_SALT',       '*bs!m>I<7$ySy/k2r,SuKl9;g=~iaVJUr 1XiX-:XG(xylG/>.4u.xpUrO<L:=OC' );

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
