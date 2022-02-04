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
define( 'DB_NAME', 'denttech_db' );

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
define( 'AUTH_KEY',         'PKM(qCH0IQr}=8vaT5TLB)8^_y(kQeL<}RAa(x_CF|$1sQSg.TeC8EkFod)a^1>.' );
define( 'SECURE_AUTH_KEY',  '=:.j~]ZILb13feINGzW]/#|:M@Q,7$xk)cy2H*~36No2+Z<D|$QFLGt[d}ayk/Ro' );
define( 'LOGGED_IN_KEY',    'L:0TGbFn{(!{pv[(c<v:ltWFc}apm~Nq*>i-D3@8VbuYLs-iG<1(IQ`I?+5H32j{' );
define( 'NONCE_KEY',        'av5 Pa!R*?Y$z=CsE%U3ZfC8m#->$ZFTV&ema3taK^=i}0-,>P50s$hX|W!tZu$5' );
define( 'AUTH_SALT',        ',8qJh$[1*;#t>cUFpl%w<()q[jDp9j#??Qo^t6<Nx4N{rqW=F,334jrXAzCXD(nv' );
define( 'SECURE_AUTH_SALT', '4M9X]&dPD6jW0J9?&:Nx)p+2{tf+-z7)c!mGX6Qx%1sk&E/mH$UtdYZ]Unagvy-j' );
define( 'LOGGED_IN_SALT',   'N}1s&NooEFDh~D9EVHpY1eMBU%U~Pyg@:BT6^+}_Z3[YCH||ULWF@~6Jsm(Db|e%' );
define( 'NONCE_SALT',       'ng*n$^b.mJd5`M8{tUY8Q2e,YB|^5KmYjSB%G290nek/hQ)FdNKp0HC_sUS*||RB' );

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
