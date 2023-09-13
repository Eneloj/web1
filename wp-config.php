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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'web1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'WlyTnlspyKWWfdAtXHbaEr2wgGLNFI0CeNhCceg7sBH7zIWCVVpAx5e3PR4wpBHv' );
define( 'SECURE_AUTH_KEY',  '0Jc1Lamtt6qTPnR7vYwvHewGcTnCy4Rjwe6UYOTFETkaGFTJGTWZJWdTQzwLke7d' );
define( 'LOGGED_IN_KEY',    'tCRklVNaxn7DJbQBptvWcFMpDwkbMZyb39uKVd6BQgvW3TtdeoqOGTfNBzRni3FP' );
define( 'NONCE_KEY',        'K77ER3oZWDeRrX3nXPRIbnmZlcrwX2oqQLKtF9RCpaltIlK1LsS3d21ZxTAHyLjA' );
define( 'AUTH_SALT',        'hd5xyjKuLavQju697sEsl7DqoXMuLFzsXhDkyAbA1UmzJT2MNjw433g3rFglig4n' );
define( 'SECURE_AUTH_SALT', 'WEpHQcsQOjldgT6n4HEG6jgh8hgLn9qoIJlg3Mh4B6sXpwO1zzLXvwhujar0MFlG' );
define( 'LOGGED_IN_SALT',   'hlfpUjJP2TPG08dmVUO34KQYvAUMY5XhzRxxdECbf91UfXSTYvhk3YsJBbelnY8N' );
define( 'NONCE_SALT',       'znqYa8jn8awYvTS7TiSEJqfXyDZEFA0IA2jMBDA4TsvJgSbwvKuJKHfgokMXBQ9F' );

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
