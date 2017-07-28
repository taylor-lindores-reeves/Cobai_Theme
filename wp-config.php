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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'staticX5000');

define('WP_ALLOW_REPAIR', true);


define('FS_METHOD', 'direct');

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
define('AUTH_KEY',         'q]KLn%$@r#(fVkC5c$F<-!FyDaE0Uq[ObK,JjH.=w{Y<cZ=NoB8FM.8>Tvw-nFAw');
define('SECURE_AUTH_KEY',  '>md&SMK!-&1Tp3kM:kr4b#Pl$eCSX=hD2|&AA4#0BprB:Sk|6m;n/[6yg{^Yl`WM');
define('LOGGED_IN_KEY',    'n)._4bg~@rX^;YZo$U|?~Qw9w1|q}P>^D+F6;lAWa,4x$3B&O2%k_>nI|5V,t+s1');
define('NONCE_KEY',        'VN)4-}65}t/rz6?yO-8Rs7<3Z#]|Q t|cA.a[KK?N+BZ)`y^n-d?&;s]|-K,D%+8');
define('AUTH_SALT',        '.y^|7qyrW:/dA}4IMV4UO)XRY&1Nsr,#Ds}R5%%a-jUH|=_czQuG4c+0ISm*I!M~');
define('SECURE_AUTH_SALT', '5!.X:8Omwb6Ef&0oM/3ocmcI0.V-mWYQi5ii-Iioqt/,b D}H}i|u)O%4aFU}-P$');
define('LOGGED_IN_SALT',   'aI%&#MQMaU%a0!82+x6Cg9(hzF:z|7:?RAvGnBxk{Eke6=`O4 Z+f1kJUk/tJ-5+');
define('NONCE_SALT',       '(-0MQP1E xn8U|0Q0.a[E%!w:-7)u|oviLvY<ApJt3 +7nde59)O6//BWthU3Nin');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
