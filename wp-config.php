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
define('WP_HOME','http://tranhlua3d.com');
define('WP_SITEURL','http://tranhlua3d.com');

define('DB_NAME', 'tranh3d');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'O?Mm=Z+%ocm7AnwT>CKdbT8(#K<C;PC=i!QMoDar`fx0nk!?H*?n8.x6-cM@`ae4');
define('SECURE_AUTH_KEY',  'Ud Kfw|f8wW!:~S;Yefb~|(.AL2h)]=Zz$:jta,5U*2-zo_W;cDoE6Y=`Ys(ahw+');
define('LOGGED_IN_KEY',    '_,i:S%uaY]FT[5W YYzy=^s31jbLSX<g@WdiZt2mniv!}H% ?S,.tT6^=Cg=<n/o');
define('NONCE_KEY',        '*Tus)6^E-2OD!fG(7{7NslFe|mvu%FI}e4Fc7#Fk7N?9*A,2?1CukvEzf0+3WY:h');
define('AUTH_SALT',        'TQWmbBk_J!?AF3,(?O#$5zt:cD7c?4VtiVZ=hQHRgR1*7ht$97g>9T$?+`%`gQl=');
define('SECURE_AUTH_SALT', 'X2IL>#H1OE3`WaTIq Q`Xw.Vw83JFv{CC!j=;N- mp%,&CHM;wQ`0TJuR>Aj?VW|');
define('LOGGED_IN_SALT',   'RbP0>GK=Bj;(tTYQ5V]]3*AQ(an|.HyJ>1@?}T{Z1V2sj,qw$Y36.>yxd+2S=PQ2');
define('NONCE_SALT',       '9$3@dUYD6r~GPk~2xmEELf!0:P~.2s/T{tW?~iecHpB4-DQU:03$YPBz2=JV4UP5');

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
