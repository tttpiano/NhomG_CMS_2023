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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_g2023' );

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
define( 'AUTH_KEY',         '+Ym!9hPrD&qucf-9A69M(etf}:);D`Yi=Ib9~MId@S1qErwt9-w,vuU{)6.=H,|y' );
define( 'SECURE_AUTH_KEY',  'J:{P)8l$Oyk,+{kH}`|_Aij,c{>Sq?I1kjZ>#FKr)<;P(-O~>gfbEcO|:Oq4uCw9' );
define( 'LOGGED_IN_KEY',    'AH=>r[U+rl18B=u|C$;A9lcf|L[2~;@*qX pW@!-/``9+1j5XvPn=N}aIM!4HGRM' );
define( 'NONCE_KEY',        'X,~ODb8f;lEg=W}fQ+o|HqjXYuDxA`:V!;t&L1=!|s,dB`lLF7@@e(Y{<LSLrcpq' );
define( 'AUTH_SALT',        '],=6%(MCy57jnE<wiNFY8eRKUx_a&qLRyBI)cqW3/iAAnCm?4fm*0?3evA%c#x}0' );
define( 'SECURE_AUTH_SALT', 'G(^~:qQJZ31reRh.[PA0s/J,?|JlC<Bd/_;/-gJ@TS}cmnD[xcxN#x`#X-K9[#Xt' );
define( 'LOGGED_IN_SALT',   '3H~wMjj5T@:F,r|0/^:NaX}96:&`XdMdK/^@o}fX{y(pRu69LRQ[[H~J|tk8m=-S' );
define( 'NONCE_SALT',       'snQn|c=o>Q])?RfB$p,6l0tamEcTOH,dj9{t~?C.t&qdo%pB*U*g[%-Yqkl$gcH#' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_v613';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
