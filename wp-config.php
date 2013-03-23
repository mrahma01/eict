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
define('DB_NAME', 'db383351816');

/** MySQL database username */
define('DB_USER', 'dbo383351816');

/** MySQL database password */
define('DB_PASSWORD', 'alphamabdul01');

/** MySQL hostname */
define('DB_HOST', 'localhost:/tmp/mysql5.sock');

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
define('AUTH_KEY',         'xAeV3xf+`.*}lka*F%pj_7R4^zy{|k|>t=w=p>#,98^ET#kL?Y(Q-9;]_.c`b+i+');
define('SECURE_AUTH_KEY',  '+`z,3#2$`m>j+K4|a2a$*J AUZs?>4@se=a, KW<^NllnAp(jcB]!HO|M<~YA*B0');
define('LOGGED_IN_KEY',    'U]?LgGkE7&hH/Qh)_v`M+T6Y*?T>mhQ==5f~6!bEw*cEHL}uaZ><)?jSH60}WHi3');
define('NONCE_KEY',        'Jr@(2RGWiW3E-Ga+FC [[xb%%^87HFlm7<BY]k.]+;SC@~W(}E:,Y) s%!wwHQQ0');
define('AUTH_SALT',        'wwNGm}]c0]}Y+AHz{_R2xDH3)m5=RE`#|AAX8DZ1C5zMABrurl@<Dm(epI55lnRW');
define('SECURE_AUTH_SALT', 'Wo&o3zY,1IC+tD>QB6)-?Q[hj70IC0<;jJ?df/-P{}Bvq|3?-+z?4+zVe/5WudD+');
define('LOGGED_IN_SALT',   '4tTDQ1Z+*A~hC%+*]-<7dGxeg<dSn]d1GF,;T4+||d.<^5~nCkgW3<?}5$U)oNZD');
define('NONCE_SALT',       'iB5GCzzJg,ZUPhEWm{y?5@^fnpD6r_mNG)4Q?C9Y*P]sRQ#q+?6n,-4AWHbBD-:v');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
//define('RELOCATE',true);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
