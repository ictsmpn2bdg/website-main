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
define('DB_NAME', 'website-main');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'C-lU]E77k1Cp4@k`I}?LviG!+3U*vq|+b~_8lE@fS@gBsG9)Ujyu>woxgI5<GtG+');
define('SECURE_AUTH_KEY',  '(G&ds`?)?!!Dng7nU%(eN=a-dY2rznslvgNm4-(e]::@_4hQ:kR{hWyxq,h~ep4G');
define('LOGGED_IN_KEY',    ']pN-$#~B&i~-WK>^ H!`E#[w#{042>aeGE(la|LLG(t&-_iu<r/]MMurR1rm,?+V');
define('NONCE_KEY',        'X^RVrD!X6`hfWcS3rC0Z@04IoWN$Q/G*F-Gt79)s&! r2~{E?uY:%Nu5|Ym6LQT+');
define('AUTH_SALT',        'O}x1R/z2*Fo|S R)l-lZ7#BVb0)*wj>g$_#dEmo-$fo;t0rjC|h^!!iE(|&5^V9S');
define('SECURE_AUTH_SALT', 'TeJ,g/aOS<1L=gA_Hpd9D9v0|mj4WG>kc6nkKuQC#p)/Wn!m@9Q2 yQP=^S#q9ft');
define('LOGGED_IN_SALT',   's=Wl#8YH|z k<;j?l.i=0B!RNM!5w,tDojba8w>i&=SQ4O=]@YCvpXM]v5#+wr6E');
define('NONCE_SALT',       '}Pe<Z|6/ElZ=|Il6XR|=L?<]PX<W@|wx_/yOk%TSao1oAE{I+YkC-?5L2Ppndb7)');

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
