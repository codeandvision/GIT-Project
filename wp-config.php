<?php

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cudenver_wp271');

/** MySQL database username */
define('DB_USER', 'cudenver_wp271');

/** MySQL database password */
define('DB_PASSWORD', '[5P[I0m1S7');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9wotwk53hopm5chlxxcw5ufwcz3eb2l59dltnsvrk0qltsebhm1dakg1pmrrgjli');
define('SECURE_AUTH_KEY',  '6mngjzoxkvrglxzu3wy8twj6jpbm5sgv9jl7rmn0rdvtuqzdhihwjye59svajcan');
define('LOGGED_IN_KEY',    'l0nskcdbqxg4k8dknwzzqj4biutlrzyoofdtfsav9p7edosrxuio56oes1slslll');
define('NONCE_KEY',        'vzhjvscbqbicun7zbjhgyxsle0apwoto9x9sbzu5gqbqt9trmndb38rsp03gdchr');
define('AUTH_SALT',        'zettgtodc0uoj9hhw8ioqdjktjmvlj2b2nlsvnh7untqicyjjtnamixt3qxqz0pv');
define('SECURE_AUTH_SALT', 'wtgcfhs0ims7fwc0opbbxocsg2awzrgl3nsdtt5qjhav9ya2ypsj3ym58wszbvr1');
define('LOGGED_IN_SALT',   'azzr7g4ajxbvpya2gj4pmbhlwsz6rgg8uug4fnjsvw5glrhfd7xj2whfa4sa2uo8');
define('NONCE_SALT',       'fsknbancgq3zp4b5zqct6mkabbzcqapiy5pxzhmqdvkfkzi6rkugdjsvtpmlkz5t');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_yz53qk_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
