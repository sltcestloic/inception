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
define( 'AUTH_KEY',          '@!-mgu^Lu%NK(op{tCbr+H;^ ;=xZZS@lys7k>M-> jvgiXR)L=&K#~5}TS&gjiz' );
define( 'SECURE_AUTH_KEY',   'y39lCu7ir*.$K4#(5~G?[i40N$k4^`S-[qJX(ZewKcQ2/tlBIL[cBARbg4A>NStm' );
define( 'LOGGED_IN_KEY',     'n4%Zs;djkg=3n8!f*1#j]yuZI;SJ.}g-S@%>q*&]X6PjK9z]fl~V mi$OL7vh1}l' );
define( 'NONCE_KEY',         'x$b47 [sms~a$!QV9=JXQ)ZO.q*WX/rQjfA}>B7;xFUGqBv8)0s$!pMvSqkR6E%2' );
define( 'AUTH_SALT',         'iaK O%ijtGn$p(D;Vko8Gf1aVe~o U@l[#*}nD}PX0[6~f>7QZN=~n(y!;q{-Q7O' );
define( 'SECURE_AUTH_SALT',  '=8>j+&%a6bCExkz}~!DGj`G;;rRd*`3D5fV`U,R%2/LDD4V-[ ZjXATX{s94F$N6' );
define( 'LOGGED_IN_SALT',    'eH_2*-E(]hxaI+D>ld-!%nhMO;5I}_jc,9!%q%{Ep*!3.qpRVye~Y<4>T~S<6%,Q' );
define( 'NONCE_SALT',        '{WY|yUqDUR7gg&QuYWibJ?mc~C9ae(oFx91ZE{asVI7m}KU4E.C%K?uk0q@rYR>f' );
define( 'WP_CACHE_KEY_SALT', '<@Gi1#jDK?<>Q|7uSe/]5(QNJ.@bnKX|vAir{y0CAzV^wb{)*qPwO5vE^L<qmeut' );


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
