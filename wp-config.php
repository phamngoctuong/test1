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
define( 'DB_USER', 'app_user' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'q!GOT_8G,|s~u9s<(jBCHf+d,0GhPW,0mb+sbvI*{[SQ+ h7ai+j5:/OKF?&RFx,' );
define( 'SECURE_AUTH_KEY',  'S EtEc@7DW{?tBkhOz8g3kV()kD;TVcN nx}p+ )^{J1<<tvL8!&^u/h2AJ<7}LJ' );
define( 'LOGGED_IN_KEY',    'k^P(xw8LaRvTGaTMTbUDyAU%Nt.7m#@GpB-mbhObecP3Y3%Th#.PkIG`X94o}93^' );
define( 'NONCE_KEY',        '~DE3T7Omti-cwTmvC]EKPbvRr%c]}%Pl_=?T{+?wX2LkbB<Q{qJl &)_+QQ7Oo^{' );
define( 'AUTH_SALT',        'OCx6kE+z!Ay#9]?t.zLI5oSA>wN$z sp+U#1`=S;C/4FKMe+N<To*lEViE=f(2|t' );
define( 'SECURE_AUTH_SALT', 'I`4/!2++eE-ZpCHyIEO{Cajy!v:2o4BU^T+@Fd.-/z| Dby#wo +Q,{zzX.>|p?@' );
define( 'LOGGED_IN_SALT',   'ur XwUO+jscW5vS-~>}}Znf:=Z6h==A90]iHsb|B^4H7f~[ Ko?:SXVQBr}*0:Of' );
define( 'NONCE_SALT',       '3v)+=[frDy(-EC11-$T3lQ_C/+:1Sg%dcldF:f[WI-q{@R5= -IHMG{?IUwR?w:t' );

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
