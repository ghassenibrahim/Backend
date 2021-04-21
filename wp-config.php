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
define( 'DB_NAME', 'shop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'x6IsBU0tAZ63eqVIlJCnSOhjx3vLSxeaoWZq9UXNLM3I4K36opyaAIa2eK7ejEo0' );
define( 'SECURE_AUTH_KEY',  'ZUn995Sh6yrvojbtOcyllK9JrSr7lxPQ89lMsLpSEcaeaUQPCrgyo5vlOzeERxqt' );
define( 'LOGGED_IN_KEY',    'nxpq8fWWMNsHlKu1YQGJPYZ5G4PLpEKSOOLBlGiQsszj65RuYAVNb6qD3Hid5Pkq' );
define( 'NONCE_KEY',        'gqVPtLvXkyKrDHxxkZF3Fbf7AqHGI1lv7hsGyDhKjrjxHtT5kkYDzUnzcJgpgHpr' );
define( 'AUTH_SALT',        '7dGlNHmitZP33dBMdkfqTCbNuU1YDqXSNifeCL3he0GUNOdfOysJiCY0IJPj3f6j' );
define( 'SECURE_AUTH_SALT', 'ZE91VVT4IJHQYa8g1uWyqNhdJERqsgUIjhsPtMc3az6pJGiFatfMR3XrICDNcfxq' );
define( 'LOGGED_IN_SALT',   'H8wfEgnyEyc5iOf16dit5JQvYz3pyTRclmrkX0c66QnuaX7mTj0YWiNBgTIxfUFM' );
define( 'NONCE_SALT',       'i7TgbFjpqoxviMFTOI1hg3EdI6SDiUNv9YOggICLZ36RlWiHOA7KisAH4SWUdpDf' );
define('JWT_AUTH_SECRET_KEY', 'secret');
define('JWT_AUTH_CORS_ENABLE', true);

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
