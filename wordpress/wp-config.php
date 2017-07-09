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
define('DB_NAME', 'savoie-faire-wp');

/** MySQL database username */
define('DB_USER', 'sfUser');

/** MySQL database password */
define('DB_PASSWORD', 'Revelation214');

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
define('AUTH_KEY',         'eMz*:0Vm4VENgS[fvpZqMD2cDi!u?4B+Cc2}UM7ruqp~3b<Q6|N,XY53ptOE`H>j');
define('SECURE_AUTH_KEY',  'WzK4OGDd*qv,_B>IMlbo/d^/M>|2X/3])7p}#II2?V)Ca>y*& 9)&b>w>.M|tUNv');
define('LOGGED_IN_KEY',    'sE3LzNy=##Y7-tS~^^15.>9g)Y,~R)W5g!hs8!-Q.:$,aAt#Wvxw~Ebq|9}BB N]');
define('NONCE_KEY',        'a.Gp7St;PG7(E/ZP=|om75tLf9_TCHgW(R`U>Kz}W]jK(1LqM-HYZvDQM ^GER=:');
define('AUTH_SALT',        'WJ_Bv=.rmFBIC9O;FRpc!-UI5^Fk6!1^j^VSWbCb{E2-FDpM~{4XbIA1BZ)K&^DK');
define('SECURE_AUTH_SALT', ',[[oW,bl73YT+Nu9~sw}yvVzW}il~HJhXh=Ubx: suW3Wnn<Q>uev9!MJqj5 ZIz');
define('LOGGED_IN_SALT',   'R=A0;W[+4{87P7] yqG9=zp_}=bdXZfkwOgBArO#)u h~WP1l=zI2qumOHX)e^lt');
define('NONCE_SALT',       'WV6RCK$CTK<0hIC&P(g$/7PxO,@[IF3A2JOC%<?L7$2G[etN@i^-4mt*W!dG^#ex');

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
