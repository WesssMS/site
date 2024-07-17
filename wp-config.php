<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u426388430_Ciz5e' );

/** Database username */
define( 'DB_USER', 'u426388430_9hm3o' );

/** Database password */
define( 'DB_PASSWORD', 'fh8m9529tL' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          ':_3B>j%MVd._.p8~lxcNa60stj3Fm1A2:Wc@D y6|3grISj.38wh?P6Zy8y%e!?(' );
define( 'SECURE_AUTH_KEY',   '(p`+Oen1hb$VAYw!Ghu17|iaT/bf$#N=h?VCfL#;sK~wKH#gxOU7qM%XCWCoArc;' );
define( 'LOGGED_IN_KEY',     'xlE.DMrJTzZ^I0O[x&<f&>[Xw<g2aHV^^?B;Q`8A9/QS$b$jV-ff}EWOL>Veu+=c' );
define( 'NONCE_KEY',         'ydgy|OU=eP]/Wx<FJ8)#A^q}:g?|*ngqB&dsZj!fPG**gp.n>!RUQNUnFEtV{f*1' );
define( 'AUTH_SALT',         '(X0lP#Qj*B=[|S+5ei-iow%Fixy0WE%l=0ePo!><G94@CM~MrG^0qi{@1FvG~Idt' );
define( 'SECURE_AUTH_SALT',  '|&e>x5D[DPxB3&dzgX=/5x9oog7Usx@:6?33> HB0#K*qApaQqLNXrX{BtH$S`Bn' );
define( 'LOGGED_IN_SALT',    'GKB@r_cEK[q0zlfJK+7QnlMf@? E!@GuSj8Ja)WQl+QJlB76PjkXjbh{[lifR.xQ' );
define( 'NONCE_SALT',        'O5<sE X!l*b7n*.<kY;v0S(w#D&+r7>=8YZ?{Yb|{G8sZh .fO7M[48hE3@<9mZq' );
define( 'WP_CACHE_KEY_SALT', 'TnbW{7@xpmuqOB_7KL,tdcul@M^Z,vBpW~0bQ1<MWk[>X9V}F^bii{,WcJ{3wD}B' );


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

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
