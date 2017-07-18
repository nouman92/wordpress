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
define('DB_NAME', 'florida');

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
define('AUTH_KEY',         '+M%+t!e6OsMZ}*mKYrOuCM97Z<zc0G -S^xP6n8`VNnk>J:l*H{G;E@O_q[Dq# )');
define('SECURE_AUTH_KEY',  'IXgnm(&gV)]V:?g_1l*]LpI!m24HJ(CSXz%k4C!$vx#cq@vP5MbpmA)fzo~FBJc@');
define('LOGGED_IN_KEY',    'y3[XJ<S7P/Jr)z+)sV{8dm*:&G.G*J^K0kE:^~qzRZ}2%jzq|M#J(dt`7jv!c *W');
define('NONCE_KEY',        'aPWnRAuTi6EUppPt`1/{pq5P^/t(f^1~Q~;Hup&i;qD2`=8Ge#rpu9Seqz=h<kG<');
define('AUTH_SALT',        ']V%bZE?qWu+-LHQ8|kxP_A+^m<yd`^DT<* GEgXt0ixk%EqVr8+,6KZ{eL?3cmY?');
define('SECURE_AUTH_SALT', '=uz1k*^,aTsCpms>(6Ji*<:k2j$??$RjDBLcqJ~C=efYT:qG,TJ@VGR:/FDd@>y;');
define('LOGGED_IN_SALT',   '_fr(d`L=P*ls8JzR$eUx:/PzrHdn10IPIKz[akw)gY,q*!n,5G&]N][)woAHVCAj');
define('NONCE_SALT',       '@PR*g&[T8Vtx1+`>f(p*g#Q7r#2-[.C_7n=}*b;B$-_1;fwozVy(ltt^*UoFa6|R');

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
