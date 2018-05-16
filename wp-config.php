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
define('DB_NAME', 'ledtienhuyen');

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
define('AUTH_KEY',         'D{!k!9t4Wr|rMk8eSMGbs3PQLAM!*aUXO>VdhK[kG:f_/FQ&@K#zeK:6(l/q0O&6');
define('SECURE_AUTH_KEY',  '5_P=wB.3HH^,y5m{fP?1t$J/*_l<Q,5u<_vSMfA$HuxcUfQ2,[!hF~WA,w^F>nzp');
define('LOGGED_IN_KEY',    'x~? HHw76XBeDG!/ 1mE-s~$W42`(Skd):cS~5+1`B]$H5xl*&uXdMWGldu|mASF');
define('NONCE_KEY',        'J}z);[AUUs%N!/yG*+/y{9^>aFER1sv#Ga3.;iC^G8s0?w$H4MssjlR%r1qdDveh');
define('AUTH_SALT',        'Gh$R7PO8en]p`(|C$q+Y1E7.c@(29(HYHRI<&1Ew210xyYmP=jNWqVoQt?&(2mb$');
define('SECURE_AUTH_SALT', ')B1{ZZBzy(R`?N=pf7O>KB`cF`7<Ri-I/hg#Jp(7Kggd}3J>fjyx%`wQ<r%@eB4E');
define('LOGGED_IN_SALT',   'Diw`}Uu>7#_w%RP_^88|OO3fP3wNLP!IAn@h:0z6>{=vn5}JhQ;b=dx_Z{641(9x');
define('NONCE_SALT',       'nfnV@EM{!SR*bke(:8tN+Q|s^=9g4@@WijPJCp*#!tkN?cl}Rl58dEgbTP3}{lb(');

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

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', false );

// Disable display of errors and warnings 
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', false );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
