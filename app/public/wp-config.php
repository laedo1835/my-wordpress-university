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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'VZUhEAN`H{yO&@Oq_|(fij If)g+rru*w>2r`z*YiX<hm&.ggo,:nI6O_gu=5 )&' );
define( 'SECURE_AUTH_KEY',   'e@7,~qmCMs{e#*O*r,`UqO}g})B^}mEz_ImKL: ANst|q#Yyzu[|dWL?QgQd[4[?' );
define( 'LOGGED_IN_KEY',     '9|)H*f;By4+z-Lt8f[R(o[ ^s7Oh%*&%f@rVG,P?AkpFXJpxnO4-T,9P<K-~%%8G' );
define( 'NONCE_KEY',         'H:`H<bxBrUCm <Ab8:BGTc1niks+Sl8>3~O`@5_gOK5Af2YA;rm|>OJ.[DwFgQ$j' );
define( 'AUTH_SALT',         'eKRemo6*}9!ri=$-^_Llp1Z$c.SD@&tsg2Z3l>p<!@A[;|I20/geUOv-.iU|yd$Q' );
define( 'SECURE_AUTH_SALT',  '%zK{d!46D%j]>|q8])0LVT;hV4wJgUe{K$LAtg77y4iX)(s;Lw%dSGL*5>{O}TuI' );
define( 'LOGGED_IN_SALT',    'KHzrW=VuVb=O|>)lK/0!JfTV:vuKyv</gvmXe$U_Hb!9VimpNqn>/j#`tdH2+Uz,' );
define( 'NONCE_SALT',        'yE`8J;Yk||2.peZ1Qn$P1$EB<14h3g|O<y2E~>WPyF68l2}-$Ki-:%:5o&$Q!6/x' );
define( 'WP_CACHE_KEY_SALT', '#y-s[|Gvfuhk,{S?-sW0pogsufe<tUjJH][%8TR<&oI_j?R]5c</(JuE|J)WydQ&' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
