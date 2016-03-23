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
define('DB_NAME', 'accelerate_new');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '2PZyi;3t$j>^|=bnqk}k&(H -aefAF9R)MqJ5~>|w+-wL[57@n|3fE*!oL|hOx5I');
define('SECURE_AUTH_KEY',  'qJ-CML.,xYlfX+6y;(?j]<SQY.9q(S3N?{B> B3r=Q#[c|;<{]rGa=Yl+,U!DOU*');
define('LOGGED_IN_KEY',    'E(A7L%spsNvtdE-!(v+VSK:Prwsk#R3b|1xa,o`)^|Y&m3E1Lu`B/?zDD>3MV x+');
define('NONCE_KEY',        '/6D6r25pS1.%5YH)big.^#7-0IT >>yLl[7J4|2g-6=Fv2.=2$Gis*C+ p8*vv=Q');
define('AUTH_SALT',        '3{3dVgwN>CfJhcT%7Sy`nL[~7E<|1%=|.U~2PB+q.br~#YY 0&4P^h^J8~*t^kMA');
define('SECURE_AUTH_SALT', 'u$egR&sMa`CyiU+7A/H0U,6#wSK9aKo29 a<H[{Z#_|R~upYU|N{||%E/2VP0>--');
define('LOGGED_IN_SALT',   'xcy5p&FsHVlk|,E}jU`.q/0>TmZ*dL.,HsPB0k}Wb>tpZN1<VgF^Z`i3fxd Z!b*');
define('NONCE_SALT',       '7]co`+L+O--~wn~bbn,JAO]o!7Q3:S@~I)(#D)g9PC([(D*}u+.YkTDM/9`MnV$&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
