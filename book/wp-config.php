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
define( 'DB_NAME', 'db_book' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'R/$M{G^g$Om-R.jMX.v|%^X%5|DI~m~nVMj[Al!TY6]S8C|HQvx==?S@eAIC1)mF' );
define( 'SECURE_AUTH_KEY',  'YYZe8sxi??6vw(~PXXc70qr[kn>F_-)R+f;B;nEx{M%BOrJ,qx>~Po%;v[T!<c8@' );
define( 'LOGGED_IN_KEY',    '7P}tEn~hB}6WNqKQ6d~8+ucoDVz88>`=wgvo0LEVhwPk^sFnlBGj$P3x.2DAKaYx' );
define( 'NONCE_KEY',        'uRU#+d!bG~xCQb|u/L9N=a2E?F1plMWp*lH]Zp+IgG<]1,+Nj7a({%Gp1%a[uM1*' );
define( 'AUTH_SALT',        'u0/Vb LNa^eSbkjY?_)b5!M0dp`bI60N}PZJ=wfZ)Ce{5q3:B^hcf{Np6y&b0YC5' );
define( 'SECURE_AUTH_SALT', '7uG0TUyk,o;ti72Z(:#:A{<UNo$H2?`e8HP/|MW2Q?9Ib&gYeWaE4IeS9;L9#59K' );
define( 'LOGGED_IN_SALT',   ';ePU%Ek:px;%l66aJOkevI<i|8^lS9:b/M7o0V.*%4$%X`r=I}_N/I/m6zo`ymao' );
define( 'NONCE_SALT',       'Fa6R,+QY !7e0,=z-.FfNz6igmZ/Nm41f=*&_ 53uZs8y/;P VwR7A:1@O&P5=fV' );

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
