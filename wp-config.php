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
define( 'DB_NAME', 'dcenter' );

/** Database username */
define( 'DB_USER', 'dcenter' );

/** Database password */
define( 'DB_PASSWORD', 'gKL3102gKL3102' );

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
define( 'AUTH_KEY',         'R3TTvmHlC^ZTXg6Nu&&uG%;N%We_FM6E3+l_ )2ua:3pDIWcmG@pL#@4lS_xclcg' );
define( 'SECURE_AUTH_KEY',  ']c Ub5$#D*Q>:Es#%[S.8d:>ldPO)QISS!wqqd>&]M-[Trxkid_8M6mn]E@(V~aC' );
define( 'LOGGED_IN_KEY',    '{fF6o6!;~@.[6P~wVEfE@<;{!ZcwfIVv<W=_A.D[LgXnxo8sK(mV /,uB=iBV]u{' );
define( 'NONCE_KEY',        '/F]qi_4D4FtAauUTwSGpEfmAz!F+*6N?Zz7(xq?)~6)_$$]Usj:LWIUB>RZ,1(DM' );
define( 'AUTH_SALT',        '=j{cW`_)pbCmhX5/DQ.a<8[GgB?hPv*$GF6EU*R4|]^QSfRIW]` ?XG eW+&q&y]' );
define( 'SECURE_AUTH_SALT', 'E}LZ67T{^|T|,%J6LDaoJM]<X@`|Y9ry!Z^#1,cY,$kjk3Qt,ECYW/c<^7zQU;2R' );
define( 'LOGGED_IN_SALT',   ')KxE>PI,aa%)H5>S4dw5W~dWPV7J-*MDgR,_K[%9#gW@#,_(t1wcV}dgm</Z_PSy' );
define( 'NONCE_SALT',       '_(>k:5~y DPgx9*4AV/9gol7:]^n8`6OI{L{TCHARtlxrj,)$$]4I^@F:jNm&[FK' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
