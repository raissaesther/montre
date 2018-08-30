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
define('DB_NAME', 'montr035_cph');

/** MySQL database username */
define('DB_USER', 'montr035_usr');

/** MySQL database password */
define('DB_PASSWORD', 'F0lnn)8=rLET');

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
define('AUTH_KEY',         'jR)tdS}i-IwW9Q>52Bcl[%]l;(7-cAt.K[G7v`!4edw,y-(jQ@$dEDvj|uMQo=+ ');
define('SECURE_AUTH_KEY',  'ZEsFZslaf,%sed,sOM(U3H~Vwc27-@AS1PBF8DNv%A_3KUlv]8H`ih wM0KQ)<i[');
define('LOGGED_IN_KEY',    'f/z&y@36SzMPWPE3YA7LZg7V)PFf:=9fZuaSXmAkih{Z!DvO^q`fK d{*y2!E7?L');
define('NONCE_KEY',        'p1CWn:n(^E0%rIY:~G:80LazN=F4pUd_jZs~OU3-F<W*#W>QyjC4}Hk&f@^22_*U');
define('AUTH_SALT',        '8Ja51p=]~uCUj5<F_!EulAei%Kq7DYCb<kpm9jC{`m#q{t;]SM>7xJN<cx^i~G{[');
define('SECURE_AUTH_SALT', 'YD`CG%Ot$9gZkhs#z&vQNh28aQe2F+7O9nsF^)0bX.HFH{R*=d5MI2,8 Wazg m@');
define('LOGGED_IN_SALT',   'qH3-GJ3Q2uADw87()Or)Jg]gZv>_Mx8IodS~A.QqaP)wcy`l/gUOtcfRS# B(jv6');
define('NONCE_SALT',       '} qSy].s5(UQ3mS}DJ|ER9~u@e.>9w5ohQ3Eo4$4L1DrDANJUY-4J2A_4t|KU,38');

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

define('WP_MEMORY_LIMIT', '256M');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
