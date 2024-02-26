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
define( 'DB_NAME', 'ccdev_db' );

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
define( 'AUTH_KEY',         '`n;(fiRKs-N.j#R^P!q>b(Xk{;e*/,Z<&YLD3HRv]~|HXAK,s$XuXFm2h12]]v.d' );
define( 'SECURE_AUTH_KEY',  '%VM;kd9:~ J[^w83m!|i0yZRfD %gD~sm$}sS,7KG<gLRo.8#=5;,{4k)-w5QbGH' );
define( 'LOGGED_IN_KEY',    '^pwQq:bxg;x9f5Une5KhL,W#ZW)yWhr-@?qY&@zkgi|f2u{MSV+m)t+kgyBq:vPB' );
define( 'NONCE_KEY',        '-7{2~Eh::PxUXa2P,# R%cZvOr.i/(|)07Wcfv^n(/GXS(n@N^fW<=/Ze@p&KLxJ' );
define( 'AUTH_SALT',        'cj|`oDvNC:x~}}I^fwV06D&`<x~jxC~X({4& OOWk$MLIC=*<kFJ^%v#45gc99v:' );
define( 'SECURE_AUTH_SALT', 'p&r-sN:F$(q1NjE/Y(uWQ:FIY#nCno-& 9;q1Q!Y+F{c{c&=~/1e.3*[!I}:a[xV' );
define( 'LOGGED_IN_SALT',   'E>?ugi}Ym9lhb!O>[_QS/~ENCsCv5^d1vifP.[|yX:Ji:9k;fUh!g*.!<j^Lq=-O' );
define( 'NONCE_SALT',       'lBRj:~Q3}r(o%hy&/)<|V4G!~2(x/mOp-6z.!U)A 5MaV1]r=[013dlD{.G8~a9G' );

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
