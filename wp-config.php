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
define( 'DB_NAME', 'sendigitour' );

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
define( 'AUTH_KEY',         'RP%AAyYsO%*Isg>r&R]cv3<R??3@_#U d^Um`=oWir2f@$$$.Q]iU&Fh]jb|rm}1' );
define( 'SECURE_AUTH_KEY',  '1Ysd8{:OB@K<j])oy@-Hs(=[75hN,k8fxJ_Jr!I;z?:] !w #n=1w|I[r+,7_468' );
define( 'LOGGED_IN_KEY',    '[N8jKyA}3gsyqgELlh@Rnq_W/{HA=g`h<)K/{jSRm}Pggqi^{0i09{DRt%Q>3=o[' );
define( 'NONCE_KEY',        'Zh$K7k8ESua&SWRHixth[wa~p~`Y(|9z3jglmkJE_DQ?D{6Aa[JOiJ]?P~<9]9z7' );
define( 'AUTH_SALT',        ':gX~d4UEn:%eXjEO/(?kT o6ce7$~I&TmIL@0W!Gq_cREV{Wk_)rd!g0Euv}&cz;' );
define( 'SECURE_AUTH_SALT', '2LOG#tK%N3ZO VjL&&|i%1XmQpjm0dHI.-h`x fpU2YB3i>&$TDTOD]u+X-aqGom' );
define( 'LOGGED_IN_SALT',   'OHW}c;s@HI@jg8yBvo;p.mz=lqI[+!CK5w}r!M5?Y>[@,EEf{,|;V9L,@F_i}o1x' );
define( 'NONCE_SALT',       '1{Oyu7:LB6/-j]iYME.raDKWPC>hk`h^}Tz#/PAae1yKMA&RxVWLk3xAe8Z3}Hxe' );

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
