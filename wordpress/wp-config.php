<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'meyzjcmc_vonvangb');

/** MySQL database username */
define('DB_USER', 'meyzjcmc_vonvang');

/** MySQL database password */
define('DB_PASSWORD', 'vonvang2015cl');

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
define('AUTH_KEY',         '+C>Ab0-m[p2F8r/e0xQu/l^yV74W-DN4U2e[i+35Qc6!fA%w!i+1pLMw[kv}Ok::');
define('SECURE_AUTH_KEY',  'ca++x~0Kat0FfYx+pI}+-;ySgwrY/z~hZ{IJ}y_pu/g {Y~-|+)MiaCcDUf,yU*{');
define('LOGGED_IN_KEY',    'lvTwIS;]A{Gb>_(wyn^3%xw=k8V!3^NT_&<5rR3G(4DArk@*K6yr8hr,%E.ENy9e');
define('NONCE_KEY',        'KK}pq}mYzXZQ4iK>tO4(<|XNLjtW(%SY /ygVXC.?1!0V.`2EXKANyuh|w3>~iU ');
define('AUTH_SALT',        ')D0~m;j0&1D~g(#HpU-xqN[YN3<MJ#ZU_:l>3g?.@l}cJFSo+&*7-p`:A6cPj[M$');
define('SECURE_AUTH_SALT', 'GP8R+_|AEpC.HE: zG!FQ4.KeAPyu6+ unM FL{IzsdmluOwZ[!2X`pcwn_jo6ZQ');
define('LOGGED_IN_SALT',   'nG7,W??#di/Xi4OIHw}WJ?va?=+whV4}u.Sa8L74Co|`SCw Ed6#}?xT-65<bCZi');
define('NONCE_SALT',       'q@~|Ih5Vk3EiU)Ywo|k#d 3Val6Hb*%ry^6&>>dM}3UL}:*umVW76-YAF+m5m-~t');

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
