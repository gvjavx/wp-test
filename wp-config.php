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
define( 'DB_NAME', 'wp-test' );

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
define( 'AUTH_KEY',         'wGlqLw^q-((Io{/f7aPW47XRJPY h*g~@tJ8`X:N7L9IT^sH/UJs!!&K.r&[SleP' );
define( 'SECURE_AUTH_KEY',  '#Z0]hl,w;+~8sG|h/+id:Ni2=e<q^9@U|aqd*ixlR0M`M<@.y([iyerbll<Vv?Jw' );
define( 'LOGGED_IN_KEY',    '##`Bcu/Zzev2dnj+!;nA>CLA><U9e@]+$$3*kC&3{WH:p*c)H^4k7|4iCP>dU_Ig' );
define( 'NONCE_KEY',        '_iN&fVc-}_`ewoi8?X6YuiF66FeI,KAS&0[iZ^CK_Cgk|vKMMdQ7Vw &h,;~}XKn' );
define( 'AUTH_SALT',        'Zt.h>zv~rU$?45*O,v5t#D:r6k>_om8WdNJfpX!M3}UgwguG]Jw$6?MEffa2vJ&)' );
define( 'SECURE_AUTH_SALT', 'C_BUh-3e8sB$1+xOTCk>mL6Dc1;0A$J>49B06>mu0RixJcx0vs3Z@#tbgca>mt<T' );
define( 'LOGGED_IN_SALT',   'g)% <f/]?9u>CJg#i*7dv4?_9]Q#<?,-VOiv0OmqyGr. znnhn94K|yXcR/Nm.8X' );
define( 'NONCE_SALT',       'hcw1aO2^Xe G5*4GOF^bnvD^L04;!#^F[;mojJqq &*u@?;FcWvcJsf=E/3Y|Q,T' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wptest_';

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
