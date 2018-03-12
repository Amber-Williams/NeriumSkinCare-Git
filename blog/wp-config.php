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
define('DB_NAME', 'nscusablog1900');

/** MySQL database username */
define('DB_USER', 'nscusablog1900');

/** MySQL database password */
define('DB_PASSWORD', 'usaNscBl@g1');

/** MySQL hostname */
define('DB_HOST', '68.178.143.107');

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
define('AUTH_KEY',         'u!v_F<TD+qf=p(X!>kKH]#WfO1QI[1lV,h!Sv|qKA_PfT8!d0e~)#H}5}8CV;$Cx');
define('SECURE_AUTH_KEY',  '4[CjPms)m8Esf_J:)SYF zl}}r!D>y<bHAi=.W/`%OfkSiTC6!3f$>9j;5[S?*4Q');
define('LOGGED_IN_KEY',    '1?lgZ;Gtj@~&h.b:&C)mBjbB?U+[D#6}yr(U=*1X0^z,sYo$|.rO}[uIaM(9I}E2');
define('NONCE_KEY',        'K{I]=,;&T7?VStC2r*}!V%Cz)+UV[1qz?~@iN<5)H7<{vEOGr(q-B+EYepft&j9%');
define('AUTH_SALT',        '7DIBofF^Gt*Owam*[!F.7kM /}IA)z=FPsm*`Vxz[z=]#$hPwa+e[B6K{6ztyO5{');
define('SECURE_AUTH_SALT', 'b&D+-p99t|W3_0bO_|5d6k@6 U#S1IXlogf+5.@Y-Q/~<8Xvve]{H?)S)Wqo;ilx');
define('LOGGED_IN_SALT',   '7lZsgcO#C@^{-c ;`<vg^FLe+5^i@Zt?1t mK#QbG:C!VQ&jJz}I):Y$U=BNXy2i');
define('NONCE_SALT',       'FtWdn(b}65M9z<Ea]Cd.QUbg$<RW!tWzy)X}x{,&{nAO,]_^g<TAGIbQzie-I4zZ');

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
