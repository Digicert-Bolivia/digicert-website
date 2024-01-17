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
define( 'DB_NAME', 'digicert' );

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
define( 'AUTH_KEY',         'LlXHWBh#hS8{9|@Xk;l&}?kt_a|V3(A{e+sJYeKqa!xtdH1:WOSWjlgli+s>x4LN' );
define( 'SECURE_AUTH_KEY',  '&`sEN,#=|E)~yF6iI| >,o8e@=Be$h)) u77|(R7,;b-UgA3ULATg)_/Awg].XvI' );
define( 'LOGGED_IN_KEY',    '(:({E;$uV)v`tXT*$w4/}Q-!>uB6!e!*29Xf~%tdG38#>Z0eLR8cjh&6umQ+Wyy~' );
define( 'NONCE_KEY',        '~1}#sBT)+:K<<_{`pc>gu{q4Bz+4g5k}CRRJi3msp87a=gPmpVAz1Tpha)~+sgLV' );
define( 'AUTH_SALT',        '2oST@Um5ucUGbX#GMc7}x}_XwZytTqoJDJW^,%k|!J] %P`SVu1C[~89`XSvbW`h' );
define( 'SECURE_AUTH_SALT', '*y6adY-}HDH8-phHliX{0|`AvldT[{pl#&X!DO8D#qpYfFgurXS$R%VPB6VxnnP<' );
define( 'LOGGED_IN_SALT',   '6<z[*nM|O#T[$_xms=&Uvt2j8s<DW&&#2:aBIM|tK_])J3XiN!+Lk @iH@EI|#-<' );
define( 'NONCE_SALT',       '5jvd$P$quMg*zA{ddEL3d8}_|N jdgyr(Y7q@Y,qv|c+nbwyEmj[or=UPBGf_Wn_' );

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
