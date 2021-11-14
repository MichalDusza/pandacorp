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
define( 'DB_NAME', '04877470_michal' );

/** MySQL database username */
define( 'DB_USER', '04877470_michal' );

/** MySQL database password */
define( 'DB_PASSWORD', 'H,@bqpyM*3LC' );

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
define( 'AUTH_KEY',         'a+D*[R yZ]t;B)4ZpDZy$sOpbHjbljcM.}zTt0;dE[)hSuL#lA+EwtDkn?.`pJ{C' );
define( 'SECURE_AUTH_KEY',  '`.moAwu<aQZjZea g0L-<_@EWl9D9_z<)OcYeO{1P|m,sgViuKMIM]g)ZXi%^pHo' );
define( 'LOGGED_IN_KEY',    ';#.Skc^M+<SW,W8 /m{at8$nMZRD7a|56StV[DP|A2Y[kPaf[8$o[VsoGI^}i%pf' );
define( 'NONCE_KEY',        'D(([t&ai+:1Ue@Hz.gB%t|>Q%L$RK_17DPJvf7stx!k@fzyw6mIFZr]Fg7_Z=Y*p' );
define( 'AUTH_SALT',        'lOS11]wO>{XR*$OA-C_D@fX/~Dqn8z}Daa+iVhtN(8rqdiJm_no![j6NI*|SeUwE' );
define( 'SECURE_AUTH_SALT', '`p+#f:~9GC2#uj W-*IQz~=a;`J#cqxf4J{,)b{TAoX.j-aq}S8uJ4)3wT?Jx|Ux' );
define( 'LOGGED_IN_SALT',   '#u?h~k2Q8}a9:tWVOlN|{Jl}KuCLsD[Y[PrB57A5Ni~.vvaDex4E(a;Rkl~rFfPd' );
define( 'NONCE_SALT',       'JWVD@}@Znx;-Rr0LgYh_X}u:[q`qH9o0wIE,nj}EUe)j//-Q`A_g-U )r@?ObWT#' );

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
