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
define( 'DB_NAME', 'word' );

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
define( 'AUTH_KEY',         'RiBBr~}4Q1KRr*KIs[4cTHU$q$^h8}BNkr!Y`tJbTG:]D$ !Xgl`E+c=R^V<A.y<' );
define( 'SECURE_AUTH_KEY',  '!{x2W,3aS$$HP,pBRoLN@nTJFGII;8{}HS=h+aOyH=tlQ9. |6GEU/xr:<cOR,gc' );
define( 'LOGGED_IN_KEY',    'U-[8&8I(v4Z9Mk}4#3|~JO166;-kTz |$0wQ*PO4U*(.n&C0@Q9A$eP*)kDC:-Nc' );
define( 'NONCE_KEY',        '8rVq6sgbxk[**0fd#TJVx^o&%<~%*e@[<mU<06;jr@V_d]_8^FEF&#7/D%D`k-7r' );
define( 'AUTH_SALT',        ',|3TVHpTbn8he!Oc)v$iSbT/Y^+3fgw5<PJ)u0z&:*aU PW&6E3.Wz6WcD N4?_~' );
define( 'SECURE_AUTH_SALT', 'XaNM-!Y(x$njp%PTg/o[t1!R!SONc}tw8HJxfK5]MUnrCOqf5*vG1)b^2uKZCfd.' );
define( 'LOGGED_IN_SALT',   ' {$G$Spn8(Wo w6Dw`rs&X/E3?nP/Vt^[6H%/:-P=V;?#o_!r=%? K>Focs6Te-s' );
define( 'NONCE_SALT',       '@1_>MjXg<P(J<AS1wJs[-6*<&a.#3K4JPHm(_C213q)+yrxgGJlsUc9U:,Rc<fs ' );

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

