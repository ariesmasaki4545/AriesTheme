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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '=)-2AeJ d8*EqGx8b_d##(8I>U|IuzwP+b^Uz4Isl]uJH!:K~}N&t1zN8yoYDbg)' );
define( 'SECURE_AUTH_KEY',   '<DW$|RCqv[]v}KCXtcmCM813X2^6fw(y5&ZVT(.|WvF(6-L,!MBC.p~nQZX<+47]' );
define( 'LOGGED_IN_KEY',     '_#=@U$.xf96IY:$!!%TO@Dt{kWPh.OG)A5 zI329^myb7{MD{q,Tfj[~AB?Qb([R' );
define( 'NONCE_KEY',         'nWc5O|.wfWwyDLTqYD|O#(Kre.uae;s~(|xAE3D~SZr#@SI)w^2JaIx-ZqT(-Fpr' );
define( 'AUTH_SALT',         'oC~l<.IWoz@+,.IRR.!z(Uj^}2[*<QB.hWK:No[*hZa=.DaJG)>hPHSRFU7Ium|*' );
define( 'SECURE_AUTH_SALT',  ']mV{~ABt5P}_y-f&x|#%Dv3QR(XGFKL*Qy#m#;)!J>1nOR,NUO$~24-%6A|~C^0&' );
define( 'LOGGED_IN_SALT',    'nHK+2DP3Czb-SPL;dr`*J{&l_:@iP]OD9mmyO7{?T7%Zs5|c:k4yQJl-{2A4XYI)' );
define( 'NONCE_SALT',        'Se5~Z;]QmYq{wu3kND1dz-#j6bY/.S_3NrE>XE/^KbLrG@`{Wa/E]]0iU^t((V9s' );
define( 'WP_CACHE_KEY_SALT', '8e5$G)2GN(-mho4a^HSlNgh^`Pw*lts%-7Q*y<4$8o85m`^Q:r{:SyC,Xgh,uP$B' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
