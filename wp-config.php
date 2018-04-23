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
define('DB_NAME', 'travel_booking');

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
define('AUTH_KEY',         '#BHW+kcOUoXerS>dJ-%S0[n2{cy6kI/5sNy>[MC}|mV}!rmT^+~#-bS}5BwPaTJO');
define('SECURE_AUTH_KEY',  '~eAw3w&)xA*#?=6~DTGbv(ZXu;17{UqO|]D^!vZEx8~UX 7LN?ZT;NUI0KqC5E`,');
define('LOGGED_IN_KEY',    'C:%^hz9>x[0Xtpwc~W&ez+;dEYg[O`Xr7YGlUz4k]ir.o214}:6SOIeJgK+pnyCN');
define('NONCE_KEY',        '<^jEnuv9b:RBQqP[&14[jJ@U; JOt[B:B!j2dB|D9Y^exuvlgL%w)6UX]Q(?4V)U');
define('AUTH_SALT',        '6qJ0mBT7m[WRqXg:)Zjs9h[GG[a2bs|5jC;}4!C]<fbx`f08XwZdf?Dj).2Op.RA');
define('SECURE_AUTH_SALT', 'Dh/Z)_Rc8!MJ{2p1@h^:p,E39O)[[`?O,go~E,oVE*[R(FK:k|C%TC S9j.<X5v0');
define('LOGGED_IN_SALT',   ',6&DP X9TTxSh?B1Pn//f9Jx*cplSOZ{y^#BS`bEIMkS/nfl!X+I{5ISgpVF-ptA');
define('NONCE_SALT',       'Ie@MVlNJi}z@TFkGvsH8Gcvq#TKZccb+O%L%UhwIi616l~Pj>C~+[OcoHKKE_A2q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'travel_';

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

define('FS_METHOD', 'direct');