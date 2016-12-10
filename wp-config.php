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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'nouman92');

/** MySQL database password */
define('DB_PASSWORD', 'nouman92');

/** MySQL hostname */
define('DB_HOST', 'systemlimited.ciijcuajq75o.us-west-2.rds.amazonaws.com');

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
define('AUTH_KEY',         'DE-++Pw&z`t9QBD3BCV]$2N-3yVqNB*+Ax|CT@`]e-[M:3.nlyWM5cRUhvxV@T]&');
define('SECURE_AUTH_KEY',  '!a-|Gvy#,R^V8HA~|D~%K4(pIg[q=T[g%81qC|SugzUW^?kznE)Nd4^-Ade2Re}o');
define('LOGGED_IN_KEY',    '-dZ1Vqenv&(4s^sAgciEFT`#&Uc7f,LpxKSv(yS0Y#|yi[(}6yDxQBIrJHDv.Al0');
define('NONCE_KEY',        'ebVQ3>~AHWH(n-XC>~P|B~fxiHK=sdWhfk1nQLU`O`@N4&prs+3/detu~VEx~D(]');
define('AUTH_SALT',        'A|+xxUS^9Uao-:u_ _*B<%B|hJ[sZ/Cv+{,b7qLO,lYL)@n/,{m|p~j2!voe>2%<');
define('SECURE_AUTH_SALT', '?Bh(r+P-(Ntfx;X=~=iBCM*P}Gz2h{TNP/1V)<0D5ndP_R{ eMVZts?faW-(b.j ');
define('LOGGED_IN_SALT',   '&ZY9az{-w_7o+<T=[RyUY7-};03XfJ{-vEZk* V9+{ZCaoZj/-N>KG5)6Ktn1Y15');
define('NONCE_SALT',       'u^dYeE_03P!|vXD%KFNDo@B!ZPbyO-mV Ox$qT#8Hqjw7_{35=/6O?}7kH-f,5%m');

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
define('WP_DEBUG_LOG', false);

define('FS_METHOD', 'direct');
define('FTP_BASE', '/usr/share/nginx/html/blog/');
define('FTP_CONTENT_DIR', '/usr/share/nginx/html/blog/wp-content/');
define('FTP_PLUGIN_DIR ', '/usr/share/nginx/html/blog/wp-content/plugins/');
// define('FTP_PUBKEY', '/home/username/.ssh/id_rsa.pub');
// define('FTP_PRIKEY', '/home/username/.ssh/id_rsa');
define('FTP_USER', 'nouman');
define('FTP_PASS', 'nouman92');
define('FTP_PORT', '22');
define('FTP_HOST', 'blog.noumananjum.com');

define( 'CONCATENATE_SCRIPTS', false );

define('FORCE_SSL_ADMIN', false);
define('FORCE_SSL_LOGIN', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
