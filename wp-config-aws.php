<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'RDS_DB_NAME');

/** MySQL database username */
define('DB_USER', 'RDS_USERNAME');

/** MySQL database password */
define('DB_PASSWORD', 'RDS_PASSWORD');

/** MySQL hostname */
define('DB_HOST', 'RDS_HOSTNAME');

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
define('AUTH_KEY',         'N++G]+A-wWaU?h?ZM@k|u}6|I`HLDxcH^h:-=pjLAGt~x&N+dy)Ci%Xr|r]gxC~v');
define('SECURE_AUTH_KEY',  '{y4!2Ay4!lX`c)Y&(|Er@hJ3W.DeOXF]NpuTcwe~B@@ro+1.W&cQ@!8zqUF{e}0y');
define('LOGGED_IN_KEY',    'c.t<N=7wqo(WApX@pk0q;i{$j,Fr=crA?h+-_|WrRQ|{K2R9J1G`u^5X#x3bNLBW');
define('NONCE_KEY',        '7t}U0/fJJcszo(ADi(*VHc*UBl~A*I.n+UM(BG#!Ltw,Q=FT}t-)>$peR[,puOHI');
define('AUTH_SALT',        ':ZISK5WzR}dSxZ^qWwMJ>7,uv/%mV|-_pK<OBycC)oT=/NoT?I){iI_Q`7[UO+Jb');
define('SECURE_AUTH_SALT', 'pGVUl]XX^x-wVJo4|^8i#PjV%VIX7N~G#d;@LVH#x!5~?h+G%~:sQ+T}58djw.!z');
define('LOGGED_IN_SALT',   '78-zsaQ-mA/NN3C9L^x0D&G<B#+|`#h?RS_#u2-5Ukj|?Hs5%!+ehwuMwjQRa1SY');
define('NONCE_SALT',       '7veEI3(X brFgufV0y-5Y3%VW@b[ 3w4?W9uTYY{osV~n6y$#Kz*-kPNY9<>2*n)');
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
