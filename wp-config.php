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
define('DB_NAME', 'montr035_main');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'p>.:}KoB+uHUbX[r@EC{Kean`bGa~@D9WR+33:vh_.j/HbAt4eaQP-|E&Y$pcZFl');
define('SECURE_AUTH_KEY',  '{{L!7){[r%&Xb^j!#m;C=$^OuYk~B,1>j]CNg:yj?=9AgF3d<QJ1]y)&1q><+;Im');
define('LOGGED_IN_KEY',    'L@iTN6J-DQ`2wc7@An-E#4WF`>)ks@(mC[/E+7mPbS%wH`Vo6Z!;g&jz{?B#z#?s');
define('NONCE_KEY',        '>>MA<|5ah*mY65sy60)bH*dF>_5Yh(7{h@S(pTf4j&@ %IG7udUQI+ .*=W4@6@b');
define('AUTH_SALT',        'cXt(j2E_MXJ}n<SrvGqT^^49p%_7WN#X9q1Wa+/PW67Y5PO^yCigkj)Q`~xMLX=G');
define('SECURE_AUTH_SALT', '!c+QF:AcV9q ng?E)XP-_{:<-62,aBii{s*]zo~ Ddb(99e]8++o]e>av?uE$$?/');
define('LOGGED_IN_SALT',   '=:{p monRdK zk!QqK(TH&^[o3D2CA,]MlgQ2l.NQPG|#PkCD]f0gD<3:}6|Q}c6');
define('NONCE_SALT',       '%?%JFP)NqCoyR@#?:f:>7;EW:#ydNbZg}Jno!Nj5T,0J2BkLyKVU.[%ItG`L.|K$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpm_';

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
