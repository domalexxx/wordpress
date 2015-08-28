<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '~T@-8Bd ]_4wm!6&eP&x9@`=v]4jR=zY)c+JlnMea+GvQ5SzxM=i,>pR-Gb+h,{ ');
define('SECURE_AUTH_KEY',  'sw]F|k><IIH .;*6*#cb^g bp{Htc.4-xw|=hI&I/Ud)!9n8)W7+zRA 8iFT^|*i');
define('LOGGED_IN_KEY',    ']O4Ty7U5RwF>-`z&-9l{t t4#ocXXP4$]J}X:8<Rt/`08kd^SeZ4?n?[9;daj<re');
define('NONCE_KEY',        'ok)Xa:^w?]c/&-t%+U@2QO}i-W4NWZ<#ongjYeL^/+Jn} YAn[lZfH1JGveh++x)');
define('AUTH_SALT',        'l|=LZu<Cp~&13}CHH2w^j(t2*n-xFH{nXSl0[XP GFi<.jHn-A*3-o<M0FeAM+VD');
define('SECURE_AUTH_SALT', 'ZZTgkQkuu`ES*WJ{]9:F+i?-?c%3W0M+qYn@->-26M+7+=RbI=KLK>?-6XpR5n&2');
define('LOGGED_IN_SALT',   'bd/qk=&pfE+j-EZS`!#[P3#-%U]CkdhN.tz|cd7,C{5r![EJ!Vnc }aG>+-JI_T%');
define('NONCE_SALT',       '/hmI$Di9tB2|m4eYDF^< HZNQxaUj(gk$P}$XE^Ps-*+kWF)^y)AOX2 p;zBZkW%');

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
