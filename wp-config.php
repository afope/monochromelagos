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
define('DB_NAME', 'monochrome_lagos');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'N:F9~9oSDi9pZw+CWbM+&eiI`!#qide:ek4!fxlmgy?b-sG*k%lobkCvquv*9Y0F');
define('SECURE_AUTH_KEY',  '[*<ph@(FC[4&<y-$+{Xcf:JvxjK3;@>f9d-LTmbe-J2&IIQowkq%m]-._>ssA{L8');
define('LOGGED_IN_KEY',    '])9)y||OxP4&O5V!l(|``(<[74ut$N,1|oiZkU7GyW7Z5weYqP>H0PQL]C;%!D?V');
define('NONCE_KEY',        'FjbyV{y@BvqDhL/l#+ue!lh-9F^m5am+)ww.)%:56->5xoak!5OC@K:0+O..Yu(C');
define('AUTH_SALT',        '?^mJI+T(MV9TEW5K:B,N%<swuoQc[ $jmF1S))<qWp ;ZUoO9{^VYZX}z5uw0e8?');
define('SECURE_AUTH_SALT', '5w}&u.zsmnzi|YkEkbu2E(_7I,R^FkC1LcJdnq9+7Ph?Erw1+Vd,|$WmN8j355lg');
define('LOGGED_IN_SALT',   'a6Jd9lL|j:UFmB$7%g&PjtkLT17Cs!)W8GT($L%F_a+0qMa%0)VB20Qj-_)iyF>c');
define('NONCE_SALT',       '@64{EGg!;CafVheI#WI:(JxvJ11KX[Wb.bAtp}#c(k6cgv)W<Yl&AOIUqAEn3uS%');

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
