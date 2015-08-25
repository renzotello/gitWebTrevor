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
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8888');

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
define('AUTH_KEY',         '-nH]acH+F)Aigj[AB}Q9>7foez(D;$qc(<>]KmTzkI]>Mc(+cXuS|l`q2!xV6pvT');
define('SECURE_AUTH_KEY',  'nSiTb?&Aps[C-vE#6y4B8RabkIs74qKT+O4q* Q4s/>om11B7y% j3&!wy*MF1FY');
define('LOGGED_IN_KEY',    '4{5BhOA{G+7(H2Js|F}9Nq+008<MUUiAWM*?{<>?k>@3Q!d6r2J=y|1Z&>m@b:*/');
define('NONCE_KEY',        ':R)u^[o-,W6$a`KC2XJsh^Hr1*0f|m_v*rQVqE~j9_tX-P|p)+CF)2[gT|37f 33');
define('AUTH_SALT',        'lQ@lgq}>]nt7<o>H&xug7:Hm[~n3LzlfSuR-*{irpt;8DDYo^S|F<d9UtJv2V|8+');
define('SECURE_AUTH_SALT', 'X9Qj+-?+[<JYPAC$B>S(^-f>LM&|7|Na!SG@tj1/[s]Uh/%y} 7R`k]&~(()$fW4');
define('LOGGED_IN_SALT',   ' S{1UK]Q:chlI}(kr1_5c%|g+56ttco;[Apvu,1`uPsHI4jp0RP2w%uY+|H&sMYX');
define('NONCE_SALT',       'JQM3|4#2JpN]xOm!@GC[+z^%NQ$&~?JSNarf(r*d!Y5_?.VB5M8At$&7H-!N[SD1');

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
