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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'rel-bour' );

/** MySQL database password */
define( 'DB_PASSWORD', 'rel-bour' );

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
define( 'AUTH_KEY',         '[g_M?1V$COBeonk]0226@@t;fx+6ciCY;zQr.=QeV#K}>]q^wBC^Cx NYa07dL~9' );
define( 'SECURE_AUTH_KEY',  'rl28U?<$@Z<+j,B!/q8WL@iw{}hi$g_+&TC_loBE*7E+td?Q4?l)jn%Bz}Bw~Z3S' );
define( 'LOGGED_IN_KEY',    ')~]gMHIIXOm5qf`/[M(#JjC#=gzz_+4yAKN:9zEm?FCqn^lJt)1/H.ue.aF$BK)s' );
define( 'NONCE_KEY',        'A~IbTZ$hjAC#jca|%>|AT:k_SAy[wzcQ$HiXh$.*|/6u2?CTb4QITh[(CpT~)aWY' );
define( 'AUTH_SALT',        'f&]]JPo}?duh;KDd~pa09]oZ-BR=]0kx;l^_)^EPI_]8fmB0pN{S|E;0{FSTtNdv' );
define( 'SECURE_AUTH_SALT', '#2]U[0rSIAk:ugXi(w#N,nf1Rkkr]gh-!N#:MCC~]-Y.e(w&w8|oPyz0/r)7eEb|' );
define( 'LOGGED_IN_SALT',   '{%5:NolrJ=MR&Ip~bmxWp`#XB&F}I5~oy3waD>}Q#!JwovL#w&U~)@IPgLF-b=dr' );
define( 'NONCE_SALT',       'H%`3[Fr0KcODY,m12I3t{;}nz2zpnnA])L[qxM]x1r^bvR4K@WD;/uDB~=&y }[9' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
