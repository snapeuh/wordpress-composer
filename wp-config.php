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

define('WP_CONTENT_DIR', __DIR__ . '/wp-content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-content');
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-core');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         '/d9E6!0!rlG^{DsBGU+5eChE!WR /SU-UdSfVXd#B@i<E+CwyD,-[<>A%:#_Zb0b');
define('SECURE_AUTH_KEY',  'GX|k-Y@VUiY|Ef9g+&x@!!O6<oP[6wFGhGPryB>XwJ5 HxDr7gi,1*@?zoc%i#@9');
define('LOGGED_IN_KEY',    '/BO%+@fuqE%%mNt{`DT:K/,I2W)Y(}+B^*KgwG+x$7sFJHC;}~,6dMY}s2q&;7T`');
define('NONCE_KEY',        'T-qGJ-FVfo~csNK$=%<[#Q@@1+`)WYKpUYdGzf|DYPdv-GH*J1-g(V|h@DF#^EJQ');
define('AUTH_SALT',        '6n.tDEIE)~TJMdG6n.U26z8Q2WPyjQu6,#r+Kiy9T7#G; {i/r1G-oK8|4A,gF|s');
define('SECURE_AUTH_SALT', 'X|t;xAU|Rw|U9dM3:FEqX<Mad8=E+0A!:A,j~y<i#(mctln7_-*~q1E;Lj_@+<( ');
define('LOGGED_IN_SALT',   '(]riN$hb?-#]Y#k3RMv@;!rwS #I=ld)&|/A[<Q@F*Az[qta3nVPf`;6d!kI?|.z');
define('NONCE_SALT',       'x$$%UT2dD}rm|#$9B1%=w@W/f%:UT&2soF`&&h@F5qB VQF-9Cg_$O86yx.+nlDJ');

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
	define('ABSPATH', dirname(__FILE__) . '/wp-core/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
