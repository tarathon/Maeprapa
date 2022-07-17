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
define( 'DB_USER', 'wordpress' );

/** Database password */
define('DB_PASSWORD', 'ad3a585728425a3d23cafdb1f0d8e67686451f5698c820f2');

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
define('AUTH_KEY', ':yr#lO-xL0f6_x!:8#n-*oo~K#SKF,X&-t8hd]btU1E=igMiVQq5KyIath?aL~vy');
define('SECURE_AUTH_KEY', ':yr#lO-xL0f6_x!:8#n-*oo~K#SKF,X&-t8hd]btU1E=igMiVQq5KyIath?aL~vy');
define('LOGGED_IN_KEY', ':yr#lO-xL0f6_x!:8#n-*oo~K#SKF,X&-t8hd]btU1E=igMiVQq5KyIath?aL~vy');
define('NONCE_KEY', ':yr#lO-xL0f6_x!:8#n-*oo~K#SKF,X&-t8hd]btU1E=igMiVQq5KyIath?aL~vy');
define('AUTH_SALT', ':yr#lO-xL0f6_x!:8#n-*oo~K#SKF,X&-t8hd]btU1E=igMiVQq5KyIath?aL~vy');
define('SECURE_AUTH_SALT', ':yr#lO-xL0f6_x!:8#n-*oo~K#SKF,X&-t8hd]btU1E=igMiVQq5KyIath?aL~vy');
define('LOGGED_IN_SALT', ':yr#lO-xL0f6_x!:8#n-*oo~K#SKF,X&-t8hd]btU1E=igMiVQq5KyIath?aL~vy');
define('NONCE_SALT', ':yr#lO-xL0f6_x!:8#n-*oo~K#SKF,X&-t8hd]btU1E=igMiVQq5KyIath?aL~vy');
define( 'WP_CACHE_KEY_SALT', 'GvkDy`%?6G4XawFDRhR7j,kE{4`vrnO#j1z]Els;p4w)g.$Cx5C|-9HZRWV1Ah{[' );


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
