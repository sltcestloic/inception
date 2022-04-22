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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'user' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'mariadb:3306' );

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
define( 'AUTH_KEY',          'SEu{LVkJ{bv2%l4&LO.;IHOK2hduDt7}m6seP>1Ios7,vWZ~t[&QT;X,CjO*HTq@' );
define( 'SECURE_AUTH_KEY',   'KSMD;TjPw,BFYQ{O1xBRkgFJmiXf>+,eaWqvj?cxMeqgtOv,4XrjP2^@D6?qBdZ{' );
define( 'LOGGED_IN_KEY',     'Oh2Ic` @Nh+f53IPde_R#(tPZ/tqA9]6?_lel*Y.1fZdo/?lgot8GXJko`x_x:+?' );
define( 'NONCE_KEY',         'IA}MR[wRv{ei&ijf~htE?0o)d!F*6(1cbI 1Q39%TXJag{z,*RO;{a)^-9KM]5C$' );
define( 'AUTH_SALT',         'aAX--gTrihR@>`QHpL-*!/wadTK x8m-W<P:@&?;$z[e824r|/iYl7QTU9-.) wl' );
define( 'SECURE_AUTH_SALT',  'a]#/gvyw8KuW~1bN!_mgT!q<}DeGZITNQG}`mH?C5k0(Ol>}<:+m,IhsEq%,Rk-~' );
define( 'LOGGED_IN_SALT',    'rczBJ7)[KiLFGqSDBZ16F!,-UBKtz${55SG@?3,caa`iG/uNl%I< .+of5T`%Gmr' );
define( 'NONCE_SALT',        '$%)U SQRB,~dl?y9.Ie.2pW/A{rNmvUfj2@Jko%nDENT[c]z6JSFI8y)IEv^~fDa' );
define( 'WP_CACHE_KEY_SALT', 'E8@.zCZzPm>+6%#>a;Rt !C791%,I)* d#9I&oc|>V8BTE@nggb%i5Gd(IEj#(f.' );


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
