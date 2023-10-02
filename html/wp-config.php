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
define( 'DB_NAME', 'wpv2' );

/** MySQL database username */
define( 'DB_USER', 'wpuser' );
/** Developer WordPress credentials: basecodelabsdev / 0p3nr00t6Y*uU 
/** MySQL database password */
define( 'DB_PASSWORD', 'M8n&b^v5c$x3z' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'MsXOnH2f*{[wsHAqS%CGm6rc7WGi98O8lL{$/CQHIcx-q2<72tJ)uvMF^TG?_^p7' );
define( 'SECURE_AUTH_KEY',  '7cJ>iu#~ZfENli[-P]f<^1VVwn|%E4@sv[_(iz%itL&7VWn_)X(%U/jCLr*/h.=z' );
define( 'LOGGED_IN_KEY',    ' 1[[O*.,wUvdI_O.y:hmnR0Nqb[hK+VYhPfC,,i=WT&`xQu.*H0:u4JBU?:B3qq*' );
define( 'NONCE_KEY',        '46AT]{}?uGT!I6_;d9Co)D<Uvz$`={,7.:7XP #C}~b4=hgjRA!hwhT?NHrfe^_)' );
define( 'AUTH_SALT',        'tAw)2| *pe/^Ap5,pV`+{o,;tG#7Ujt{iy,T&Nr|_chpcGH>16%69 oMa1.Qu2J>' );
define( 'SECURE_AUTH_SALT', 'DDxWGmpVz*x)*,6T(Fzq6Xs4B*sHj)c2[THLA1e~P4,# j,JP/(GYhVv~m6$F(*K' );
define( 'LOGGED_IN_SALT',   'Oi.n%{5|4(_gF-[[b>qC6tNWRXhNs{2#lww9fmx;faz1S@XSwJq<D30I`]$nIn|/' );
define( 'NONCE_SALT',       '#UXOap$p-a/?r[_JPeB396|R $P9@KO@W1K`WMzvVud7ME|rWvIiU6)-|xkh.E-U' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpv2_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

define('WP_HTTP_BLOCK_EXTERNAL', true);
