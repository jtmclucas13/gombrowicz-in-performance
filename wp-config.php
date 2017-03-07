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
define('DB_NAME', 'wp_gombrowicz');

/** MySQL database username */
define('DB_USER', 'wp_admin');

/** MySQL database password */
define('DB_PASSWORD', 'gI*EAmflO&ZrI%1I1Z2');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
define('AUTH_KEY',         'JUImU|?l]+>8T8a37V=D%vXz(76Zt3HaS9>X5:+EYv.}T-D{e{C+<?>dbZ/.vpD3');
define('SECURE_AUTH_KEY',  '|lLnPQO#@:V:Xb-Bv/pB8{V}W|Ez%KQ2YDIzGJ;kC3.7OwZY4&&/|xcp?1z9YBd<');
define('LOGGED_IN_KEY',    'Kz4kQ=3Jt{V4*}@aruqOO_xu*&KxO5{X:{(>e3c#!Az_$(.tU_1TXqQj+jb1^Kk8');
define('NONCE_KEY',        '.l?7bh :FFpOW$2IZHKnpm*;F4Zm~t~`z7Lrb<%-JGrzL(cN6-Bis5})xcYWMsfj');
define('AUTH_SALT',        's+DPW#6W&2{&=X[K $2ueGmWe.BYkBh<=231VfLB@o|tK$L]1/?~My?^8(eIU}K&');
define('SECURE_AUTH_SALT', 'FL`(*VPjg?wp;Jt1Y{s 4NpG1Bnqw`MOO)Z{AraV:,l/X`@-A~;3d:tNL0uNFnF1');
define('LOGGED_IN_SALT',   '5pA7bPfEV]-*[a13t_i}NS*asu4y<wg*PZfJm|Vc5+%0hX1_,4Cx}IF0.33API2.');
define('NONCE_SALT',       'f(~[|^}t-|3;+aLKh>v150~W2+ycKe:{l4|3RKJ`_/z)r<droeM2T}w}(Be5G0X>');

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
