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
define('DB_NAME', 'wp_private_blog');

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
define('AUTH_KEY',         'i1nk b70Me)saR:Cys=7N(i(n^bm!JG)}[QnMz;%Hys(5qT#.V>x+QEpR,4c+=o+');
define('SECURE_AUTH_KEY',  'Uymx-=>G--oka!0Xysl+Rq7<D! a5?;xGjYN%v9Y|,ME>sfSEJjOJ?gF;3%+Hu6g');
define('LOGGED_IN_KEY',    'cy{&Ml|cy4R|1_(0v;GMo.AXaw<6?Xt:xxUi9#V_2R0dy>[L]O<cdLRb,ACD%=Wb');
define('NONCE_KEY',        'Qw2:,a~&Fbk%aZyfOd{M]}e5|HN-_(kX;H8#Vhy1%_/jKtXr>1BHC,.Y-a=$_TIW');
define('AUTH_SALT',        '1n@E]qe5!}E%zitjx56P[2sM=@~(9`J9n94%[P+Ke}6fipE>oW@/=Yb<4pE IMt?');
define('SECURE_AUTH_SALT', '*dr]dUk,f@^4dRy ?/]!;x/vi]DrG-rYOj|3,_@osGxP*.%H%I/jPvW*,azkl6W.');
define('LOGGED_IN_SALT',   'iH2r[},~tPT=]:bP-Uer$?9:Wdx2ou{y0KtYhVFvk#}a>.9U&l)ADeh7aKBGNURV');
define('NONCE_SALT',       'qT-paX*10neXx|/P<j~bRU< wIGbPj;~!v2:S:6)q{#J=*%3%}qI~vIfeIaZ|&<I');

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
