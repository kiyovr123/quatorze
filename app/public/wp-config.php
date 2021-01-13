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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */


/*Contact Form 7でpタグやbrが自動で挿入される自動整形を無効にする*/
define('WPCF7_AUTOP', false);

 // ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */


define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

// define( 'DB_NAME', 'mm-co-ltd_arpege_wp' );

// /** MySQL database username */
// define( 'DB_USER', 'mm-co-ltd' );

// /** MySQL database password */
// define( 'DB_PASSWORD', 'itoi0426' );

// /** MySQL hostname */
// define( 'DB_HOST', 'mysql57.mm-co-ltd.sakura.ne.jp' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'S3hJxLNyREg30RYWdn7UJ64oZR9iDzzvp3c8NlHWjDbEODEGvQEfZfjvQU8xAmgwTjeFypjow7XFp7EGBmq8hA==');
define('SECURE_AUTH_KEY',  'JWydd5p1iY8hQpbcp6s+MZtmJfBBLvo5F06TciAArS9yCTJLhNA0V+/ZJnld89sM+4ZEg6sXXaaLWymjoHQJ5A==');
define('LOGGED_IN_KEY',    '0a5qODrIk7M5HGQOs+lJpeR3N+qN8tj5ckWEmpKQoVyV/gShCG0uvmKR39sQYqe4u6FGw3fQabwCOpuRjV9/VQ==');
define('NONCE_KEY',        'PINbfYSm4gligZDJ3uFkITI+H7cBgawMCJBz3bRbkqtUTlfg5ND9OMKfUvRsuGQBf5RMsWA+8QXSxGsirn0Rsg==');
define('AUTH_SALT',        'Ve7hQ/IxPmLPN0e3LuP/t1c8kBFpcucSJ8K+d9acMy8Q3Dc+IUNwG085jJYgtTwu8TX3jDezydvDE5EzSbg5JA==');
define('SECURE_AUTH_SALT', 'KEwgEGWHWKl5i2NZy5yi9zi7jK8CiaSMEwpbbASdnccYY8n8Lc0U63oHRFznzSLL+qfoofARGpbM0AVHee4btQ==');
define('LOGGED_IN_SALT',   '5j4i5buXTJ++utTvdSrZ5KGuB44b3J9Dw9T1HQwCfAWNDWx1pnw4eFm84BW8HyUJjOrdmkwMwBRuSgLpQfQ1Zg==');
define('NONCE_SALT',       'RvbuiCEJ8r1uSJeCn73MKkIJsfTGIUS4aDw3g6cLlskIkJ3uvRuPuXVeMxuxT1jGIUTZFZvNM8X/LnMU3P65Zw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
