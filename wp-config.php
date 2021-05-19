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
define( 'DB_NAME', 'wordpress_amaistra' );

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
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'p|r2#VoO,,.2SUJ5T[iH3mBIVW&<rk5=ClK+4d6]?RhKl~.qec2Gn/9zyyi=7(x5' );
define( 'SECURE_AUTH_KEY',  '#EnV2PqeJ0JKUY8n4JDsqNXTF+Uf-9K(~9gEmvq?aES>O&i+D!w/0O]*6ejPgs@)' );
define( 'LOGGED_IN_KEY',    'C@oe5B^zYr%IoMJ3yx$lV|<e=(f;*0HOOz4Wut6R=|(&;} _ce4rk$KbVLJm0;49' );
define( 'NONCE_KEY',        'By $2v5z>R._I(MRHplP>]]N?F J~c@29i:ySi{)=iW)PpaWg}!E[3A:7e>#(LKe' );
define( 'AUTH_SALT',        'J(VAH%V--m2J(AdiT3o2n,Eesg-T2@_??LHWW$2a>3WB~[)pTWrJ[%Z<I;6D_}-j' );
define( 'SECURE_AUTH_SALT', ']`eM}<M>|]d{Xrv.ZYda]&!`vK_L>Cp7/L[mUqi(`^SlfB-xsi{(DMi?hpy_bZlO' );
define( 'LOGGED_IN_SALT',   'O#^i6u/o[X~Jr%Fex%Zqi9UZS$E*g{&s>BI`{PdaZg]^y68+F__F5M4NC6gY_p@A' );
define( 'NONCE_SALT',       '(b#&Q.+xr4C6.2NH&s!}#nij/Y^i)|U2Y;f05w#>{g*l}/](L6IS8Tw>eo/n< _U' );

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
