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
define('DB_NAME', 'wp_example');

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
define('AUTH_KEY',         ':zdT$rER&x1Q^|b_x;m-za;9A//AxANJI-X:ou [*,n}X}VU/~buD+-R |dZ4te)');
define('SECURE_AUTH_KEY',  'w?L.d}pmZ% )z 3O5-PF04P(2-.zgtBu#5?*Wl6RL?JC2CTjv32oX1$qS5.JtV6g');
define('LOGGED_IN_KEY',    'gDHH3|yuT;3oKFRBr_43mx9r!pTXuW36~$?zke&IlR<r*Vgvo.]?>Jb_T6l?SHfC');
define('NONCE_KEY',        'wH]CtW^rlnRG;[LjLGlYoho3XE|t|<^Ep;%NFW<k%m*B?~.0d;hF[3TR(.ow|4N]');
define('AUTH_SALT',        'dm.ev)/l^k~y*SRq*agszCD;:7?Gvy+_W41{(x[xLMwiF*r,J8w6C,iSaZz~b+V5');
define('SECURE_AUTH_SALT', ']X-zH4Ax8f77V4 ,DlE4v2|8LgP^h&pxFdQ #Xjw_-!Sn-eK?/vpeV9LU@Wxsfp0');
define('LOGGED_IN_SALT',   's|G#?QCFp?bM?@<e+ds+H|~+[zx0ledTs<2HbFdCb8@r(QFOfQWZ|o[y#5D/:uw`');
define('NONCE_SALT',       'C$aIM(_H>b@C(-Hx_9MsZct=S&DNb;^V-y}5~+3G-6SY! Z:Qj5>kRt3BPt?#$Hf');

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
