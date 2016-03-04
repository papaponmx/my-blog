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
define('DB_NAME', 'wpubuntu');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Killer93');

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
define('AUTH_KEY',         ' L`<I NA<)>Jh94DeLE%,}{(vA{)O|WsM]}68e1S(7mxrJ.n{}TY%3[-3 mSQOM]');
define('SECURE_AUTH_KEY',  '4G6;`Rr+L6?MQAbI,,b{MY>2}R-+-_OG[:M~AyftK|JKcZ+?(%IOFPE|gp[z;+Tn');
define('LOGGED_IN_KEY',    'g;7jTl<l3LU@X5Q+ w8J9blzx?;B];,57Hd3*ce%T`|-sXF})*>-IPqV)&t9AO`W');
define('NONCE_KEY',        '#Io?;*ROxNl2{s*KiI|=Nbv>5Ymj4$LQHYC6x1al8>*^2%udD@GAAqPrPv~4%p[U');
define('AUTH_SALT',        'M!wFB*d1<6u,d|9q MImPUTG;QB-4AX(*lovOEINS7Rp3|nT[TK14Nh-:,n7h4Qf');
define('SECURE_AUTH_SALT', 'g}yjwf HX/LJQ1[Q2S,5FBL:SA^Opq3d*2Vhd+p>4N^^i7ixDz$VNRZLH97/L2@b');
define('LOGGED_IN_SALT',   '`*Z{0ClZ1%]h|Ed/]4VAb>S]P-r]v1{4;+BS>(BaoISC[%Z3K)n,M|zf}B}Gfih}');
define('NONCE_SALT',       '.00hAy,`T}oCVP>cYXIy/pknL6adG#`A$/ ;PiL;+$hPWg0qm=zgoqvK)-ij=>wi');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pxa_';

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


