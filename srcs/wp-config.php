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
define( 'DB_USER', 'ab' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

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
define('AUTH_KEY',         'DL>FNtc&jFzluc0Fg7ZI3Hi.%qg#`~[y$-O=Evs/UL<B`CbR`*|6V5YuA>6KkQh$');
define('SECURE_AUTH_KEY',  '+~TFt7aN<2dXsepK?D0&`Kck&OVd UdQS(~tigYi@ euE%Gxjd{Xpm*T?)ytHP9_');
define('LOGGED_IN_KEY',    'AwYv)fL+?ed+rz-+`[J+Ct..=XjV,Raz8UaK{a1)UR-YDR*Nax_`W*f_YgpeR,s/');
define('NONCE_KEY',        'Lh{25|T](cp?nZu41d=]doshu<Pi2)l?U.lf6G_ YIP,Y=Y_5;ig`Y4&.8{)fcMz');
define('AUTH_SALT',        '~Hl;vb}*F|Ne$PD_<Yl+ (EK7}zK|Pp{mkbl8x++2_HE{Q5y%bP*s|Eu.z;DI)/)');
define('SECURE_AUTH_SALT', 'P*LO+x*=S;aSyLu*{HWghD~D~(i d&xD2H#mjMyWx<7(G5IbK2^`BeJ_s>Ca88l ');
define('LOGGED_IN_SALT',   'T*a9E}|eIQl=>^?#GLGiV>J+zi0MKhW}-0V<0BQ?>CU<y<::DYo!xNgMrz@JX)>Y');
define('NONCE_SALT',       'HF5k>:LrI2MCO[U_TL*w8Dt.4X|PQ~*sOrJCT~p? 7|Oz+br-|2H})d +ME7lN/9');
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
