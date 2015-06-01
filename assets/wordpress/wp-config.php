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
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

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
define('AUTH_KEY',         'b:fd|N5Dq3berbJ;a=Y.p?y.&?Qz{ WBJ|wSBW(rc$;{dbajbghlMu>ie]VUl3)n');
define('SECURE_AUTH_KEY',  'PkKUE-,r E+Rp4m8H(%-i9rucO~JLs?kQWo6=:=8rHQx++0A&<l.ogbuZkiFMtv,');
define('LOGGED_IN_KEY',    'uP6d;j(Rtr^jFm<T1/IvnS2F]|LV,^iQ<P>BU|-]Gt?Vh++2U$Zm^)rM0Qng:+A&');
define('NONCE_KEY',        '-A~*A6JG(mi+eyA[%l.`Ek}Gx7[e-NiGht/6Xkgb]lL,!b+&`0YC;h@`;I?/tGrb');
define('AUTH_SALT',        'zn}T|+R =eEnYWA4f[6l,-RW+4q.4P^>JSQr|O=B%F7vT04qIdUbxhBsYByKG:xH');
define('SECURE_AUTH_SALT', 'GT q~=#w4B^x7AB-9+GKb f.7cM$/w9I./Y$i5+2 Q-^-~`K&Q>m0Dv5U~cV9-X8');
define('LOGGED_IN_SALT',   '-HO/<OLfj/Yf[ow+?hOPTE9Ht2~ `qFee)(73@*gE1C5](@KL?vIu*6~|Jb2<3hA');
define('NONCE_SALT',       'GxFfU]W7|<MLqWF,lyk@,=?aA&5^!K!>s9SUQZ!w*lt7,-eA!+*_;9)N-49D2#**');
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
