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
define('AUTH_KEY',         '(fvcXtzkVPd-mn0J#Wr>@{k6`z<]#D)r>+uVr)DSYk~4S@fEeJ[%|/s&d?zp`*FX');
define('SECURE_AUTH_KEY',  'Nr X(DDJ|nph=pw]s/4iOL2p%v.$@O#0s*b{J~C&g_X:Fn2ah%Gc,fp4Xv}(]r7n');
define('LOGGED_IN_KEY',    'i*$YGj$w_Wkl o%[)wQMhU|n/T3 N%KS;00(Mw]6TrH&[?mL,u/gcyo6xPG+JMc{');
define('NONCE_KEY',        'lG.eo #kdb`o&YU7UyGOdb4PKS~7A-R<yl:hVX:6/4BL,)W1-hMV qq#h,H{jYq,');
define('AUTH_SALT',        'P}*OI1[e#KhjGhAUzcA$)Q-n-+|1TQ<` W0GaqTP0MIA)+Kx53Q}g&{dx<wTMF2H');
define('SECURE_AUTH_SALT', '(a[d KI_wZN$/C`TetZCLtd%6.k!76m_9S:(@>h!Vk:lnCSQg2mSy3f*#QybMx%r');
define('LOGGED_IN_SALT',   ']j7=*@nv(-9l)I5xhc>;@4/Itmd{GaizsEG{ GDD7OnY[nKnY/g|:.MQEQbBVPqT');
define('NONCE_SALT',       'qXNr>yyUyOBLs^~0F3coScQl`Ip..cb.d`&L-4JFfJ!>c4QmGTlf.F`W 1O.5?[3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_test';

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
