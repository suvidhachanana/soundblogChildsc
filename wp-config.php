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
define('DB_NAME', 'soundblogchild');

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
define('AUTH_KEY',         '{xqRctX;ZFW9?|JSpHwZ;jbf@8QybDB/l4L]3PLTr$e/[ZUqphcJ_0b(6VKc+3-}');
define('SECURE_AUTH_KEY',  'k3LN!VsAR9[~v)W#,3<n#h@zcC4eK|+r<RK%[7$7_U&>@4Qc`k2+ nI^Oz>w)F})');
define('LOGGED_IN_KEY',    'a,Q}*$6+J$Q2Nm&`na:1]!eG&-[=@{j*cwa+MyQ8UnPNdc0JPgMKq,tA>TXb]/}{');
define('NONCE_KEY',        '@R, Cu97eTtijO aOtKWh4Dn0k|Zl@J@T*E~iT63Qgv}AIK]yl|c1(bXrlM:Y&r6');
define('AUTH_SALT',        'uj!uR|p5t%@9&/`)-*=SwoS8*DRdpfBY}kX4<)P5Fno8F-pFx2(Gf<o 6JD0%-d:');
define('SECURE_AUTH_SALT', 'MzctMI|ykjhjbD+ZtDdbdzA-c0flemrs{dQ7<H0xnX]aENjW;Ve2UH{fnDm9UT6k');
define('LOGGED_IN_SALT',   '`C#F1(nUUP#5B94lK3<f9~V}d2Y0Z5N8L|9+)cFfUR-M4eNqEL`?KoX!1>GAabH;');
define('NONCE_SALT',       '#nUP8~XYMq1SS>GyaA[eYkjDs_M>`B[Y9NX^!.F13_Q}Eu,xi+6wGkr}I!{7z^1b');

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
define('WP_DEBUG', true);
// Enable Debug logging to the /wp-content/debug.log file
define('WP_DEBUG_LOG', true);

// Enable display of errors and warnings
define('WP_DEBUG_DISPLAY', true);
@ini_set('display_errors',0);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
