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
define('DB_NAME', 'meroflix-db');

/** MySQL database username */
define('DB_USER', 'meroflix-user');

/** MySQL database password */
define('DB_PASSWORD', 'Neverl0st');

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

/**#@-*/
define('AUTH_KEY',         'y-A33C[y)AWYQbIF-:5~;;>bJLl<MCK1!tL#]yK$.|bs}_,7E*hn6kf(!($w-l]p');
define('SECURE_AUTH_KEY',  '9D3?KT^.&0%m5:?lzmGjEDl7##I-7 ,85(]J6RRPO|/K{h7`U*GfJMz2(-uEx.Bj');
define('LOGGED_IN_KEY',    '-C9)~SaxpA-NGFcm!mXP_BSgb+K+47#qb2QYtem&WPt~Sa?}XwGBR ,CI$EAteAq');
define('NONCE_KEY',        'J a7+|<n#=b2==Z/=:V,K9n({U*>-1X!U=}|^Q-`C}2%MExl=T~1z!9inaJ:b-*,');
define('AUTH_SALT',        '0+&DPW4KMAUgVl(8 kN:KnqqglE+GR2e{i*?ze(ouGR})^8Qr7=H(okK!DDL_:i+');
define('SECURE_AUTH_SALT', 'hc]C)s7Q^/ +_$JWx^qj%v#_!)P^TOlH,;SDvV}RV*p@uBw*|0^]=_.l?s-f,M;Z');
define('LOGGED_IN_SALT',   'N~0>R^,$$OUG+w`g|KQ$iSW_!>BCeA($U5W@!r]A%SL+IaD:>RJAtS}lbE7O-p,4');
define('NONCE_SALT',       '(_BM%XB*kB6J2K3 n!{*-dmZ$~MO&B&! ;}.hBD2Q4siRl+u7$HU=s2/`@Zfq|P7');
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
