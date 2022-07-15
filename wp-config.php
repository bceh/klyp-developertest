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
define( 'DB_NAME', 'KLYP_test' );

/** Database username */
define( 'DB_USER', 'KLYP' );

/** Database password */
define( 'DB_PASSWORD', '11111111' );

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
define( 'AUTH_KEY',         '1y5pV-r=dSr]Db)S.b)v^<UEN6Cz)a4zT@6}493[n?CIJ!l0d9~lUDUbos=EO][`' );
define( 'SECURE_AUTH_KEY',  '77KY0n`sq.[5zJfocqDQoymtsLoX!&`ah>dfL>Bjmset2e DpQG6^v^:X3G[:+i0' );
define( 'LOGGED_IN_KEY',    '^Z>pIx*]<+}n19q^%Uq 7H)- qLzL)SLt_c-(_e6wJ2L]oJ.ges4x6`,wlLC1WUV' );
define( 'NONCE_KEY',        'pSJ[$uGtt~([3o[/8DqJO?^/k{5M[(a8BrgXs<S!K(pfz5;{H=(.(qzU%HJ.*.qM' );
define( 'AUTH_SALT',        'x4oHcxAW|wF^_})<P#SZ u9x@GcN!eh5|j,6bi6is1GQK:t[Tug[1=Vf1jX |Z],' );
define( 'SECURE_AUTH_SALT', 'w,%}7+T&a<|eAs(R(#$dv{DiD x`o]aY)WOn?.GYne?D6_N</4xRg0TuxJT$O=iM' );
define( 'LOGGED_IN_SALT',   '&l/J,GphHYU!qzY?]!tyx_fIbq6y:nCLrxn#OejT*Er;^t7kzOA8@r3No0n$sOb<' );
define( 'NONCE_SALT',       '!@Ts$+af}z~K-&3h{!S,2%RLWE@^*Wo]m3sQ6QvnN%k[b4V!m-M$rsdpM~0oiiZp' );

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
