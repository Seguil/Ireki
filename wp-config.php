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
define( 'DB_NAME', 'ireki' );

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
define( 'AUTH_KEY',         '`:uCTqcF9m<*>d1b[uv~YA;pW0ck{_^uxh6D}]M.H(vFf f(|I8nc+?G6HF<b40=' );
define( 'SECURE_AUTH_KEY',  'OCcgMu,HyO6xxR<K$iKb]DM4#;}S~&d0zj}!TW[ztpmd3C-Gx)&(} 8l~Zn kAcr' );
define( 'LOGGED_IN_KEY',    'J@!kZMCDRcX(<L[BO+[,`B+ewXQ?ub)YtE^ceFhp) tWhrZlYqaE6hS dESG!!Ox' );
define( 'NONCE_KEY',        'Jv&i3r3yn?/xVd)*O0~M]_B? ayqn. IfarIxdf_V/pN7Pe|sKrI[+o6bY[#yig#' );
define( 'AUTH_SALT',        'mC{nRYe]&N~Mr$_b]4C734jtEH7 iQ9v7^*JI9(l67`7=_A(eVBRGKO#dYMb)T. ' );
define( 'SECURE_AUTH_SALT', '/J9]0wI,gTjnLda[bh,)RE:O4)F? :11r]s,[Ao|y,5wg6[aAUVu vvt=-^>d$TS' );
define( 'LOGGED_IN_SALT',   '?W}8i.aEuVT !M2}B <x:Y~({fQgHH=J$VDrEmIj;c`Fv@zvkD^b%1!~Vmmm(0?W' );
define( 'NONCE_SALT',       'x,],5Qs}<n]!ly!_5znk^<jpWQT7^|Dq%jw,C ^emoM4iMSKYzNNN6RyktOwd)4=' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ireki_';

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
