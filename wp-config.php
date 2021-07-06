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

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wvcGN0FxKYQm37QSiQOrfnH7p3kLM5+SxGnaDpl0W3tiUNQCOufu5bWXtzdIgWRGH3KotH2xySnGgjpV4TjcNQ==');
define('SECURE_AUTH_KEY',  'i+Qvu6ImwiKMdjHcqp7bHPdFDDm0XDMrdUlhRfh1RuDvb0CXbc3OiXvX+ZArqJU3U07LRti+rc9bTgKmtS/6mA==');
define('LOGGED_IN_KEY',    'eictUutO0uPf7qYvZxtTDYrVLjtytOAa+jcYJTbFUGWvXxrVga0Nx4WpIBVnoW25DjFbejO6VNAYgZkJwJLYNg==');
define('NONCE_KEY',        'EncZo5utojovAnt9SpSSo2TmeAi72fFWW8S0jbzBOgDYmlF7gf5fTrdVttgc7o5bSnIsNhFCvmAigEmln0Spyw==');
define('AUTH_SALT',        '2LuBDFwp5ue5WO8UhAA8nEYL5hy5uCDG2I7TmdvivypHe8BKSSbUdKtOhgLD2ySiUVqBQfsgAaAuSMQ7UXtflA==');
define('SECURE_AUTH_SALT', '5dLwHbxZedn/n25vjOJFo0ca/gwn9pCcTgiBBERBzQZ6r5AVE8c6o9Ze+usQmSUOrtZYOgQ0teIkidbyt61s7w==');
define('LOGGED_IN_SALT',   'mDrN+G3QZEoxqWu8+I9Dc3cg0+HteCtQDTTf5q7W3cP/3O5dwHs46bmAnfVehRKjSOBnkMkKtF/oWK70OI5nWg==');
define('NONCE_SALT',       'Orla52SQKKiOlYx8uQ+uxIJfPdqGjOAsdb3vkEe0aINm4AuNQtRXSVhENNBM9bNUKWeuTTaxwaGAK7DAn4DvJA==');

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
