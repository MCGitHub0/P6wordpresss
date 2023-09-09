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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'GqGLjioVO0jnv5jkQVFX0LEir6jXT7AOnv7cd3HT8ozeMs+69z0/iBGb9zwzGRzsuisOHeHKg8vh1nZopr1tOg==');
define('SECURE_AUTH_KEY',  'Tnn7/IY0qNpL34Okc+9rdRh+lJEOASKV1gUD8sSPMu+jWzOdaBpXJlbtpbu+XkMC/73Mw2DMkvznXdxSoNy/UA==');
define('LOGGED_IN_KEY',    '4FxPTRLPcL8P6Xt29NvBoqSnSKK+mEsqil47kwgLDvliMrOX5Ed2QWvdYrhVwZHo99j5V9FRX14FHtCIoeF+Pw==');
define('NONCE_KEY',        'uU9875iR/K6JP5a/4zJ86cs0BVAiND+qL0nzRKUMFyCvPYUoYeoJniSvbgXWKRjRaWEv73e3jNA2pYZ3IC6gVQ==');
define('AUTH_SALT',        'eoZsVxTlpMYBsP/L9/nrorovGT7ACeGjJbzOCcRLKcAPAL4eWtoGeAWjU+nUm+vKh3ZrWtBBW3jYtroiBsdoyg==');
define('SECURE_AUTH_SALT', 'CJG84v/k9ieOmZ3iG68hi++PAFYatPiQcQA2PS3ysbKr7ubRvMAOWSaKY+Jkp8n3BIVTHcBu3OJU6JGBK+aZvg==');
define('LOGGED_IN_SALT',   'U/xF3frriJMWPdJp7o/uUv4e48nwl475uDYkaQsI8rJDmnOnrBHn5x4APEHG0ip3sbvwbRc0V7lVRCmPGxbcyg==');
define('NONCE_SALT',       'ezTU+2Kqapql0CNwE249XUgtZGA+aYJSU1waVS+skAJb2VLI0RPzoWTMyIYowf3/x+6E9XVbf4aY9sMe+v8k8w==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
