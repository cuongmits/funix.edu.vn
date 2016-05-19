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
 
//SECRET INFO
include_once dirname(__FILE__) . '/../setting.php';

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
define('AUTH_KEY',         '{tb{yAJ_@4Rw BZ?ZPNGjsBD:!2}<44}U!l8-6**hWN5+K(KcA`#VLHNXIfDwOyn');
define('SECURE_AUTH_KEY',  'RBx{Dh!(46*eT6.EQ#Feu5)26[09{Y 5k1GkQAUMX+4D>G0an~ykX^nfwg&%e_N[');
define('LOGGED_IN_KEY',    'Tcp*L8]?w6r<}ql#$]HTs[Uo8RY-C IbsPA[O9(#b,kjq2+g;R(9jCKl$&]1=El6');
define('NONCE_KEY',        'Mv6G/euy4x.6]ee>I@k^z5<xZ%QgUvfoA)i#B<X(5p!cq5A0],|Vm2NElSTZ9BJS');
define('AUTH_SALT',        '<&bluOmfB:D]&`UVlyh8R1MxQXhWG5{ CUszn|0yI:(Jxc%tcK%IK5fAqBW SVg9');
define('SECURE_AUTH_SALT', '.NMm7>Qhli*ygM,<VK)4nEIX!3?hck@RD:2dxo[n+GvY)GFp1%|iD0%P{>tI}o84');
define('LOGGED_IN_SALT',   'ZqdnTxtK |(RSJTjJ4Kvg]fL,*g,Y/]xS<89$7qw9iYU[P3=LNIg1^(0zzFGGjCi');
define('NONCE_SALT',       'gh0zqI]Y0PO2X6nT2]jdr=qx[/9T!$|!f?C`E.J$y1L7WLo%I]rc{^UADDK-:pCy');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'funix2016_';

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
