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
define( 'DB_NAME', 'noor' );

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
define( 'AUTH_KEY',         'wI;|.e`]Mx7-yqijdo+@z<AUS4lKGBxFwZ!kW2bA*iDa4o5fKZU7O:B`sAQJbXRm' );
define( 'SECURE_AUTH_KEY',  'T6q[N[=27}M3_!qbo50@f;2#vA??8r8i-X}ZDsl]Q;6Y>v`lp.x^[(B2j=u[D~KI' );
define( 'LOGGED_IN_KEY',    'g?E$F>6<8| |I$cb$MEwstP.-mfc$4O>RT|b48$i,DucJAD!u!rm%kU W{LY0Vvp' );
define( 'NONCE_KEY',        '0%:21WUH69uVBzkMD5*L)]nixV969:hRV`QeKBQ Ul!kw+)IW`bf2f//]]2[`=)%' );
define( 'AUTH_SALT',        ')].fVv!bR5C&n+X8ZPThoh~;e=`+WTB/$X139#O2$6PnvQ_<Yd*#q^ wcK8CkiXW' );
define( 'SECURE_AUTH_SALT', 'pVg(b&!@;NMLH2|v%CG`{|:^252<j#!<8c].wvm_*C@:tAZ5g//W)K)Itc@*9R )' );
define( 'LOGGED_IN_SALT',   '.us`U$!<nz_!s0g1Qt%eG]|%H 8rjfychY6C|W?0K^RN>#B_+jezCLs0L9A2^MrZ' );
define( 'NONCE_SALT',       '9u[%&f`&-vbU9JJi:-*u1sE)]+~Ibg#.Rp*L49HMC}}m!AIcu[wEE|y+aY`#7bM7' );

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
