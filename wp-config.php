<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'invictus_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'WU3,}8bur!e.x;Ks2Z[xygmyw3</a<x3#1_g^WQ6#@;e>NM rXoYcM=0MbtsFe)W' );
define( 'SECURE_AUTH_KEY',  '2i:%p3^`MqHUn61U_a~0OzGT`)#}%,!Kyb#.28;XM}.?XPI8kH3+uGc#oaA 4.re' );
define( 'LOGGED_IN_KEY',    'wwR(Yff.xtVk4QBS@IE,Za08%QW2S?h7=xQ<XL(Bp3]4X1p6?Vh`#4pA qXORYsw' );
define( 'NONCE_KEY',        '}5;pkZ3B]!x7UVrvLUFwGwO.}s`)J.,f`s~tJ3fNy<=6nHfHu7`Qz4}`*~txM;fw' );
define( 'AUTH_SALT',        '1KO|ql3B+b?:j<51v:|&C{+D0<Y=00Z+~OPv|gQX)!>-<aD,pQu0pi18?O/mkhng' );
define( 'SECURE_AUTH_SALT', 'wjyv1n6pz^*5F=TIaE,-=JK7f!lGD*qVt#eeE@N3x~4?hM8m{i^?6>#j]T^Yn<U{' );
define( 'LOGGED_IN_SALT',   'pfYIc~9G%uou@/@x,xJ](z1Ie;1Fb#i!k4JHw3mAeoC9bq4>=5At(i=9gEm9JhZh' );
define( 'NONCE_SALT',       'Lc!9OtD>#S(SCe|I|@J:b73,05~R1IfPB|?C7p<g_lPzHqri-m=/`nkg3t>_Y(L_' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
