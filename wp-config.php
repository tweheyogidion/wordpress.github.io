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
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '2uw]O]jZ*HdNaof=K|ta;:X%/^hdetqJ[5?<G&BllKc1_uKZ:+6T5)0*-g%Le4)P');
define('SECURE_AUTH_KEY',  '[w,j}Onw:O6nL;G(~c(I1SII6TV7[`Ae=9!oT+h^[zC>D+I_!Gx,FjZ36FWfD!6<');
define('LOGGED_IN_KEY',    'ddqY^^<>H(VK{=#`@~wX-cRFMc:9Lqvkc>Mw86)_e1,#U?@)so2+[t5q]&{fn0;w');
define('NONCE_KEY',        'm{i,*4p>#Vy)bgBFgQ8[<ydKj3xYh..M_mE9C{>>;a/w!/GbNbbR:dz${DjI~GRK');
define('AUTH_SALT',        'T2Cpx,]|#[QFbe#!E.!nj*J vU 1|{9%~q9lP!qoHgDq_&sWSVl6:!B`c|F,UhoF');
define('SECURE_AUTH_SALT', 'T%&SU@:UgDEC-(@v&]9]G:8~8 g*D3f.$Oc*<|SR44?zh3}4l3$hY_6x+-*wtu<1');
define('LOGGED_IN_SALT',   ':^A7{l5*v.!|r;RF{6KH}qclBxzwX5O#)Bui}zRN4Ku>[X1^/%:8);#.d:`t%`CY');
define('NONCE_SALT',       '$T8Wy_8Q@Vm|0(L/ol]OmgpL<{jW,2-soU?!q:UVd3{|ns!Hi*D SF0s8y=vG3IF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

set_time_limit(400);

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
