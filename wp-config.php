<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0S,}<vi&W!ld_dFp5]510axL/K[)S]J*n%vVfMsV<9S4G:nDp-iYy1Up66jF&&<-' );
define( 'SECURE_AUTH_KEY',  '-1<OVvOFOV0-v_kVaazm>BE=G+yRI)s=|q-eGy,o OSq0f/;eDm N#C#1JWb8v-A' );
define( 'LOGGED_IN_KEY',    'Gs;wb7_*UF~XOkUvot`,w=+?a:kV(GO=!-B:}9o#HN|VBI?Y?/27hON>w|B@&BiJ' );
define( 'NONCE_KEY',        '+lx#5Li.+N)Ec*NNe--UnD_E.?Ch7=20O)!YG~b5cu^3>%/&;1w.aw l0yIKMOn7' );
define( 'AUTH_SALT',        '||O?RBJuD6i~,BsqtH^C7?eMX@qyfZ<r;`235?(dylhnDcZ7-AQ#Ei6hi]v9JweA' );
define( 'SECURE_AUTH_SALT', '93]tn+gwui3ZOQKBy0F4WJY~5$Wmrd9T3),rYz V;J8O5Gj`_>)x]|[DO45K^n9Y' );
define( 'LOGGED_IN_SALT',   '59`H,M:eFzui,j00pWtL&:p1Uj5?i8]Bb<qAWp-:sS_0LXXE,P}GiY=8Rcba*M?T' );
define( 'NONCE_SALT',       '<{jZL:~L0CA*DTgF20^C #?)guGlga.,h(lJ:/vc7?4R,;tQcEfGk5(ca:1YWm!F' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
