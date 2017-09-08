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
define('DB_NAME', 'The_Digital_Factory');

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
define('AUTH_KEY',         'D+oP0(Vr^7;aq|8B>Dt?I}S&.fytV[s*7zsT:}g4S9sDDwXQ1w@]6>J=>aL&X$%q');
define('SECURE_AUTH_KEY',  '53&P$;pxZvz,Qa5jAz*QMu[4$uHOn^7$=<R5k f!{l=e_u%:b+5&D*a4{no=  i7');
define('LOGGED_IN_KEY',    'r?/ow/Woj5&y4U,Ayl~uVIrn;`.DKFKR,21>qX 1/@MYR:AxwZFf<Bx~COWSLTfT');
define('NONCE_KEY',        '/vO:bZ<91Lw&Js@ero]L,|I7O.9klkl=LuQRySK,u$;N&esI,jk#mw]Zpvr6}r@v');
define('AUTH_SALT',        '7wJpzi2Nok|5dZ$>F3k%4|h5_]$RM/N>cwh163$c):&`7!&714-C/;W0/9U/G!xr');
define('SECURE_AUTH_SALT', '8Iv2(-d9]TgI%&/QJ~!F2_*~0idWIES^Z9bmB97GOd4PW@<-yM/]Z59-Utk_KjC,');
define('LOGGED_IN_SALT',   'Rr:@gdodVGbYQ3V@O_lq>zP)++e#o=LodgrKT.2w^:}9J4Lq(}%WZt1qe8z1z>Ix');
define('NONCE_SALT',       'V?7;J~]Q/OjL.7C&-#3C|Ss^L:yKEEG_Fi &35V]ShlB)p>Q[2u=W=fV_lIJgb^x');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fdt_';

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
