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
define('DB_NAME', 'blogsite');

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
define('AUTH_KEY',         '?d,AI22}tWSsXJd~R?{Tn,KxxuHN<EK@S}7v9:R>^3KHx^k*>E8Z~+eu,3=~V:z?');
define('SECURE_AUTH_KEY',  'ld{N91vwo8w][bi+]/3O&*&h:fbX*;0+S[vr4:NDg-v7%/6Ks{K%]0`<SKrFe |c');
define('LOGGED_IN_KEY',    '2]dj5xN@IbO!RaJ:=fP_di*HWy3P35doM@7U.Diraz<@&o+X~C^Ll2*s>nN5[|%C');
define('NONCE_KEY',        'K+(7TcD1rxXg&4TsGm^|lcuA[BE{0,]@Y&GDP::[U]Tq%7pB4,w/0b+ ]8T0>eu,');
define('AUTH_SALT',        '*dKX:<6#@=r{iy]xZ@1{p}g)ek0s.MO/OGY,Ku<I8EjzYJIx)RZdx8)5;1HrEsJ[');
define('SECURE_AUTH_SALT', '%6iK|XZSRp0P/v/Ee>mYG6J|,y9+4~&m_>qpe!L*W*oh h~Y>6]aX!QIN^x{E{1 ');
define('LOGGED_IN_SALT',   'CaQ[=hi1*Q>wVW/!0xZEfzOW:puEqU{E7%ALfK<nqrnqm[6bGi%zw$VRa;*R7o56');
define('NONCE_SALT',       'y{ qx?Fj7[nE|Nn5`UQslFo#2/eVo l;XG*@{ZcpOtuf)ozbua@cZQ%@1@>9Pf0>');

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
