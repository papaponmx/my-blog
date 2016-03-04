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
define('AUTH_KEY',         '<)FjL09#O,oXLI2E%[eZ0/G/wP3O/W9v1TbOQE5j07=SZ8oYMFoBF }ECeGFgF:k');
define('SECURE_AUTH_KEY',  'cy6NqQn%RJ*%;`IZ{Fu&DbgMD}8zvv1&_WONqx7HT1Ah&l/+;ILF%h++F[1Q+;0v');
define('LOGGED_IN_KEY',    'Df4,@#G,!7}q^HOO~F`;qie}Sp[_u?gg.r[|.+X|YyrFCGv/J%g2i72WQloFE8|`');
define('NONCE_KEY',        '>tHzA448[Web]pz=iUTPzd Sd2D1mhd%Jj|%4<D~5}~9|S^nDA:N_gMT|#jF>rNd');
define('AUTH_SALT',        '|KCc{@3&T;Q641=+y4^?#(vcS7OU?8n2.$M8`ZfTI~!4%/*eSVs.;.TuQfIkU ,s');
define('SECURE_AUTH_SALT', 'L@D/]tg):2/CJn++*8dy-cev!A*6#2B*F5?n)V_#V-@JC-+4*4Iz=#JobM7e]#;^');
define('LOGGED_IN_SALT',   '-#3Pz=03Vu!K-S:trA|%@|#WV_I_bE:mu?`A6V[Z7ws[~gD5;R`br>;(0G@J!fj$');
define('NONCE_SALT',       'C?]7NN-CEouSZ4u|Q)UW%bQ(2e<XI5p&o`c{^wm{quB{ |8R+!6  n-hpBxq)%{f');

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

