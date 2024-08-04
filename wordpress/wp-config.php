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
define( 'DB_NAME', 'accountant' );

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
define( 'AUTH_KEY',         'UnxJh[Mg3l;F3#0g P)/q[D$9k]vQ+*vrrV-b_5e]u]wiY}I%Q_ g-zsz0ZHh95K' );
define( 'SECURE_AUTH_KEY',  '~xTrK]g*~kFuMaJ+9Hw$tXfX?gJ7D6[qd03fa[6.0MhV&+{[n+uMOs,a*Rk*eVAH' );
define( 'LOGGED_IN_KEY',    'KSb<OZ>E2Es^;DGepq-aNXw?W6!TEU)vDP[^$Q+~WorIe;J4O[gGU:^^{Quyb}T`' );
define( 'NONCE_KEY',        '(jo~r4S.D~bV.K7hIy$d>N1i>y&`O5LS4>nbz981iz@M=RHxehHf(Mr)L/O~BUx^' );
define( 'AUTH_SALT',        'ke1Q!mSYZ;<[Np.+Fjv0^67  |)[<dd/F_w{B2]f9AaKz>P0d.C>H;/v4b?<N2b/' );
define( 'SECURE_AUTH_SALT', '1wBf0+D.J?^CA{:T]#J`Fx6r.KyC!U|&7j+YP#!N1mb@6]oG2Q#|LZ O+2oe cm{' );
define( 'LOGGED_IN_SALT',   '8_N|5dTL#O,>H:1EcE-R*J#c)d@ZL+~Dz##B[^Z2`f}Ry^R;s;ipD81*~f|;Ja]o' );
define( 'NONCE_SALT',       'F8GIdRPkHBFYJoh7PraJ:a`YyR.qSXz5q `/>c$Uc54q_*CGEao G~_58tJy!h-^' );

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
