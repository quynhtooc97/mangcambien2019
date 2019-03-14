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
define( 'DB_USER', 'wordpress_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress_passwd' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'PFr|#PNfm.MP2Ws<-v2}:/x,wtJb~G]@(H_Tg]6H+N+yGZArQUBy`oaXBgIJc.*G');
define('SECURE_AUTH_KEY',  ']K.ZS{Ve]6C,HCXqf+oJe,md@Ai3^}F |iUryhom+Eo}XQyx?42N~yrS*%ZfVs9]');
define('LOGGED_IN_KEY',    '2PMxVUkm<%-hA-*d<5_FNcgY8KFtx64>Hf+0v[+Fu2|Raio-{HC6j-0^zH!2exN%');
define('NONCE_KEY',        'i-^P.wWQhVKH{ogl0,C=7PeZvB+tw;b=e,YJn2<q%Z8jR{Mq1L+~kqc&+0=,kPKo');
define('AUTH_SALT',        'E|1;fVZqR#;&S)c)[Mc$-X7(-zujo(g($k4XT (gHclR|XNU9J9/^lUD]v&yf8:|');
define('SECURE_AUTH_SALT', 'RzMYi3_dx9*q!ViDzKgw)o#^bw/8d{]@m/UKO|V%C~T%Y}m6C7u[XG$o6_DR ,i/');
define('LOGGED_IN_SALT',   'WNP4yM][-XNgL-I-&jO+i8{s-!;=f<3U2-8o+|BuIt9_~ixa(ZME+|z%[qsSbw 8');
define('NONCE_SALT',       '{w)[S+jBai}bHwp3#R:YAePWh#n0M6t>]@3YbwDHOC>w?/w]KE@_e|}o|!-1sa2 ');

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
