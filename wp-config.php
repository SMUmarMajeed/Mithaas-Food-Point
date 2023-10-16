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
define( 'DB_NAME', 'mithaasfoodpoint_db' );

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
define( 'AUTH_KEY',         '6oHt$fhX%</l,E0B_R0=l</R/Z~xPih(tfyA|J~G2hpsveNu.[Y}=Ywb-1NmzS5#' );
define( 'SECURE_AUTH_KEY',  '*`+TyXV=+)L`rBkPJA5YMu.&uZ!:<|:E5~bm=Xc*oDNaGJH75DII@C3[s?# )?ag' );
define( 'LOGGED_IN_KEY',    'Sum&G^vR,eh {-+lM4[(dy3dY%,J$hikn[m|?w<F+ ,:S~.4&1Py--62Xlb_[s;Q' );
define( 'NONCE_KEY',        'UNq_M~W,A5dEF5?i^$DXRLHuxsDk~Ay0ihm*c5VC@WX,9KX>UAgap?X<1JpU;-&r' );
define( 'AUTH_SALT',        '+3Wr;lscZ>Eww*L>(V9C7sGVz]Q!&%Lr, u<S.:W+FsbOf6h0iXb4b9)byVIg!|u' );
define( 'SECURE_AUTH_SALT', 'X67Vrys*46Ut]$/4PpG>4ji.iW4sPup.-|W|Ya,6w@=gsZ6CT4?-v-V.Del/g-</' );
define( 'LOGGED_IN_SALT',   'cNO-^~W4&;5n-iT)`ZX.Y:^<`l[c,E1u?;EjmaTgU8QohyEl^k56Cl1E7v08jb|v' );
define( 'NONCE_SALT',       'u7&^l`3V1.PfqPa^LxazN83m*R&I-@tL,,}{k(>R=6#W{Ts[f3p!M6roLRp_:u$g' );

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
