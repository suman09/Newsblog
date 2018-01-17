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
define('DB_NAME', 'wordpress_blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '!_TNnUe:>RB!Z@&YNxe 7_+j2d7I[_7;5(.FDB@/{OI~Wg8_0JIqwgmRAfy2co!1');
define('SECURE_AUTH_KEY',  '`XESO*.XfTb_^`dZmmnPew0 U)Q4Jm/#u_|{JXcNTi&Me~]0D/[kmTV,XF2CP?%>');
define('LOGGED_IN_KEY',    'G&cvuvD Icy4r+ {m3/v,V4Oq(]{`0J +:n}aeX+@LX$#uZ~Qu2NWL8dfxKt3X<R');
define('NONCE_KEY',        'j1T5MhmFam_YQ=(]!X:z{?P]PT7`ZG{BQ~> w[XrmPB27d?LOa?%A8I9n2>iDc.e');
define('AUTH_SALT',        'DErFl4r{p<=}[U9JiqP6;?OPE7=-3L!@qz*VR3)}9ls-t= <6f@s58w_Gz;Wspdh');
define('SECURE_AUTH_SALT', 'k=J39Fx*85/.js+:RJF/lMCdg?i_J`wX|@]gK3b=uRESv+0Xo]o(:k V-tXKA?0:');
define('LOGGED_IN_SALT',   'vL(K>5C|)83GN8sOFV56_cE)7W7C,?fTt/&@.4L_lswDnoEcKJ^S^z/nJ<lv5_T.');
define('NONCE_SALT',       'vi1%%;44&_)O92zRvoQzfJ,N,Au=~Dkk;hF>9x|_im|XMs(DK,XlJfNT#^[%:l8Q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
